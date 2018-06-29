<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {   $company=["Playtika","Epam","Ciklum","RIA","Sharashka"];
        return view('publicPart.homePage.index')->with(['company' => $company]);
    }
}
