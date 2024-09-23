<?php

use App\Http\Controllers\UIController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('header');
});


Route::controller(UIController::class)
    ->prefix('/home')
    ->as('home.')
    ->group(function(){
    Route::get('whatwedo','whatwedo')->name('whatwedo');
    Route::get('project','project')->name('project');
    Route::get('about_us','aboutUs')->name('about_us');
    Route::get('contact','contact')->name('contact');
});