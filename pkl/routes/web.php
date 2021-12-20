<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminFAQController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TestController;
use App\Http\Livewire\Dropdowns;
use App\Models\faq;
use App\Models\system;
use App\Http\Middleware;
use PHPUnit\Framework\Test;

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

Route::get('/',[DashboardController::class,'index'])->name('HOME');

// ADMIN AND USER DEFAULT
Route::get('/Admin', function(){
    return view('admin.admin_dashboard',[
        'read' => faq::all()
    ]);
})->middleware('auth');

Route::get('/User',function(){
    return view('user.read',[
        'read' => faq::all()
    ]);
})->middleware('auth');

// LOGIN
Route::get('login',[LoginController::class,'index'])->middleware('guest');
Route::post('login',[LoginController::class,'authenticate']);

Route::get('logout',[LoginController::class,'logout'])->name('logout');

// FAQ
Route::resource('/Admin/faq', AdminFAQController::class)->middleware('auth');

// System
Route::resource('/Admin/System', SystemController::class)->middleware('auth');

// TEST
Route::get('/test',[TestController::class,'index']);
ROute::get('/test/getAjax',[TestController::class,'get_ajax']);

// Search
Route::post('/test/search',[SearchController::class,'testSearch'])->name('test.search');
Route::post('/Search',[DashboardController::class,'showSearch'])->name('guest.search');
Route::post('/Admin/System/Search',[SystemController::class,'showSearch'])->name('system.search');
Route::post('/Admin/faq/Search',[AdminFAQController::class,'showSearch'])->name('faq.search');

//TF_IDF
Route::get('/tf',[TestController::class,'tf']);

Route::post('/tf/idf',[TestController::class,'idf']);
Route::get('/tf/idf',[TestController::class,'idf']);

Route::post('/tf/indexing',[TestController::class,'indexing']);
Route::get('/tf/indexing',[TestController::class,'indexing']);

Route::get('/tf/term-show',[TestController::class,'show']);
Route::post('/tf/term-show',[TestController::class,'show']);

ROute::get('/tf/getAjax',[TestController::class,'tf_ajax']);

Route::get('/split',function(){
    return view('split');
});

Route::get('/dropdowns', function(){
    return view('livewire.dropdowns');
} );

