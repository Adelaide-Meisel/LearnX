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
    return view('Sign-in');
})->name("page.sign.in");
Route::get('/enterOrgAt', function () {
    return view('Please-enter-your-orginizations-at');
})->name("page.org.at");
Route::get('/forgotPassword', function () {
    return view('ForgotPassword');
})->name("page.reset.pas");
Route::get('/donations', function () {
    return view('donate');
})->name("page.donate");
Route::get('/reasonToJoin', function () {
    return view('purposeForJoin');
})->name("page.purpose.join");
Route::get('/aboutUs', function () {
    return view('About-Us');
})->name("page.about");
Route::get('/whyUs', function () {
    return view('whyUs');
})->name("page.why.us");
Route::get('/whatPeopleSay', function () {
    return view('whatPeopleSay');
})->name("page.reviews");
Route::get('/childsEmail', function () {
    return view('getChildEmail');
})->name("page.email");