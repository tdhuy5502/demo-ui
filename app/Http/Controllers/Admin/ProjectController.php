<?php

namespace App\Http\Controllers\Admin;

use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreProjectRequest;
use App\Http\Requests\Admin\Project\UpdateProjectRequest;
use App\Repositories\Project\ProjectRepository;

class ProjectController extends Controller
{
    
    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function getData()
    {
        $projects = $this->projectRepository->getAll();

        return datatables()->of($projects)->make(true);
    }

    public function index()
    {
        //
        return view('admin.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            $this->projectRepository->create($data);
            DB::commit();

            return redirect()->route('admin.projects.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $project = $this->projectRepository->getById($request->id);

        return view('admin.projects.edit')->with([
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request)
    {
        //
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            $this->projectRepository->update($data);
            DB::commit();

            return redirect()->route('admin.projects.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        try
        {
            DB::beginTransaction();
            $this->projectRepository->delete($request->id);
            DB::commit();  

            return redirect()->route('admin.projects.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }
}
