<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Inicio\Index as InicioIndex;
use App\Livewire\Matricula\Index as MatriculaIndex;
use App\Livewire\Matricula\Crear as MatriculaCrear;

Route::get('/login', AuthLogin::class)
    ->middleware('guest')
    ->name('login');

Route::get('/', InicioIndex::class)
    ->middleware('auth')
    ->name('inicio.index');

Route::get('/matriculas', MatriculaIndex::class)
    ->middleware('auth')
    ->name('matricula.index');

Route::get('/matricula/crear', MatriculaCrear::class)
    ->middleware('auth')
    ->name('matricula.crear');

//
