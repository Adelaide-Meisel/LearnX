<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name("page.index");
Route::get('/areYouOrg', function () {
    return view('Are-you-an-orginization');
})->name("page.are.you.org");
Route::get('/areYouHomeSchooled', function () {
    return view('Is-your-child-homeschooled');
})->name("page.are.home.school");
Route::get('/FAQ', function () {
    return view('FAQ');
})->name("page.faq");
Route::get('/GradeBook', function () {
    return view('Gradebook');
})->name("page.gradebook");
Route::get('/SignIn', function () {
    return view('Sign-In');
})->name("page.sign.in");
Route::get('/enterOrgAt', function () {
    return view('Please-enter-you-orinization-at');
})->name("page.org.at");