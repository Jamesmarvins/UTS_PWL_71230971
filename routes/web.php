<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NimFormController;
use App\Http\Controllers\DataController;
 
Route::view('/', 'nim-form')->name('nim.form');
Route::post('/nim', [NimFormController::class, 'store'])->name('nim.store');
 
Route::view('/courses', 'pages.courses')->name('courses');
Route::view('/students', 'pages.students')->name('students');
Route::view('/grades', 'pages.grades')->name('grades');
Route::view('/assignments', 'pages.assignments')->name('assignments');
 
Route::get('/data/customers', [DataController::class, 'customers'])->name('data.customers');
Route::get('/data/companies', [DataController::class, 'companies'])->name('data.companies');
Route::get('/data/items', [DataController::class, 'items'])->name('data.items');
Route::get('/data/sales', [DataController::class, 'sales'])->name('data.sales');