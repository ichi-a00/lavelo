<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::get('/', 'DashboardController')->name('dashboard');
Route::resource('posts', PostController::class)->except('show');

Route::group(['middleware' => 'can:admin'], function () {
    Route::resource('users', UserController::class)->except('show');
});

?>