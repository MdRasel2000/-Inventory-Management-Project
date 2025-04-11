<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\productController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\saleController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage']);
Route::get('/dashboard', [dashboardController::class, 'dashboardPage']);
Route::get('/categoryPage', [categoryController::class, 'categoryPage']);


Route::get('/userRegistration', [userController::class, 'registrationPage']);
Route::get('/userLogin', [userController::class, 'loginPage']);
Route::get('/resetPassword', [userController::class, 'resetPasswordPage']);
Route::get('/sendOtp', [userController::class, 'sendOtpPage']);
Route::get('/verifyOtp', [userController::class, 'verifyOtpPage']);
Route::get('/userProfile', [userController::class, 'userProfile']);



Route::get('/customerPage', [customerController::class, 'customerPage']);


Route::get('/productPage', [productController::class, 'productPage']);


Route::get('/invoicePage', [invoiceController::class, 'invoicePage']);

Route::get('/salePage', [saleController::class, 'salePage']);


Route::get('/reportPage', [reportController::class, 'reportPage']);




