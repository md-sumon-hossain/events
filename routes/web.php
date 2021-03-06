<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\event\QueueJobController;
use App\Http\Controllers\event\NewsletterController;

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
    return view('welcome');
});


#newsletter
Route::get('/index',[NewsletterController::class,'index'])->name('website.index');
Route::post('/index',[NewsletterController::class,'subscribe'])->name('website.subscribe');



#queues and jobs 
Route::get('jobs',[QueueJobController::class,'jobs'])->name('queue.job');
