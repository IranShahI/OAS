<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//routes for customer page
Route::get('/','pagesController@index');
route::get('/getTermsOfSale/{id}','pagesController@AJAXtermsOfsale');
route::post('/saleRegister','pagesController@saleFormPost');

Route::auth();

//routes for staff
Route::get('/staff', 'staffController@index');

Route::get('/staff/salesReport', 'staffController@salesReport');

Route::get('/staff/parkingRemains', 'staffController@parkingRemains');

Route::get('/staff/usersManager', 'staffController@usersManager');
Route::post('/staff/usersManager', 'staffController@createUser');
route::get('/user/delete/{id}','staffController@deleteUser');
route::get('/user/edit/{id}','staffController@GETeditUser');
route::post('/user/edit/{id}','staffController@POSTeditUser');

route::get('/staff/termsOfSale','staffController@termsOfsale');
route::post('/staff/termsOfSale','staffController@POSTtermsOfsale');
route::get('/staff/termsOfSale/edit/{id}','staffController@GETeditTermsOfsale');
route::post('/staff/termsOfSale/edit/{id}','staffController@POSTeditTermsOfsale');
route::get('/staff/termsOfSale/delete/{id}','staffController@deleteTermsOfsale');

route::get('/staff/carsManager','staffController@carsManager');
route::post('/staff/carsManager','staffController@POSTcarsManager');
route::get('/staff/carsManager/edit/{id}','staffController@GETeditCarsManager');
route::post('/staff/carsManager/edit/{id}','staffController@POSTeditCarsManager');
route::get('/staff/carsManager/delete/{id}','staffController@deleteCarsManager');

route::get('/staff/saleReport','staffController@salesReport');
route::get('/staff/saleReport/delete/{id}','staffController@deleteSalesReport');

route::get('/successPage/{id}','pagesController@successPage');


route::get('/staff/confirmation','staffController@confirmation');
route::get('/staff/confirm/{id}','staffController@GETconfirm');
route::get('/staff/unConfirm/{id}','staffController@GETunConfirm');
route::get('/staff/confirmation/edit/{id}','staffController@editConfirmation');
route::post('/staff/salesConfirmation','staffController@POSTeditConfirmation');


route::get('/staff/summary','staffController@summary');

