<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo date("Y/m/d H:i:s");
});

?>