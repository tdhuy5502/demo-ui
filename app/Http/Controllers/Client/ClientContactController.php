<?php

namespace App\Http\Controllers\Client;

use Exception;
use Illuminate\Http\Request;
use App\Mail\SendContactMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
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
        
        
            DB::beginTransaction();
            $contact = $request->validated();
            $this->contactRepository->create($contact);

            Mail::to($contact['email'])->send(new SendContactMail($contact));

            DB::commit();

            return redirect()->route('contact')->with('success','We will reply you soon');
        
        
    }
}
