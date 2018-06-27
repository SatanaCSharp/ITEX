<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CompaniesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $itemsPerPage = 15;
        $companies = Company::paginate($itemsPerPage);

        return view('backEnd.admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'contacts' => 'required', 'location' => 'required', ]);

        if($request->hasFile('logo')) {
            $file = $request->file('logo');
            $companyName = $request->title;
            $filename = $file->getClientOriginalName();
            $file->move(public_path() . '/images/company/logos/' . $companyName . '/', $filename);
        }
        Company::create($request->all());

        Session::flash('message', 'Company added!');
        Session::flash('status', 'success');

        return redirect('admin/companies');
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
        $company = Company::findOrFail($id);

        return view('backEnd.admin.companies.show', compact('company'));
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
        $company = Company::findOrFail($id);

        return view('backEnd.admin.companies.edit', compact('company'));
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
        $this->validate($request, ['title' => 'required', 'description' => 'required', 'contacts' => 'required', 'location' => 'required', ]);

        $company = Company::findOrFail($id);
        $company->update($request->all());

        Session::flash('message', 'Company updated!');
        Session::flash('status', 'success');

        return redirect('admin/companies');
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
        $company = Company::findOrFail($id);

        $company->delete();

        Session::flash('message', 'Company deleted!');
        Session::flash('status', 'success');

        return redirect('admin/companies');
    }

}
