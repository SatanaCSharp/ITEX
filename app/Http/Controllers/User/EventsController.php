<?php

namespace App\Http\Controllers\User;

use App\Company;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    public function index()
    {
        $company=["Playtika","Epam","Ciklum","RIA","Sharashka"];
        return view('publicPart.homePage.index')->with(['company' => $company]);
    }

    public function show(Company $company, Event $event)
    {
        $user = Auth::user();

        if ($user != null)
        {

//            $idCompany = Company::all();
//            dd($idCompany);
//            $event = Event::all() ;

            return view('publicPart.user.events.event', ['company => $company', 'event' => $event]);

        }
        else return redirect()->route('login');
    }
}

