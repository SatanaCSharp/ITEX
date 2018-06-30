<?php

namespace App\Http\Controllers\User;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function index(Company $company)
    {
        return view('publicPart.user.companies.index',['company'=> $company]);
    }
}
