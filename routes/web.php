<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\VolunnteerController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UIController;
use App\Models\Donation;
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

Route::get('/login-page', function(){
    return view('auth.login');
})->name('pageLogin');

Route::controller(AdminLoginController::class)
    ->group(function(){
        Route::get('/login','getLogin')->name('getLogin');
        Route::post('/login','postLogin')->name('postLogin');
        Route::get('/logout','getLogout')->name('logout');
});

Route::middleware(['checkAdminLogin'])
    ->prefix('/admin')
    ->as('admin.')
    ->group(function () {
    Route::get('/', function () {
        return view('master.main');
    })->name('dashboard');

    Route::controller(HomeContentController::class)
    ->prefix('/home_content')
    ->as('home_content.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/{id}/update', 'update')->name('update');
        Route::delete('{id}', 'destroy')->name('delete');
        Route::post('{id}/remove-img', 'removeImage')->name('removeImage');
    });

    Route::controller(AboutUsController::class)
    ->prefix('/about-us')
    ->as('about-us.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/{id}/update','update')->name('update');
        Route::delete('{id}','destroy')->name('delete');
    });

    Route::controller(MemberController::class)
    ->prefix('/members')
    ->as('members.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/{id}/update','update')->name('update');
        Route::delete('{id}','destroy')->name('delete');
        Route::post('{id}/remove-avatar', 'removeAvatar')->name('removeAvatar');
    });

    // Route::resource('events',EventController::class);
    // Route::get('events/data', [EventController::class, 'getData'])->name('events.getData');
    Route::controller(EventController::class)
    ->prefix('/events')
    ->as('events.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/{id}/update','update')->name('update');
        Route::delete('{id}','destroy')->name('delete');
        Route::delete('{id}','destroy')->name('delete');
    });
    
    Route::controller(ProjectController::class)
    ->prefix('/projects')
    ->as('projects.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/{id}/update','update')->name('update');
        Route::delete('{id}','destroy')->name('delete');
    });

    Route::controller(NewsController::class)
    ->prefix('/news')
    ->as('news.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/{id}/update','update')->name('update');
        Route::delete('{id}','destroy')->name('delete');
        Route::post('{id}/remove-img', 'removeImage')->name('removeImage');
    });

    Route::controller(DonationController::class)
    ->prefix('/donations')
    ->as('donations.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::delete('{id}','destroy')->name('delete');
    });

    Route::controller(VolunnteerController::class)
    ->prefix('/volunteers')
    ->as('volunteers.')
    ->group(function(){
        Route::get('','index')->name('index');
        Route::get('/data','getData')->name('getData');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/{id}/update','update')->name('update');
        Route::delete('{id}','destroy')->name('delete');
    });
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