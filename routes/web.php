<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use app\Models\Event;

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
    return view('layouts/base');
});

Route::get('/pages/testroute', [PagesController::class, 'testroute'])->name('testroute1');

Route::get('pages/testroute1', [PagesController::class, 'testroute1'])->name('testroute2');

Route::get('pages/events', [PagesController::class, 'events'])->name('events');

// Route::get('/tickets', [TicketsController::class, 'listTickets'])->name('listTickets')->middleware('auth');

// Route::post('/admin/create-ticket', [PagesController::class, 'createticket'])->name('createticket');

// Route::get('/admin/add-event', [EventsController::class, 'addEvent'])->name('add-event')->middleware('auth');

// Route::post('/admin/add-event', [EventsController::class, 'procesAddEvent'])->name('procesAddEvent')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
