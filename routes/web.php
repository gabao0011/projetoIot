<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/ambiente', AmbienteIndex::class)->name('ambiente.index');
Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/sensor', SensorIndex::class)->name('sensor.index');
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
