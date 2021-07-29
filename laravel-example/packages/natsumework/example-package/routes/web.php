<?php

use Illuminate\Support\Facades\Route;

Route::get('/example', [\Natsumework\ExamplePackage\Http\Controllers\ExampleController::class, 'index'])->name('example.index');
