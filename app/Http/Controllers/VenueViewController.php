<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueViewController extends Controller
{
    public function venues()
    {
        $venues = DB::table('venue')->select('name_of_theatre', 'location','city')->get();
        return (
        view('venues_view', ['venues' => $venues]));
    }
}
