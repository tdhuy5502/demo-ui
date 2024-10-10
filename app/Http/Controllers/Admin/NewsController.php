<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreNewsRequest;
use App\Http\Requests\Admin\News\UpdateNewsRequest;
use App\Repositories\News\NewsRepository;
use SebastianBergmann\Comparator\ExceptionComparator;

class NewsController extends Controller
{
    
    protected $newsRepository;

    //
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function getData()
    {
        $newsList = $this->newsRepository->getAll();

        return datatables()->of($newsList)->make(true);
    }

    public function index()
    {
        return view('admin.news.index');
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(StoreNewsRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            
            if($request->image)
            {
                $imageName = time() . '.' . $request->image->getClientOriginalName();  
                $request->image->move(public_path('uploads/news'), $imageName);
                $data['image'] = $imageName;
            }

            $this->newsRepository->create($data);
            DB::commit();

            return redirect()->route('admin.news.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function show(Request $request)
    {   
        $news = $this->newsRepository->getById($request->id);

        return view('admin.news.edit')->with([
            'news' => $news
        ]);
    }

    public function update(UpdateNewsRequest $request)
    {
        try
        {
            $news = $this->newsRepository->getById($request->id);
            DB::beginTransaction();
            $data = $request->validated();

            if($request->hasFile('image'))
            {
                if ($news->image) {
                    $oldImagePath = public_path('uploads/news/' . $news->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                $imageName = time() . '.' . $request->image->getClientOriginalName();  
                $request->image->move(public_path('uploads/news'), $imageName);
                $data['image'] = $imageName;
            }

            $this->newsRepository->update($data);
            DB::commit();

            return redirect()->route('admin.news.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        try
        {
            DB::beginTransaction();
            $this->newsRepository->delete($request->id);
            DB::commit();   

            return redirect()->route('admin.news.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function removeImage($id)
    {
        $news = $this->newsRepository->getById($id);

        if ($news && $news->image) {
            $filePath = public_path('uploads/news/' . $news->image);

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $news->image = null; 
            $news->save();
        }

        return response()->json(['success' => true]);
    }
}
