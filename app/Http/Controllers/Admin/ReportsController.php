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
    public function index()
    {
        $itemsPerPage = 15;
        $reports = Report::paginate($itemsPerPage);

        return view('backEnd.admin.reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'date_creation' => 'required', 'images' => 'required', 'event_id' => 'required', ]);

        Report::create($request->all());

        Session::flash('message', 'Report added!');
        Session::flash('status', 'success');

        return redirect('admin/reports');
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
        $report = Report::findOrFail($id);

        return view('backEnd.admin.reports.show', compact('report'));
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
        $report = Report::findOrFail($id);

        return view('backEnd.admin.reports.edit', compact('report'));
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
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'date_creation' => 'required', 'images' => 'required', 'event_id' => 'required', ]);

        $report = Report::findOrFail($id);
        $report->update($request->all());

        Session::flash('message', 'Report updated!');
        Session::flash('status', 'success');

        return redirect('admin/reports');
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
        $report = Report::findOrFail($id);

        $report->delete();

        Session::flash('message', 'Report deleted!');
        Session::flash('status', 'success');

        return redirect('admin/reports');
    }

}
