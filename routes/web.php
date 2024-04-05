<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;




Route::get('/', [ContactController::class, 'index']);

// View all contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// View the form to create a new contact
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Store a new contact
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// View a specific contact
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');

// View the form to edit a contact
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Update a contact
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');

// Delete a contact
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
