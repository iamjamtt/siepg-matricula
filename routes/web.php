<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Inicio\Index as InicioIndex;
use App\Livewire\Matricula\Index as MatriculaIndex;

Route::get('/login', AuthLogin::class)
    ->middleware('guest')
    ->name('login');

Route::get('/', InicioIndex::class)
    ->middleware('auth')
    ->name('inicio.index');

Route::get('/matricula', MatriculaIndex::class)
    ->middleware('auth')
    ->name('matricula.index');

//
