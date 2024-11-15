<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Inicio\Index as InicioIndex;

Route::get('/login', function () {
    return view('components.layouts.auth');
})->name('login');

Route::get('/', InicioIndex::class)
    ->name('inicio.index');

//
