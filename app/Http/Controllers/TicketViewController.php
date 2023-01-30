<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketViewController extends Controller
{
    public function tickets()
    {
        $tickets = DB::table('ticket')->select('price','type_of_ticket')->get();
        return (
        view('tickets_view', ['ticket' => $tickets]));
    }
}
