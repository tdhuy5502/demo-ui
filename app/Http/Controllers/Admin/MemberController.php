<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Member\StoreMemberRequest;
use App\Http\Requests\Admin\Member\UpdateMemberRequest;
use App\Repositories\Role\RoleRepository;
use App\Repositories\Member\MemberRepository;

class MemberController extends Controller
{
    //
    protected $memberRepository;
    protected $roleRepository;

    public function __construct(MemberRepository $memberRepository, RoleRepository $roleRepository)
    {
        $this->memberRepository = $memberRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {   
        return view('admin.members.index');
    }

    public function getData()
    {
        $members = $this->memberRepository->getAll();

        return datatables()->of($members)->make(true);
    }

    public function create()
    {
        $roles = $this->roleRepository->getAll();

        return view('admin.members.create')->with([
            'roles' => $roles
        ]);
    }

    public function store(StoreMemberRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->validated();

            if($request->avatar)
            {
                $imageName = time() . '.' . $request->avatar->getClientOriginalName();  
                $request->avatar->move(public_path('uploads/members'), $imageName);
                $data['avatar'] = $imageName;
            }

            $this->memberRepository->save($data);
            DB::commit();

            return redirect()->route('admin.members.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->route('admin.members.create')->withErrors('An error occurred. Please try again.');
        }
    }

    public function show(Request $request)
    {
        $roles = $this->roleRepository->getAll();

        $member = $this->memberRepository->getById($request->id);

        return view('admin.members.edit')->with(
            [
                'member' => $member,
                'roles' => $roles
            ]
        );
    }

    public function update(UpdateMemberRequest $request)
    {
        try
        {
            $member = $this->memberRepository->getById($request->id);
            DB::beginTransaction();
            $data = $request->validated();

            if($request->hasFile('avatar'))
            {
                if ($member->avatar) {
                    $oldImagePath = public_path('uploads/members/' . $member->avatar);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                $imageName = time() . '.' . $request->avatar->getClientOriginalName();  
                $request->avatar->move(public_path('uploads/members'), $imageName);
                $data['avatar'] = $imageName;
            }

            $this->memberRepository->update($data);
            DB::commit();

            return redirect()->route('admin.members.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back()->withErrors('An error occurred while updating the member. Please try again.');
        }
    }

    public function destroy(Request $request)
    {
        try
        {
            DB::beginTransaction();
            $this->memberRepository->delete($request->id);
            DB::commit();

            return redirect()->route('admin.members.index');
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
