<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Login-Register
Route::post('/register',[UsersController::class, 'createUser']);
Route::post('/login',[LoginController::class, 'loginAuthentication']);
Route::get('/logout',[LoginController::class, 'logout']);

// User
Route::get('/user/{email}',[UsersController::class, 'userDetails']);

// Category
Route::get('/categories',[CategoriesController::class,'getCategories']);
Route::post('/addCategory',[CategoriesController::class,'createCategory']);
Route::post('/updateCategory/{id}',[CategoriesController::class,'updateCategory']);
Route::get('/deleteCategory/{id}',[CategoriesController::class,'deleteCategory']);

// Events
Route::get('/events',[EventsController::class, 'getEvents']);
Route::get('/eventDetails/{id}',[EventsController::class, 'singleEvent']);
Route::get('/featuredEvents',[EventsController::class, 'featuredEvents']);
Route::get('/search/{query}',[EventsController::class, 'searchEvents']);
Route::get('/eventsByCategory/{category}',[EventsController::class, 'eventsByCategory']);
Route::post('/addEvent',[EventsController::class, 'createEvent']);
Route::post('/updateEvent/{id}',[EventsController::class, 'updateEvent']);
Route::get('/deleteEvent/{id}',[EventsController::class, 'deleteEvent']);

// Default Api
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
