<?php

use Illuminate\Support\Facades\Route;

Route::get('/mi-pagina', function () {
    return view('index');
});
