<?php

use App\Http\Controllers\FormValidtionController;
use Illuminate\Support\Facades\Route;




Route::get('/form', [FormValidtionController::class, 'createUserForm']);
Route::post('/form', [FormValidtionController::class, 'UserForm'])->name('validate.form');

