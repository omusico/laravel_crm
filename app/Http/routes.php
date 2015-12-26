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

Route::get('/', 'CustomerController@index');

Route::get('home', 'HomeController@index');

Route::get('View_customers', 'CustomerController@index');

Route::get('Customeredit/{id}', 'CustomerController@editform');

Route::get('Newcustomer', 'CustomerController@load_form_newcustomer');

Route::post('Add_customer', 'CustomerController@add_newcustomer');

Route::post('Searchforcustomers', 'CustomerController@search_customers');

Route::get('View_contacts', 'ContactsController@index');

Route::get('Add_contact', 'ContactsController@addnew_viewload');

Route::get('Contactedit/{id}', '');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
