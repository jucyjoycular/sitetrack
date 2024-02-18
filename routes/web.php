<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ResultCarController;
use App\Http\Controllers\ResultCashController;
use App\Http\Controllers\ResultPhoneController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Ok2PayController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
   return redirect('/admin/login');
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/auth_admin.php';
