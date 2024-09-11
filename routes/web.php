<?php

use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectController;
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

Route::view("", 'index')->name('index');

Route::prefix('project')->name('project.')->group(function () {

    Route::get('', [ProjectController::class, 'index'])->name('index');

    Route::get('create', [ProjectController::class, 'create'])
    ->name('create');

    Route::post('store', [ProjectController::class, 'store'])
    ->name('store');

    Route::get('show/{id}', [ProjectController::class, 'show'])
    ->name('show');

    Route::get('edit/{id}', [ProjectController::class, 'edit'])
    ->name('edit');

    Route::post('update/{id}', [ProjectController::class, 'update'])
    ->name('update');

    Route::get('delete/{id}', [ProjectController::class, 'delete'])
    ->name('delete');

});

Route::prefix('developer')->name('developer.')->group(function () {
    Route::get('', [DeveloperController::class, 'index'])->name('index');

    Route::get('create', [DeveloperController::class, 'create'])
    ->name('create');

    Route::post('store', [DeveloperController::class, 'store'])
    ->name('store');

    Route::get('show/{id}', [DeveloperController::class, 'show'])
    ->name('show');

    Route::get('edit/{id}', [DeveloperController::class, 'edit'])
    ->name('edit');

    Route::post('update/{id}', [DeveloperController::class, 'update'])
    ->name('update');

    Route::get('delete/{id}', [DeveloperController::class, 'delete'])
    ->name('delete');

    Route::get('developer/{developer}/transfer',
    [DeveloperController::class, 'transferToProject'])->name('transfer');
});


Route::prefix('statistiсs')->name('statistiсs.')->group(function ()
{
    Route::get('', [MainController::class, 'index'])->name('index');




});


Route::get('/statistics/project_count', [MainController::class, 'projectCount'])->name('project_count');

Route::get('/statistics/developer_count', [MainController::class, 'developerCount'])->name('developer_count');

Route::get('/statistics/average_age', [MainController::class, 'averageAge'])->name('averageAge');
