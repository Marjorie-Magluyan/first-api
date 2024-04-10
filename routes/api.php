<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

// Route::match(['put', 'patch', 'post', 'get'],'/my-api', function () {
//     return '1ST API raw puh';
// });

// Route::get('/my-api', function (Request $request) {
//     return $request->email;
// });

// Route::get('/my-api', function (Request $request) {
//     return $request->email;
// }); //RESULT: http://my-api.test/api/my-api?email=marjorie@gmail.com

// Route::post('/api-post', function (Request $request) {
//     return $request->name . ' <br>' . $request->email;
// }); //RESULT: http://my-api.test/api/api-post?email="marjorie@gmail.com"&name="omsim"


Route::middleware('extract.token')->group(function(){
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::patch('users/{user}', [UserController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);
});

Route::apiResource('products', ProductController::class);
// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{product}', [ProductController::class, 'show']);
// Route::put('/products/{product}', [ProductController::class, 'update']);
// Route::delete('/products/{product}', [ProductController::class, 'destroy']);
