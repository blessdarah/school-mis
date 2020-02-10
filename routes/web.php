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

/* ROUTE RESOURCES */
Route::resource('admin/student', 'StudentsController');
Route::resource('admin/staff', 'StaffsController');
Route::resource('admin/course', 'CoursesController');
Route::resource('admin/level', 'LevelsController');
Route::resource('sanction', 'SanctionsController');

Route::get('/', 'PagesController@index');

Route::get('/register', 'PagesController@register');
Route::post('/login', 'SessionsController@login');

// Routing to the contact page
Route::get('/contact', 'PagesController@contact');


Route::get('/home', 'StaffsController@index');

Route::get('/reports', 'StaffsController@reports');

Route::get('/reminders', 'ReminderController@index');
Route::post('reminders', 'ReminderController@store');

Route::get('/settings', 'StaffsController@account_settings');

// STUDENTS ROUTE
Route::get('/admin/student_management', 'StudentsController@index');

// Routing to the teacher's dashboard page
Route::get('/dashboard', 'PagesController@dashboard')->name("tdashboard");

Route::get('/settings', 'PagesController@settings');
Route::get('/reports', 'PagesController@reports');

// Accessing the admin section
Route::get('/admin', 'AdminController@index');


// Routes that concerns students from the admin section
// Route::get('/admin/student_management', 'AdminController@student_management');
Route::get('/admin/add-student', 'AdminController@add_student');
Route::get('/admin/view-student', 'AdminController@view_student');
Route::get('/admin/parent_management', 'ParentsController@index');

// Routes that concerns courses from the admin section
Route::get('/admin/course_management', 'CoursesController@index');

// Routes that concerns the classes of the whole school
Route::get('/admin/class_management', 'LevelsController@index');
Route::post('/admin/levels', 'LevelsController@store');

// Routes that concerns the payment of fees
Route::get('/admin/finances', 'AdminController@finances');

// Routes that concerns the disciplinary sanctions reports
Route::get('/admin/discipline', 'AdminController@discipline');


// User account settings
Route::get('/admin/account_settings', 'AdminController@account_settings');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
