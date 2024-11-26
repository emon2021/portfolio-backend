<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', App\Livewire\Frontend\HomeComponent::class)->name('home');
