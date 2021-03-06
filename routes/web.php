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
    

    Route::get('/charts', function () {
        return view('charts.charts');
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
Route::resource('clientBasecharts', 'ChartController');
Route::get('/clientbase', 'ChartController@clientbase');


Route::resource('incomecharts', 'ChartController');
Route::get('/totalIncome', 'ChartController@income');





Route::get('/viewstock', 'viewstockController@index');
Route::get('/insertdata', 'inserdataController@index');
Route::get('/Client/{id}', 'AppointmentController@accept');
Route::get('/Client/cancel/{id}', 'AppointmentController@cancel');


Route::post('/petowners/addnewowner', 'postToPetOwnersList@addnewowner');
Route::post('/addstock/fetch', 'addstockController@fetch')->name('addstock.fetch');

//Client list loading controller
Route::resource('/petowners', 'postToPetOwnersList');


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
<<<<<<< HEAD
Route::get('/pets/{id}/{pid}/periodic', 'periodic@index');
=======
Route::resource('/pets/{id}/{pid}/periodic', 'periodicTreatment');

//Client list loading controller
Route::get('/petowners1', 'postToPetOwnersList@index1');


//send email controller
Route::get('/index', 'SendEmailController@index');
Route::post('/index/send', 'SendEmailController@send');
>>>>>>> f42b49948e85d3e89ea62e38df9c5ad569eb926a

//periodic shedule store controller
Route::post('/pets/{id}/{pid}/periodic/store', 'periodic@store');


<<<<<<< HEAD
//Client list loading controller
Route::get('/petowners1', 'postToPetOwnersList@index1');
=======
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
//Route::resource('charts.incomeCharts');
//Route::get('/totalIncome', 'ChartController@income');


//Analysis->income
Route::get('/totalIncome', function () {
        return view('charts.incomeCharts',['totalIncome'=>array(0,0,0,0,0,0,0,0,0,0,0,0)]);
    });

// route to get data for the graph
Route::post('getData',[
    'uses' => 'ChartController@income',
    'as' => 'getData'
]);


//Analysis->clientBase
Route::get('/clientbase', function () {
        return view('charts.clientBasecharts',['totalclients'=>array(0,0,0,0,0,0,0,0,0,0,0,0)]);
});

// route to get data for the graph
Route::post('getData1',[
    'uses' => 'ChartController@clientbase',
    'as' => 'getData1'
]);



>>>>>>> f42b49948e85d3e89ea62e38df9c5ad569eb926a

//get pdf

Route::get('/pets/{id}/{pid}/general/savet/{tid}/pdf', 'pdfcreate@pdfcr');

<<<<<<< HEAD
=======
Route::get('/pdf', function () {
    return view('pdf.pdf');
});
 
// route to get data for the graph
Route::post('getData',[
    'uses' => 'ChartController@income',
    'as' => 'getData'
]);
>>>>>>> f42b49948e85d3e89ea62e38df9c5ad569eb926a
