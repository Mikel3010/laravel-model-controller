<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;



route::get('/', [PageController::class, 'index'])->name('home');
