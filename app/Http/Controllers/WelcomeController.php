<?php namespace App\Http\Controllers;
use DB;

class WelcomeController extends Controller {

	//Load index page with customers
	public function index()
	{
		$result=DB::table('customer')->get();
		return view('customer.index')->with('data',$result);
	}


}
