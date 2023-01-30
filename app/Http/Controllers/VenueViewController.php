<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VenueViewController extends Controller
{
    public function venue()
    {
        $venues = DB::table('venue')->select('name_of_theatre', 'location','city')->get();
        return (
        view('venue_view', ['venues' => $venues]));
    }
}
