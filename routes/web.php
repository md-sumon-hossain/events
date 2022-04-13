<?php

use App\Http\Controllers\event\NewsletterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


#newsletter
Route::get('/',[NewsletterController::class,'index'])->name('website.index');
Route::post('/',[NewsletterController::class,'subscribe'])->name('website.subscribe');
