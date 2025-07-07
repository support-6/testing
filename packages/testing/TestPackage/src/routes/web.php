<?php

use Illuminate\Support\Facades\Route;
use Testing\TestPackage\Http\Controllers\TestController;

Route::get('/test-package', [TestController::class, 'index']);
