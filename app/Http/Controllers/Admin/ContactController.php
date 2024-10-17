<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepository;
use App\Http\Requests\Admin\Contact\UpdateContactRequest;

class ContactController extends Controller
{
    //
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getData()
    {
        $contacts = $this->contactRepository->getAll();

        return datatables()->of($contacts)->make(true);
    }

    public function index()
    {
        return view('admin.contact.index');
    }

    public function show(Request $request)
    {
        $contact = $this->contactRepository->getById($request->id);

        return view('admin.contact.edit')->with([
            'contact' => $contact
        ]);
    }

    public function update(UpdateContactRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $contact = $request->validated();
            $this->contactRepository->update($contact);
            DB::commit();

            return redirect()->route('admin.contacts.index');
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
            $this->contactRepository->delete($request->id);
            DB::commit();

            return redirect()->route('admin.contacts.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }
}
