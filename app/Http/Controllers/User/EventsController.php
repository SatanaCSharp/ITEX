<?php

namespace App\Http\Controllers\User;

use App\Company;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index()
    {
        $company=["Playtika","Epam","Ciklum","RIA","Sharashka"];
        return view('publicPart.homePage.index')->with(['company' => $company]);
    }
}
