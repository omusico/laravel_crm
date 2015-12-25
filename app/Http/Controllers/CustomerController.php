<?php namespace App\Http\Controllers;
use DB;
//to make transactions
use Illuminate\Http\Request;
//to create pagination
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerController extends Controller {


	public function index()
	{
		$result=DB::table('customer')->paginate(5);
		return view('customer.index')->with('data',$result);
	}

	public function search_customers()
	{

	}

	public function load_form_newcustomer()
	{
		return view('customer.newcustomerform');
	}

	public function add_newcustomer(Request $request)
	{
		$post=$request->all();
		$validate=\Validator::make($request->all(),
			[
				'company_name'=>'required',
				'address'=>'required',
				'business_registration_number'=>'required',
				'website'=>'required'
			]);

		if ($validate->fails()) 
		{
			return redirect()->back()->withErrors($validate->errors());
		}
		else
		{
			$data=array(
					'company_name'=>$post['company_name'],
					'address'=>$post['address'],
					'business_registration_number'=>$post['business_registration_number'],
					'website'=>$post['website']
				);
			$result=DB::table('customer')->insert($data);
			if ($result>0) 
			{
				\Session::flash('message','Customer added successfully...');
				return redirect('View_customers');	
			}
		}

	}

	public function editform($id)
	{
		$result=DB::table('customer')->where('id',$id)->first();
		return view('customer.editform')->with('data',$result);
	}

	public function updatecustomer()
	{

	}

}
