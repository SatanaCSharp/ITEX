<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Report;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class ReportsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($idEvent)
    {

        $itemsPerPage = 15;
        $reports = Report::where('event_id', $idEvent)->paginate($itemsPerPage);

        return view('backEnd.admin.reports.index', ['reports' => $reports, 'idEvent' => $idEvent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($idEvent)
    {
        $eventId = $idEvent;
        return view('backEnd.admin.reports.create', ['idEvent' => $eventId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, $idEvent)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'date_creation' => 'required',
            'images' => 'required',
            'event_id' => 'required',
        ]);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $report = new Report();
                $report->title = $request['title'];
                $report->description = $request['description'];
                $report->date_creation = $request['date_creation'];
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/images/reports/idEvent-' . $idEvent, $name);
                $report->images = $name;
                $report->event_id = $request['event_id'];
                $report->save();
            }
        }

        Session::flash('message', 'Report added!');
        Session::flash('status', 'success');

        return redirect('admin/events/' . $idEvent . '/reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($idEvent, $id)
    {

        $report = Report::findOrFail($id);
        return view('backEnd.admin.reports.show', compact('report'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventId = $id;
        $report = Report::findOrFail($id);

        return view('backEnd.admin.reports.edit', ['report' => $report, 'idEvent' => $eventId]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($idEvent, $id, Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'date_creation' => 'required',
            'images' => 'required',
            'event_id' => 'required',]);

        $report = Report::findOrFail($id);
        $report->update($request->all());

        Session::flash('message', 'Report updated!');
        Session::flash('status', 'success');

        return redirect('admin/events/' . $idEvent . '/reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($idEvent, $id)
    {
        $report = Report::findOrFail($id);

        $report->delete();

        Session::flash('message', 'Report deleted!');
        Session::flash('status', 'success');

        return redirect('admin/events/' . $idEvent . '/reports');
    }

}
