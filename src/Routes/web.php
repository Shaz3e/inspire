<?php

// use Shaz3e\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Shaz3e\Inspire\Http\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);