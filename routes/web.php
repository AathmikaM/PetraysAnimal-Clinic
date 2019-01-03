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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function()
{

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/abc', function () {
        return view('auth.login');
    });

    Route::get('/profile', function () {
        return view('profile');
    });


    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/client_profile', function () {
        return view('client_profile');
    });


    Route::get('/', 'indexController@index');
	Route::get('/index', 'indexController@index');
    // Route::get('Appointments', 'AppointmentController@index');

    Route::get('Appointments', 'AppointmentController@index');

    Route::get('Appointments/{id}', 'AppointmentController@accept');
    Route::get('Appointments/cancel/{id}', 'AppointmentController@cancel');

    Route::get('calendar', 'AppointmentController@calendar');
    /*Route::get('/calendar', function () {
        return view('appointment.fullcalendar');
    });*/


    Route::get('/appointments', function () {
        return view('appointments');
    });

    Route::get('/Candidate_call', function () {
        return view('Candidate_call');
    });

    Route::get('/Candidate_history', function () {
        return view('Candidate_history');
    });

    Route::get('/Candidate_other', function () {
        return view('Candidate_other');
    });

    Route::get('/Candidate_Reference', function () {
        return view('Candidate_Reference');
    });

    Route::get('/Client_call', function () {
        return view('Client_call');
    });

    Route::get('/Client_contacts', function () {
        return view('Client_contacts');
    });

    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/Candidate_List', function () {
        return view('Candidate_List');
    });

    Route::get('/Client_List', function () {
        return view('Client_List');
    });


    Route::get('/cal', function () {
        return view('cal');
    });

   

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//  Route::get('/addstock', function () {
//     return view('addstock.addstock');
//  });

//This Route Will be Provide addstock Routes
Route::resource('addstock', 'addstockController');


Route::resource('viewstock', 'viewstockController');


// Route::get('charts', 'ChartController@index')->name('chart');
Route::resource('charts', 'ChartController');



Route::get('/viewstock', 'viewstockController@index');


Route::post('/addstock/fetch', 'addstockController@fetch')->name('addstock.fetch');

//Client list loading controller
Route::resource('/petowners', 'postToPetOwnersList');


//Pet list loading controller
Route::resource('/pets', 'petList');


//Add General treatment  controller
Route::get('/pets/{id}/{pid}', 'postToPets@show');
// Route::get('/client/{id}/{pid}/general', 'PostToPets@create1');


//Pet profile controller
Route::put('/pets/{id}/{pid}/save','postToPets@store');


//General treatment
Route::get('/pets/{id}/{pid}/general','treatments@show');

//Periodic treatment
Route::post('/pets/{id}/{pid}/periodic','postToPets@store');

//medicine name suggessions in add stock
//  Route::get('/addstock','AutoCompleteController@index');
//  Route::post('/addstock/fetch','AutoCompleteControlller@fetch')->name('addstock.fetch');

//generating report

Route::post('/pets/{id}/{pid}/general/save','treatments@save');
