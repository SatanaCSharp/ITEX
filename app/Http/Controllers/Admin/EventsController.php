<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $itemsPerPage = 15;
        $events = Event::paginate($itemsPerPage);

        return view('backEnd.admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'date' => 'required', 'state' => 'required', 'duration' => 'required', 'company_id' => 'required', ]);

        Event::create($request->all());

        Session::flash('message', 'Event added!');
        Session::flash('status', 'success');

        return redirect('admin/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('backEnd.admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('backEnd.admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'date' => 'required', 'state' => 'required', 'duration' => 'required', 'company_id' => 'required', ]);

        $event = Event::findOrFail($id);
        $event->update($request->all());

        Session::flash('message', 'Event updated!');
        Session::flash('status', 'success');

        return redirect('admin/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        Session::flash('message', 'Event deleted!');
        Session::flash('status', 'success');

        return redirect('admin/events');
    }

}
