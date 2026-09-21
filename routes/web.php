<?php

use App\Http\Controllers\Kampus;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kampus1', [Kampus::class, 'index']
);
