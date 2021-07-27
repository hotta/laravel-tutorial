<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\Auth\LoginController;


Route::name('doctor.')->namespace('Doctor')->prefix('doctor')->group(function(){

    Route::namespace('Auth')->middleware('guest:doctor')->group(function(){
        //login route
        Route::get('/login','LoginController@login')->name('login');
        Route::post('/login','LoginController@processLogin');
    });

    Route::namespace('Auth')->middleware('auth:doctor')->group(function(){

        Route::post('/logout',function(){
            Auth::guard('doctor')->logout();
            return redirect()->action([
                LoginController::class,
                'login'
            ]);
        })->name('logout');

    });

});