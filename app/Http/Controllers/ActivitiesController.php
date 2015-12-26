<?php namespace App\Http\Controllers;
use DB;
//to make transactions
use Illuminate\Http\Request;

class ActivitiesController extends Controller {


	public function index()
	{
		$result=DB::table('contacts')->get();
		return view('contacts.index')->with('data',$result);
	}

	public function addnew_viewload()
	{
		return view('contacts.newcontactform');

	}

}
