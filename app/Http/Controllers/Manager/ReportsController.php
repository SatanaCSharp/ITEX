<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Report;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idEvent)
    {

        $reports = Report::where('event_id', $idEvent)->get();
        $reportFirst = $reports->first();
        return view('publicPart.manager.reports.index', [
            'report'=>$reportFirst,
            'reports' => $reports,
            'idEvent' => $idEvent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idEvent)
    {
        $id = $idEvent;
        return view('publicPart.manager.reports.create', ['idEvent' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idEvent)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'date_creation' => 'required',
            'images' => 'required',
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
                $report->event_id = $idEvent;
                $report->save();
            }
        }

        Session::flash('message', 'Report added!');
        Session::flash('status', 'success');

        return redirect('manager/events/' . $idEvent . '/reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
