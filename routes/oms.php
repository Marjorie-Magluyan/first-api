<?php

use App\Http\Controllers\UserController;
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

// Route::get('/my-api', function () {
//     return 'Hello World!';
// });

Route::get('/api-get', function () {
    return "Route; GET method";
});

Route::post('/api-post', function () {
    return "Route; POST method";
});

Route::put('/api-put', function () {
    return "Route; PUT method";
});

Route::put('/api-put', function () {
    return "Route; PUT method";
});

Route::patch('/api-patch', function () {
    return "Route; PATCH method";
});

Route::delete('/api-delete', function () {
    return "Route; DELETE method";
});

Route::options('/api-options', function () {
    return "Route; OPTIONS method";
});
