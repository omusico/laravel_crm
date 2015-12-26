<?php namespace App\Http\Controllers;
use DB;
//to make transactions
use Illuminate\Http\Request;

class ContactsController extends Controller {


	public function index()
	{
		$result=DB::table('contacts')->get();
		return view('contacts.index')->with('data',$result);
	}

	public function addnew_viewload()
	{
		$customer_result=DB::table('customer')->get();
		return view('contacts.newcontactform',$customer_result);

	}

}
