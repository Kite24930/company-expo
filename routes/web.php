<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CompanyController;

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
    return view('index');
});

Route::get('/routing', [MainController::class, 'routing'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/student/edit', [StudentController::class, 'edit'])->name('studentEdit');
    Route::get('/student/list', [StudentController::class, 'list'])->name('companyList');
    Route::get('/student/detail/{id}', [StudentController::class, 'detail'])->name('companyDetail');
    Route::get('/student/contact/{id}', [StudentController::class, 'contact'])->name('toCompanyContact');

    Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name('companyEdit');
    Route::get('/company/contact/{id}', [CompanyController::class, 'contact'])->name('companyContact');
});

require __DIR__.'/auth.php';
