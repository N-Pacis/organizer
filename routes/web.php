<?php

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get("/dashboard",function(){
        return view('dashboard.admin-dashboard-page');      
    });

    Route::get("/teachers",function(){
        return view('dashboard.teachers-page');      
    });

    Route::get("/workers",function(){
        return view('dashboard.workers-page');      
    });

    Route::get("/income",function(){
        return view('dashboard.income-page');      
    });

    Route::get("/liabilities",function(){
        return view('dashboard.liabilities-page');      
    });

    Route::resource('students', 'App\Http\Controllers\StudentController');
});
