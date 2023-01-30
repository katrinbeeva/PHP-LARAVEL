<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;


class PerformanceViewController extends Controller
{
    public function venues()
    {
        $venues = DB::table('venue')->select('name_of_performance')->get();
        return (
        view('venues_view', ['venue' => $venues]));
    }


    public function performance()
    {
        $performances = Performance::with('venue')->get();

        return (view('performance_view', [ 'performances' => $performances ]));
    }

}
