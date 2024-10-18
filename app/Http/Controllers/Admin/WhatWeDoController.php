<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WhatWeDo\StoreWhatWeDoRequest;
use App\Http\Requests\Admin\WhatWeDo\UpdateWhatWeDoRequest;
use App\Repositories\WhatWeDo\WhatWedoRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhatWeDoController extends Controller
{
    //
    protected $whatWeDoRepository;

    public function __construct(WhatWedoRepository $whatWeDoRepository)
    {
        $this->whatWeDoRepository = $whatWeDoRepository;
    }

    public function getData()
    {
        $whatwedo = $this->whatWeDoRepository->getAll();

        return datatables()->of($whatwedo)->make(true);
    }

    public function index()
    {
        return view('admin.whatwedo.index');
    }

    public function create()
    {
        return view('admin.whatwedo.create');
    }

    public function store(StoreWhatWeDoRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            $this->whatWeDoRepository->create($data);
            DB::commit();

            return redirect()->route('admin.whatwedos.index');
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
        $whatwedo = $this->whatWeDoRepository->getById($request->id);

        return view('admin.whatwedo.edit')->with([
            'whatwedo' => $whatwedo
        ]);
    }

    public function update(UpdateWhatWeDoRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            $this->whatWeDoRepository->update($data);
            DB::commit();

            return redirect()->route('admin.whatwedos.index');
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
            $this->whatWeDoRepository->delete($request->id);
            DB::commit();

            return view('admin.whatwedo.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }
}