<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.index');

//     // lay du lieu tu DB, qua model
//     // return \App\Models\Product::find(1)->productImages;
//     // khoi dong may chu chạy du an



// });

Route::get('/', [HomeController::class, 'index']);




