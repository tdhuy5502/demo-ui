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
            $this->homeRepository->save($data);
            DB::commit();

            return redirect()->route('admin.home_content.index');
        }
        catch(Exception $e)
        {
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
            DB::beginTransaction();
            $data = $request->validated();
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
}
