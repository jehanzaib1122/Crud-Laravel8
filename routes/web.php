<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
Route::get('/employees/create', [EmployeeController::class, 'createData'])->name('employee.create');
Route::get('/employees/index', [EmployeeController::class, 'listData'])->name('employee.index');

Route::get('/employees/edit/{id}', [EmployeeController::class, 'editData'])->name('employees.edit');
Route::post('/employees/update/{id}', [EmployeeController::class, 'updateData'])->name('employee.update');
Route::get('/employees/delete/{id}', [EmployeeController::class, 'deleteData'])->name('employees.delete');

Route::post('employees/add', [EmployeeController::class, 'addRecord'])->name('employee.add');
