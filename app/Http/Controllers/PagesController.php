<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PagesController extends Controller
{
    public function events()
    {
        $events = Event::where('event_start', '<', now())->get();
        return view('pages/events')->with('events', $events);
    }

    public function testroute()
    {
        return view('pages/testroute');
    }

    public function testroute1()
    {
        return view('pages/testroute1');
    }
}
