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
Route::resource('student', 'StudentsController');
Route::resource('staff', 'StaffsController');
Route::resource('course', 'CoursesController');
Route::resource('level', 'LevelsController');

Route::get('/', 'PagesController@index');

Route::get('/register', 'PagesController@register');

// Routing to the contact page
Route::get('/contact', 'PagesController@contact');


Route::get('/home', 'StaffsController@index');

Route::get('/reports', 'StaffsController@reports');

Route::get('/sanctions', 'StaffsController@sanctions');

Route::get('/reminders', 'ReminderController@index');
Route::post('reminders', 'ReminderController@store');

Route::get('/settings', 'StaffsController@account_settings');

Route::post('admin/staff', 'StaffsController@store');
// STUDENTS ROUTE
Route::get('/admin/student_management', 'StudentsController@index');

// Routing to the Admin's dashboard page
Route::get('/dashboard', 'PagesController@dashboard');


// Accessing the admin section
Route::get('/admin', 'AdminController@index');

// Routes that concerns the teacher from the admin section
Route::get('/admin/staff_management', 'StaffsController@index');
Route::get('/admin/add-staff', 'AdminController@add_staff');

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
