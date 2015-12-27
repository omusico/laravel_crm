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

Route::get('Customeredit/{id}', 'CustomerController@editform_viewload');

Route::post('Editcustomer', 'CustomerController@updatecustomer');

Route::get('Newcustomer', 'CustomerController@load_form_newcustomer');

Route::post('Add_customer', 'CustomerController@add_newcustomer');

Route::post('Searchforcustomers', 'CustomerController@search_customers');

Route::get('View_contacts', 'ContactsController@index');

Route::get('Newcontact', 'ContactsController@addnew_viewload');

Route::post('Add_contact', 'ContactsController@add_newcontact');

Route::post('Filter_contacts', 'ContactsController@filtercontacts');

Route::get('Contactedit/{id}', 'ContactsController@editcontact_viewload');

Route::post('Editcontact', 'ContactsController@editcontact');

Route::get('View_activities', 'ActivitiesController@index');

Route::get('Add_activity', 'ActivitiesController@addnewactivity_viewload');

Route::post('Newactivity', 'ActivitiesController@addnewactivity');

Route::get('Edit_activityview/{id}', 'ActivitiesController@editactivity_viewload');

Route::post('Edit_activity', 'ActivitiesController@editactivity');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
