<?php

namespace App\Http\Controllers\Client;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepository;
use App\Http\Requests\Admin\Contact\StoreContactRequest;

class ClientContactController extends Controller
{
    //
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function store(StoreContactRequest $request)
    {
        try
        {
            DB::beginTransaction();
            $contact = $request->validated();
            $this->contactRepository->create($contact);
            DB::commit();

            return redirect()->route('contact')->with('success','We will reply you soon');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->route('contact');
        }
    }
}
