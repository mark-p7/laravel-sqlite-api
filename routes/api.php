<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\api\StudentsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('students', [StudentsController::class, 'index']);
Route::get('students/{student}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);
Route::put('students/{student}', [StudentsController::class, 'update']);
Route::delete('students/{student}', [StudentsController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
