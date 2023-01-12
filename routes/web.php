<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataKTA2018Controller;
use App\Http\Controllers\DataKTA2023Controller;

Route::get('/', [DataKTA2018Controller::class, 'index'])->name('kta2018');
Route::get('/kta-2023', [DataKTA2023Controller::class, 'index'])->name('kta2023');
