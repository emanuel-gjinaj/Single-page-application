<?php

use App\Livewire\AddCar;
use Illuminate\Support\Facades\Route;
use App\Livewire\CarList;
use App\Livewire\EditCar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars',CarList::class);
Route::get('/add/new', AddCar::class);
Route::get('/edit/car/{id}', EditCar::class);