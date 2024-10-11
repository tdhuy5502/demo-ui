<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Donation\DonationRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
    //
    protected $donationRepository;

    public function __construct(DonationRepository $donationRepository)
    {
        $this->donationRepository = $donationRepository;
    }

    public function getData()
    {
        $donationList = $this->donationRepository->getAll()->load('project');

        $donationList = $donationList->map(function ($donation) {
            $donation->project_name = $donation->project ? $donation->project->title : 'No Project';
            return $donation;
        });

        return datatables()->of($donationList)->make(true);
    }

    public function index()
    {
        return view('admin.donations.index');
    }

    public function delete(Request $request)
    {
        try
        {
            DB::beginTransaction();
            $this->donationRepository->delete($request->id);
            DB::commit();
        }
        catch(Exception $e)
        {
            $this->logError($e);
        }
    }
}
