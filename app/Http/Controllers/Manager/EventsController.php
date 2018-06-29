<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{
    public function index($idCompany)
    {
        $id = $idCompany;
        $itemsPerPage = 5;
        $company = Company::where('id',$idCompany)->first();
        $events = Event::where('company_id',$idCompany)->paginate($itemsPerPage);

        return view('publicPart.manager.events.index',['events'=>$events,'companyId'=>$id,'company'=>$company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($idCompany)
    {
        $id = $idCompany;
        return view('publicPart.manager.events.create',['companyId'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, $idCompany)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'state' => 'required',
            'duration' => 'required',
        ]);

        $event = new Event();
        $event->title = $request['title'];
        $event->description = $request['description'];
        $event->date = $request['date'];
        $event->state = $request['state'];
        $event->duration = $request['duration'];
        $event->company_id = $idCompany;
        $event->save();

        Session::flash('message', 'Company added!');
        Session::flash('status', 'success');

        return redirect('manager/companies/' . $idCompany . '/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
//        $company = Company::findOrFail($id);
//
//        return view('backEnd.admin.companies.show', compact('company'));
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
//        $company = Company::findOrFail($id);
//
//        return view('backEnd.admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
//        $this->validate($request, ['title' => 'required', 'description' => 'required', 'contacts' => 'required', 'location' => 'required', ]);
//
//        $company = Company::findOrFail($id);
//        $company->update($request->all());
//
//        Session::flash('message', 'Company updated!');
//        Session::flash('status', 'success');
//
//        return redirect('admin/companies');


    }

}
