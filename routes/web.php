<?php

use App\Actions\RegisterGbvCase;
use App\Actions\Service;
use App\Actions\VictimShowData;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', Service::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/show/bgv/{victim}/victim', VictimShowData::class)->middleware(['auth', 'verified'])->name('dashboard.bgv.victim');
Route::post('/dashboard/register/new/bgv',RegisterGbvCase::class)->middleware(['auth', 'verified'])->name('dashboard.bgv.register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
