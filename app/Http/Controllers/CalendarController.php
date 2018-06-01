<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class CalendarController extends Controller
{
    public function show($id)
    {
        //Get media
        $calendar = Calendar::where('user_id', $id)->get();

        //Return single media as resource
        return response()->json($calendar);
    }
}
