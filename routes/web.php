<?php

use App\Http\Controllers\JobpostingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data['title'] = "Welcome JPSD";
    return view('index',['data' => $data]);
});

Route::resource('/job_postings',JobpostingController::class);
