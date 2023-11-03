<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Goes to index
Route::get('/', function () {
    return view('welcome');
})->name("page.index");
Route::get('/home', function () {
    return view('home');
})->name("page.home");

//Goes to FAQ
Route::get('/FAQ', function () {
    return view('FAQ');
})->name("page.faq");

//Goes to Gradebook
Route::get('/GradeBook', function () {
    return view('Gradebook');
})->name("page.gradebook");

//Goes to the Password Reset Page
Route::get('/forgotPassword', function () {
    return view('ForgotPassword');
})->name("page.reset.pas");

//Goes to the Donations Page
Route::get('/donations', function () {
    return view('donate');
})->name("page.donate");

//Goes to the about us page
Route::get('/aboutUs', function () {
    return view('About-Us');
})->name("page.about");

//Goes to why us
Route::get('/whyUs', function () {
    return view('whyUs');
})->name("page.why.us");

//Goes to what people say
Route::get('/whatPeopleSay', function () {
    return view('whatPeopleSay');
})->name("page.reviews");
//Goes to student page
Route::get('/student', function (){
    return view('Student-View');
})->name("page.student");
//Goes to the math page
Route::get('/math', function (){
    return view('Math');
})->name("page.math");
//Goes to the science page
Route::get('/science', function (){
    return view('Science');
})->name("page.science");
//Goes to the history page
Route::get('/history', function (){
    return view('History');
})->name("page.history");
//Goes to the english page
Route::get('/english', function (){
    return view('English');
})->name("page.english");
//Goes to the profile page
Route::get('/profile', function (){
    return view('Profile');
})->name("page.profile");

// Show Register/Create Form through create function in UserController
Route::get('/SignUp', [UserController::class, 'create'])->name('signup')->middleware('guest');

// Create New User through store function in UserController
Route::post('/users', [UserController::class, 'store']);

// Log User Out through log out function in UserController
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Show Login Form login function in UserController
Route::get('/SignIn', [UserController::class, 'login'])->name('signin')->middleware('guest');

// Log In User through authenticate function in UserController
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
   

//Give new routes name 