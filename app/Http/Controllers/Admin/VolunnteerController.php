<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Volunteer\UpdateVolunteerRequest;
use App\Repositories\Volunteer\VolunteerRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VolunnteerController extends Controller
{
    protected $volunteerRepository;

    public function __construct(VolunteerRepository $volunteerRepository)
    {
        $this->volunteerRepository = $volunteerRepository;
    }
    //
    public function getData()
    {
        $volunteerList = $this->volunteerRepository->getAll();

        return datatables()->of($volunteerList)->make();
    }

    public function index()
    {
        return view('admin.volunteers.index');
    }

    public function show(Request $request)
    {
        $volunteer = $this->volunteerRepository->getById($request->id);

        return view('admin.volunteers.edit')->with([
            'volunteer' => $volunteer
        ]);
    }

    public function update(UpdateVolunteerRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->validated();
            $this->volunteerRepository->update($data);
            DB::commit();

            return redirect()->route('admin.volunteers.index');
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
            $this->volunteerRepository->delete($request->id);
            DB::commit();

            return redirect()->route('admin.volunteers.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }
}
