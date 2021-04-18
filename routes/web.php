<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

Route::get('/login', Login::class);
