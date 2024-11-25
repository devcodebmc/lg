<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SecondaryImageController;

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

Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('/proyectos/{slug}', [FrontController::class, 'show'])->name('showProject');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::post('/budget/send', [BudgetController::class, 'send'])->name('budget.send');

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


// Rutas protegidas
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('backend.layouts.mainAdmin');
        })->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
        Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
        Route::get('/projects/edit/{project}', [ProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/projects/update/{project}', [ProjectController::class, 'update'])->name('projects.update');
        // Más rutas protegidas
        Route::get('/secondary-images/{project}', [SecondaryImageController::class, 'index'])->name('secondary-images.index');
        Route::post('/secondary-images/store/{project}', [SecondaryImageController::class,'store'])->name('secondary-images.store');
        Route::delete('/secondary-images/delete/{project}/{image}', [SecondaryImageController::class, 'destroy'])->name('secondary-images.destroy');
    });
});

