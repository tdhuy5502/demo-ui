<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\Project\ProjectRepository;
use Illuminate\Http\Request;

class ProjectPostController extends Controller
{
    //
    protected $projectRepository;
    protected $homeClientRepository;

    public function __construct(
        HomeClientRepository $homeClientRepository,
        ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->homeClientRepository = $homeClientRepository;
    }

    public function index()
    {
        $homeContent = $this->homeClientRepository->getData();
        $project = $this->projectRepository->getLatestProject();
        $projectFund = $this->projectRepository->getFundById(4);

        return view('newsfeed.news1')->with([
            'project' => $project,
            'homeContent' => $homeContent,
            'projectFund' => $projectFund
        ]);
    }

    public function show(Request $request)
    {
        $projectList = $this->projectRepository->getProjectList();
        $homeContent = $this->homeClientRepository->getData();
        $project = $this->projectRepository->getById($request->id);
        $projectFund = $this->projectRepository->getFundById($request->id);

        return view('newsfeed.news1')->with([
            'project' => $project,
            'homeContent' => $homeContent,
            'projectFund' => $projectFund,
            'projectList' => $projectList
        ]);
    }
}
