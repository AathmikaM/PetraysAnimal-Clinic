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


    Route::get('/index', function () {
        return view('index');
    });

    
    //Dashboard
    Route::get('/', 'indexController@index');
	Route::get('/index', 'indexController@index');


    //Appointments
    Route::get('Appointments', 'AppointmentController@index');

    Route::get('Appointments/{id}', 'AppointmentController@accept');
    Route::get('Appointments/cancel/{id}', 'AppointmentController@cancel');

    Route::get('calendar', 'AppointmentController@calendar');
    

    Route::get('/appointments', function () {
        return view('appointments');
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



Route::get('/viewstock', 'viewstockController@index');
Route::get('/insertdata', 'inserdataController@index');

Route::get('/Client/{id}', 'AppointmentController@accept');
Route::get('/Client/cancel/{id}', 'AppointmentController@cancel');



Route::post('/addstock/fetch', 'addstockController@fetch')->name('addstock.fetch');




//Pet list loading controller
Route::resource('/pets', 'petList');

Route::post('/pets/addnewpet', 'postToPets@addnewpet');
//Add General treatment  controller

Route::get('/pets/{id}/{pid}', 'postToPets@show');
// Route::get('/client/{id}/{pid}/general', 'PostToPets@create1');

Route::put('/pets/{id}/{pid}/save','postToPets@store');

//Pet profile controller form save
Route::put('/pets/{id}/{pid}/save','postToPets@store');


//General treatment add new
Route::get('/pets/{id}/{pid}/general','generalTreatment@show');



//medicine name suggessions in add stock
//  Route::get('/addstock','AutoCompleteController@index');
//  Route::post('/addstock/fetch','AutoCompleteControlller@fetch')->name('addstock.fetch');

///

Route::post('/pets/{id}/{pid}/general/save/{tid}','generalTreatment@save');

//medicine delete

Route::delete('/pets/{id}/{pid}/general/{treatid}/delete/{tid}','generalTreatment@destroy');


//generating bills
Route::put('/pets/{id}/{pid}/general/savet/{tid}','generalTreatment@savet');

//Save med
Route::get('/pets/{id}/{pid}/general/{tid}/savemed','generalTreatment@savemed');

//view treatment
Route::get('/pets/{id}/{pid}/view','generalTreatment@viewtreatment');

//periodic shedule controller
Route::resource('/pets/{id}/{pid}/periodic', 'periodicTreatment');

//Client list loading controller
Route::get('/petowners1', 'postToPetOwnersList@index1');




//MyClients->Add new petowner
Route::resource('/petowners', 'postToPetOwnersList');
Route::post('/petowners/addnewowner', 'postToPetOwnersList@addnewowner');

//MyClients->pet owners->add new pet
Route::resource('/pets', 'petList');
Route::post('/pets/addnewpet', 'postToPets@addnewpet');

//Analysis->clientbase
Route::resource('clientBasecharts', 'ChartController');
Route::get('/clientbase', 'ChartController@clientbase');

//Analysis->income
Route::resource('incomecharts', 'ChartController');
Route::get('/totalIncome', 'ChartController@income');




