<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MatchsController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// list of sports 
Route::get('/listAllSports', [SportController::class, 'index']);
// search for events
Route::get('/search/{name}', [EventController::class, 'show']);
// get more details about event
Route::get('/getEventDetail/{id}', [EventController::class, 'getEventDetail']);
// buy a ticket
Route::post('/booking', [TicketController::class, 'store']);
// Create a new event
Route::post('/events', [EventController::class, 'store']);
// delete a event
Route::delete('/events/{id}', [EventController::class, 'destroy']);
// edit a event
Route::put('/events/{id}', [EventController::class, 'update']);
// create a new match
Route::post('/match', [MatchsController::class, 'store']);