<?php

namespace App\Http\Controllers;

use App\Company;
use App\Event;
use App\Excursion;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $excursions = Excursion::all();
        return view('publicPart.homePage.index',['excursions'=>$excursions]);
    }

    public function show_contacts()
    {

        return view('publicPart.contacts.index');
    }
}
