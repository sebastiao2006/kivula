<?php

use Illuminate\Support\Facades\Route;


/* SITE */
Route::get('/', function () {
return view('site.home.index'); // Certifique-se de que a view 'index' existe em resources/views/
});
