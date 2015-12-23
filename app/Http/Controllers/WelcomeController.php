<?php namespace App\Http\Controllers;
use DB;

class WelcomeController extends Controller {


	public function index()
	{
		$result=DB::table('customer')->get();
		return view('customer.index')->with('data',$result);
	}


}
