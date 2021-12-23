<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Front\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

#laravel8からnamespaceの書き方が変わったらしい
//Route::get('/', [PostController::class, "index"])->name('home');
//Route::resource('posts', "PostController"); 　エラー

#一旦7までの書き方でやります。
Route::get('/', "PostController@index")->name('home');
Route::resource('posts', PostController::class)->only(['index','show']);

?>