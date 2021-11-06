<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\CompanyController;
use App\Http\Controllers\Api\Auth\AuthController;


Route::post('auth', [AuthController::class, 'authenticate']);
Route::post('auth-refresh', [AuthController::class, 'refreshToken']);
Route::get('me', [AuthController::class, 'getAuthenticatedUser']);

Route::group([
    'prefix' => 'v1', 
    'namespace' => 'Api\v1',
    'middleware' => 'auth:api'
    /*'middleware' => 'jwt.auth'*/
], function (){   

    Route::get('companies', [CompanyController::class, 'index']);
    Route::post('companies', [CompanyController::class, 'store']);

});
