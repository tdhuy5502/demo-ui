<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repositories\Home\HomeRepository;
use App\Http\Requests\Admin\HomeContent\UpdateHomeContentRequest;
use App\Http\Requests\Admin\HomeContent\StoreHomeContentRequest;
use Illuminate\Support\Facades\Log;

class HomeContentController extends Controller
{
    protected $homeRepository;
    //
    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function getData()
    {
        $data = $this->homeRepository->getAll();

        return datatables()->of($data)->make(true);
    }

    public function index()
    {
        return view('admin.home_content.index');
    }

    public function create()
    {
        return view('admin.home_content.create');
    }

    public function store(StoreHomeContentRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();

            if($request->hasFile('value'))
            {
                $imageName = time() . '.' . $request->value->getClientOriginalName();  
                $request->value->move(public_path('uploads/home-content'), $imageName);
                $data['value'] = $imageName;
            }

            $this->homeRepository->save($data);
            DB::commit();

            return redirect()->route('admin.home_content.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->route('admin.home_content.create');
        }
    }

    public function show(Request $request)
    {
        try
        {
            $homeContent = $this->homeRepository->getById($request->id);

            return view('admin.home_content.edit',[
                'homeContent' => $homeContent
            ]);
        }
        catch(Exception $e)
        {

        }
        
    }

    public function update(UpdateHomeContentRequest $request)
    {
        try{
            $homeContent = $this->homeRepository->getById($request->id);
            DB::beginTransaction();
            $data = $request->validated();
            if($request->hasFile('value'))
            {
                if ($homeContent->value) {
                    $oldImagePath = public_path('uploads/home-content/' . $homeContent->value);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                $imageName = time() . '.' . $request->value->getClientOriginalName();  
                $request->value->move(public_path('uploads/home-content'), $imageName);
                $data['value'] = $imageName;
            }
            $this->homeRepository->update($data);
            DB::commit();

            return redirect()->route('admin.home_content.index');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        try 
        {
            DB::beginTransaction();
            $this->homeRepository->delete($request->id);
            DB::commit();

            return redirect()->route('admin.home_content.index');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function removeImage($id)
    {
        $homeContent = $this->homeRepository->getById($id);

        if ($homeContent && $homeContent->value) {
            $filePath = public_path('uploads/home-content/' . $homeContent->value);

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $homeContent->value = null; 
            $homeContent->save();
        }

        return response()->json(['success' => true]);
    }
}
