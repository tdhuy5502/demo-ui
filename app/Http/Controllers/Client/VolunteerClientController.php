<?php

namespace App\Http\Controllers\Client;

use Exception;
use Illuminate\Http\Request;
use App\Mail\VolunteerMailConfirm;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Repositories\Project\ProjectRepository;
use App\Repositories\Volunteer\VolunteerRepository;
use App\Http\Requests\Admin\Volunteer\StoreVolunteerRequest;

class VolunteerClientController extends Controller
{
    //
    protected $volunteerRepository;
    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository,
    VolunteerRepository $volunteerRepository)
    {
        $this->volunteerRepository = $volunteerRepository;
        $this->projectRepository = $projectRepository;
    }

    public function create()
    {
        $projects = $this->projectRepository->getAll();

        return view('volunteer.create')->with([
            'projects' => $projects
        ]);
    }

    public function store(StoreVolunteerRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            $volunteer = $this->volunteerRepository->create($data);

            Mail::to($volunteer->email)->send(new VolunteerMailConfirm($volunteer));

            DB::commit();

            return redirect()->back();
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }
}
