<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Calendar;

class CalendarController extends Controller
{
    public function show()
    {
        //Get media

        $calendar = Calendar::where('user_id', Auth::id())->get();

        //Return single media as resource
        return response()->json($calendar);
    }

    public function index($user_id)
    {
        $calendar = Calendar::with('medias')->where('user_id', '=', $user_id)->get();

        return response()->json($calendar);
    }

}
