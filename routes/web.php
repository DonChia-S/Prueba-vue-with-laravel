<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('contact/edit/{id}', [ContactsController::class, 'edit']);

Route::get('contacts/images/{id}', [ContactsController::class, 'images']);

Route::get('/api/contacts', [ContactsController::class, 'index']);

Route::post('/api/contact', [ContactsController::class, 'save']);

Route::get('/api/contact/{id}', [ContactsController::class, 'findId']);

Route::put('/api/contact/{id}', [ContactsController::class, 'update']);

Route::delete('/api/contact/{id}', [ContactsController::class, 'destroy']);