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
    return view('home.index');
});

Route::get('/about-us', function () {
    return view('about-us.index');
})->name('about-us');

Route::get('/topnews', function () {
    return view('topnews.index');
})->name('topnews');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('/donate', function () {
    return view('donate.index');
})->name('donate');

Route::get('/newsfeed1',function(){
    return view('newsfeed.news1');
})->name('news1');

Route::get('/newsfeed2',function(){
    return view('newsfeed.news2');
})->name('news2');

Route::get('/events', function(){
    return view('events-post.index');
})->name('events');

Route::get('/whatwedo', function(){
    return view('whatwedo.index');
})->name('whatwedo');

Route::controller(UIController::class)
    ->prefix('/home')
    ->as('home.')
    ->group(function(){
    Route::get('whatwedo','whatwedo')->name('whatwedo');
    Route::get('project','project')->name('project');
    Route::get('about_us','aboutUs')->name('about_us');
    Route::get('contact','contact')->name('contact');
});