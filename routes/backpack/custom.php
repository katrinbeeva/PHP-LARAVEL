<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
<<<<<<< HEAD
    Route::crud('performance', 'PerformanceCrudController');
    Route::crud('venue', 'VenueCrudController');
    Route::crud('ticket', 'TicketCrudController');
=======
>>>>>>> 9facdcfd57bf771783df419d6af4ba7ac0d5b46f
}); // this should be the absolute last line of this file