<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $programs = \App\Models\Program::query()->get()->groupBy('day');
    return view('index', compact('programs'));
})->name('home');
