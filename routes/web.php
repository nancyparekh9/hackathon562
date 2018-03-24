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
//dashboard
Route::get('/', function () {
    return view('dashboard');
});

//school register
Route::post('/sclregister/submit','SclRepRegisterController@submit');

// scl
Route::get('/scl/login', function () {
    return view('scl_data/scl_login');
});

Route::get('/scl/index', 'StudentController@Index' );

Route::post('/scl/login/submit', 'LoginSclController@submit' );

Route::get('/scl/addstudents', function () {
    return view('scl_data/addStudents');
});
Route::get('/scl/registerrep', function () {
    return view('scl_data/addSchool');
});
Route::post('/scl/addstudents/submit','AddStudentDetailsController@submit');





Route::get('scl/addStudentDetails', 'AddStudentDetailsController@showStudents');


Route::get('/scl/addStudentDetails/{Gr_No}',['uses' =>'AddStudentDetailsController@addStudents']);



Route::post('/scl/index/lockdata','LockDataController@lockdata');

Route::post('/govt/viewmeritorious/filter','ViewMeritoriousFilter@filter');

Route::post('/govt/viewschool/filter','ViewschoolController@filter');

Route::prefix('govt')->group(function(){
    Route::get('/login','Auth\GovtLoginController@showLoginForm')->name('govt.login');
    Route::post('/login1','Auth\GovtLoginController@login')->name('govt.login.submit');
    Route::get('/', 'AuthGovtController@index')->name('Govt');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/govt', 'AuthGovtController@index')->name('govtAuthorities');
Route::get('/rep', 'AuthRepresentativeController@index')->name('school_representatives');
