<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/register', 'PagesController@register');

// Routing to the teacher's dashboard page
Route::get('/dashboard', 'PagesController@dashboard');

// Routing to the contact page
Route::get('/contact', 'PagesController@contact');

// Accessing the admin section
Route::get('/admin', 'AdminController@index');

// Routes that concerns the teacher from the admin section
Route::get('/admin/staff_management', 'AdminController@staff_management');
Route::get('/admin/add-staff', 'AdminController@add_staff');
Route::get('/admin/staff_profile', 'AdminController@staff_profile');

// Routes that concerns students from the admin section
Route::get('/admin/student_management', 'AdminController@student_management');
Route::get('/admin/add-student', 'AdminController@add_student');
Route::get('/admin/view-student', 'AdminController@view_student');

// Routes that concerns courses from the admin section
Route::get('/admin/course_management', 'AdminController@course_management');

// Routes that concerns the payment of fees
Route::get('/admin/finances', 'AdminController@finances');

// Routes that concerns the disciplinary sanctions reports
Route::get('/admin/discipline', 'AdminController@discipline');


// User account settings
Route::get('/admin/account_settings', 'AdminController@account_settings');
