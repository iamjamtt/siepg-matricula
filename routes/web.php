<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Inicio\Index as InicioIndex;

Route::get('/login', AuthLogin::class)
    ->middleware('guest')
    ->name('login');

Route::get('/', InicioIndex::class)
    ->middleware('auth')
    ->name('inicio.index');

//
