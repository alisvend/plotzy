<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HashtagController;
use App\Http\Controllers\ConspiracyController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserHashtagController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hashtags', [HashtagController::class,'displayHashtags']);
Route::post('/addConspiracyAnonymously', [ConspiracyController::class,'addConspiracyAnonymously']);
Route::middleware('auth:sanctum')->post('/addConspiracy', [ConspiracyController::class,'addConspiracy']);
Route::middleware('auth:sanctum')->get('/conspiracies', [ConspiracyController::class,'displayConspiracies']);
Route::middleware('auth:sanctum')->post('/users', [ConspiracyController::class,'getUsers']);
Route::middleware('auth:sanctum')->post('/addFollower', [FollowerController::class,'addFollower']);
Route::middleware('auth:sanctum')->post('/addHashtag', [UserHashtagController::class,'addHashtag']);
Route::middleware('auth:sanctum')->post('/addPhone', [ConspiracyController::class,'addPhone']);
Route::middleware('auth:sanctum')->post('/addProfilePicture', [ConspiracyController::class,'addProfilePicture']);
Route::middleware('auth:sanctum')->get('/links', [LinkController::class,'displayLinks']);
Route::middleware('auth:sanctum')->post('/addLink', [LinkController::class,'addLink']); 
Route::middleware('auth:sanctum')->get('/conspiraciesForUser', [ConspiracyController::class,'displayConspiraciesForUser']);
Route::middleware('auth:sanctum')->get('/userInfo', [ConspiracyController::class,'getUserInfo']);
Route::middleware('auth:sanctum')->post('/editName', [ConspiracyController::class,'editName']); 
Route::middleware('auth:sanctum')->get('/checkedHashtags', [UserHashtagController::class,'getCheckedHashtags']);
Route::middleware('auth:sanctum')->post('/editHashtag', [UserHashtagController::class,'updateHashtag']); 
Route::middleware('auth:sanctum')->get('/getFollowers', [FollowerController::class,'getFollowers']);
Route::middleware('auth:sanctum')->post('/getSuggested', [FollowerController::class,'getSuggested']);
Route::middleware('auth:sanctum')->get('/numberOfConspiracies', [ConspiracyController::class,'numberOfConspiracies']);