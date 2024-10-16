<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Donation\StoreDonationRequest;
use App\Repositories\Client\Home\HomeClientRepository;
use App\Repositories\Donation\DonationRepository;
use App\Repositories\Project\ProjectRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationClientConntroller extends Controller
{
    //
    protected $homeClientRepository;
    protected $projectRepository;
    protected $donationRepository;

    public function __construct(
        DonationRepository $donationRepository,
        ProjectRepository $projectRepository,
        HomeClientRepository $homeClientRepository)
    {
        $this->homeClientRepository = $homeClientRepository;
        $this->projectRepository = $projectRepository;
        $this->donationRepository = $donationRepository;
    }

    public function index()
    {
        $homeTitle = $this->homeClientRepository->getData();
        
        return view('donate.index')->with([
            'homeTitle' => $homeTitle
        ]);
    }

    public function create()
    {
        $projects = $this->projectRepository->getAll();

        return view('donate.donate_form')->with([
            'projects' => $projects
        ]);
    }

    public function store(StoreDonationRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            $this->donationRepository->create($data);

            DB::commit();

            return redirect()->route('donation.index')->with('success','Donation success');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }
}
