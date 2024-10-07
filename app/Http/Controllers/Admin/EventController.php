<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ManageEvent\EventRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    protected $eventRepository;

    //
    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function getData()
    {
        $events = $this->eventRepository->getAll();

        return datatables()->of($events)->make(true);
    }

    public function index()
    {
        return view('admin.manage_event.index');
    }

    public function create()
    {
        return view('admin.manage_event.create');
    }

    public function store(Request $request)
    {
        try
        {
            DB::beginTransaction();
            $data = $request->all(); //validated
            $this->eventRepository->create($data);
            DB::commit();

            return redirect()->route('admin.events.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function show(Request $request)
    {   
        $event = $this->eventRepository->getById($request->id);

        return view('admin.manage_event.edit')->with(
        [
            'event' => $event
        ]);
    }

    public function update(Request $request)
    {
        try
        {
            DB::beginTransaction();
            $event = $request->all(); // validated
            $this->eventRepository->update($event);
            DB::commit();

            return redirect()->route('admin.events.index');
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
            $this->eventRepository->delete($request->id);
            DB::commit();

            return redirect()->route('admin.events.index');
        }
        catch(Exception $e)
        {
            $this->logError($e);
            DB::rollBack();
            return redirect()->back();
        }
    }
}
