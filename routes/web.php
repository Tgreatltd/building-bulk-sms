<?php

use App\Http\Controllers\ProfileController;
use App\Models\Community;
use App\Models\Phonebook;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sendsms', function () {
    return view('sendmessage');
})->middleware(['auth', 'verified'])->name('sendsms');

Route::get('/phonebook', function () {
    return view('phonebook');
})->middleware(['auth', 'verified'])->name('phonebook');

Route::get('editContact/{id}', function ($id) {
    return view('editphonebooks',compact('id'));
})->middleware(['auth', 'verified'])->name('editContact');


Route::get('/sendmail', function () {
    return view('sendmailmessage');
})->middleware(['auth', 'verified'])->name('sendmail');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
