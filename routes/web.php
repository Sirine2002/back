<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () { 
    return view('welcome'); 
   })->where('any', '.*');

   



// Route::get('/help', function () {
//     return view('helpuser');
// });
