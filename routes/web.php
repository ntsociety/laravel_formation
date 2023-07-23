<?php

use App\Http\Controllers\Admin\EmployeController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/', [Controller::class, 'index']);

// admin / employes
Route::get('liste-des-employés', [EmployeController::class, 'employes'])->name('list-employes');
Route::get('ajouté-un-employé', [EmployeController::class, 'ajout_employe'])->name('ajout-employe');
Route::post('employe-store', [EmployeController::class, 'store'])->name('employe-store');
Route::get('modifier-employé/{id}', [EmployeController::class, 'edit'])->name('edit-employe');
Route::get('info-employé/{id}', [EmployeController::class, 'show'])->name('show-employe');
Route::put('update-employe/{id}', [EmployeController::class, 'update'])->name('update-employe');
Route::delete('delete-employe/{id}', [EmployeController::class, 'destroy'])->name('destroy-employe');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
