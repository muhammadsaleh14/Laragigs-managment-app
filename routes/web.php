<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Middleware\Authenticate;

//common resource routes
//index-show all listings
//show - show single listing
//create - show form to create new listing
//store - store new listing
//edit - show form to edit listing
//update - update listing
//destroy - delete listing

Route::get('/', [ListingController::class,'index']);

//show listing create form
Route::get('/listings/create', [ListingController::class,'create'])->middleware('auth')->middleware('auth');

//store listing data
Route::post('/listings', [ListingController::class,'store'])->middleware('auth');

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingController::class,'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->middleware('auth');

//Manage listings
Route::get('/listings/manage', [ListingController::class,'manage'])->middleware('auth');

//single listing
Route::get('/listings/{listing}', [ListingController::class,'show']);

//Show register create form
Route::get('/register', [UserController::class,'create'])->middleware('guest');

//register user
Route::post('/users', [UserController::class,'store'])->middleware('guest');

Route::post('/logout', [UserController::class,'logout'])->middleware('auth');

//show login form
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate', [UserController::class,'authenticate'])->middleware('guest');
