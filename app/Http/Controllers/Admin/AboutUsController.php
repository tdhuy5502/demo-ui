<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUs\StoreAboutUsRequest;
use App\Http\Requests\AboutUs\UpdateAboutUsRequest;
use App\Repositories\AboutUs\AboutUsRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    //
    protected $aboutUsRepository;

    public function __construct(AboutUsRepository $aboutUsRepository)
    {
        $this->aboutUsRepository = $aboutUsRepository;
    }

    public function getData()
    {
        $data = $this->aboutUsRepository->getAll();

        return datatables()->of($data)->make(true);
    }

    public function index()
    {
        return view('admin.about-us.index');
    }

    public function create()
    {
        return view('admin.about-us.create');
    }

    public function store(StoreAboutUsRequest $request) // change request
    {
        try {
            DB::beginTransaction();
            $data = $request->validated();
            $this->aboutUsRepository->save($data);
            DB::commit();

            return redirect()->route('admin.about-us.index')->with('success','Create Success');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->route('admin.about-us.create');
        }
    }

    public function show(Request $request)
    {
        $aboutUsData = $this->aboutUsRepository->getById($request->id);

        return view('admin.about-us.edit',[
            'aboutUsData' => $aboutUsData
        ]);
    }

    public function update(UpdateAboutUsRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = $request->validated();
            $this->aboutUsRepository->update($data);
            DB::commit();

            return redirect()->route('admin.about-us.index')->with('success','Create Success');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        try{
            DB::beginTransaction();
            $this->aboutUsRepository->delete($request->id);
            DB::commit();

            return redirect()->route('admin.about-us.index')->with('success','Create Success');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
