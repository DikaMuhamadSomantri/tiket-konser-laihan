<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

// The root page | base url
Route::get('/', function () {
    return view('welcome');
});


// Ticket List page 
Route::resource('/tickets', TicketController::class);

// Ticket by id
// Route::resource('/tickets/{id}', TicketController::class);
// Route::get('tickets/{id}', 'TicketController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');