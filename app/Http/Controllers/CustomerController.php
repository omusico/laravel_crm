<?php namespace App\Http\Controllers;
use DB;

class CustomerController extends Controller {

	public function index()
	{
		$result=DB::table('customer')->get();
		return view('customer.index')->with('data',$result);
	}


	public function editform()
	{
		//$result=DB::table('customer')->where('id',$id)->get();
		return view('customer.editform');
	}

}
