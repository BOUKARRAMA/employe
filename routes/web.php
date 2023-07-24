<?php

use App\Http\Controllers\EmployesController;
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
    return view('welcome');
});


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('employes',EmployesController::class);

    Route::get('/employes/{id}/vacation','EmployeController@vacationRequest')->name('vacation.request');
    Route::get('/employes/{id}/certificate','EmployeController@certificateRequest')->name('certificate.request');
     
});
