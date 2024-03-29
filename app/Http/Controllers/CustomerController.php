<?php namespace App\Http\Controllers;
use DB;
//to make transactions
use Illuminate\Http\Request;
//send mails
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller {

	//Load index page with customers
	public function index()
	{
		$result=DB::table('customer')->get();
		return view('customer.index')->with('data',$result);
	}

	//Search customers
	public function search_customers(Request $request)
	{
		$post=$request->all();
		$searchval=$post['searchbox'];
		$result = DB::table('customer')->where('company_name', 'LIKE', '%' . $searchval . '%')->get();
		return view('customer.index')->with('data',$result);
	}

	//Add new customer view load
	public function load_form_newcustomer()
	{
		return view('customer.newcustomerform');
	}

	//Adding a new customer to the database and validation
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
				$customername=$post['company_name'];
				\Mail::send('emails.usercreated',['name'=>$customername],function($message)
					{ 
						$message->to('buddhieash@gmail.com', 'Hello....')->subject('New customer created');
					});

				\Session::flash('message','Customer added successfully...');
				return redirect('View_customers');	
			}
		}

	}

	//Edit a customer view load
	public function editform_viewload($id)
	{
		$result=DB::table('customer')->where('id',$id)->first();
		return view('customer.editform')->with('data',$result);
	}

	//Edit a customer with user inputs
	public function updatecustomer(Request $request)
	{
		$post=$request->all();
		$id=$post['hiddenid'];
		$data=array(
					'company_name'=>$post['company_name'],
					'address'=>$post['address'],
					'business_registration_number'=>$post['br_number'],
					'website'=>$post['website']
				);
			$result=DB::table('customer')->where('id',$id)->update($data);
			if ($result>0) 
			{
				\Session::flash('message','Customer updated successfully...');
				return redirect('View_customers');	
			}
	}

}
