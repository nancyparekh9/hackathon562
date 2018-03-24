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
//about us
Route::get('/dashboard/aboutus', function () {
    return view('aboutpage');
});
//register school representative
Route::get('/scl/registerrep', function () {
    return view('scl_data/addSchool');
});
//submit school representative
Route::post('/sclregister/submit','SclRepRegisterController@submit');

// scl representative login page
Route::get('/scl/login', function () {
    return view('scl_data/scl_login');
});

//submit school login page
Route::post('/scl/login/submit', 'LoginSclController@submit' );

//school view student
Route::get('/scl/index', 'StudentController@Index' );

//school add student page
Route::get('/scl/addstudents', function () {
    return view('scl_data/addStudents');
});

//school add student submit
Route::post('/scl/addstudents/submit','AddStudentDetailsController@submit');

//school update student details
Route::get('scl/addStudentDetails', 'AddStudentDetailsController@showStudents');

//school update student pass value to modal
Route::get('/scl/addStudentDetails/{Gr_No}',['uses' =>'AddStudentDetailsController@addStudents']);

//school lock data
Route::post('/scl/index/lockdata','LockDataController@lockdata');

//school view meritorious
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
