<?php namespace App\Http\Controllers;
use DB;
//to make transactions
use Illuminate\Http\Request;

class ContactsController extends Controller {

	//Load contacts page
	public function index()
	{
		$result1=DB::table('contacts')->get();
		$result2=DB::table('customer')->get();
		return view('contacts.index')->with('contacts_data',$result1)->with('customers_data',$result2);
	}

	//Add new contact view load
	public function addnew_viewload()
	{
		$result=DB::table('customer')->get();
		return view('contacts.newcontactform')->with('data',$result);

	}

	//Adding a new contact with validations
	public function add_newcontact(Request $request)
	{
		$post=$request->all();
		$validate=\Validator::make($request->all(),
			[
				'contact_name'=>'required',
				'email'=>'required',
				'contact_number'=>'required'
			]);

		if ($validate->fails()) 
		{
			return redirect()->back()->withErrors($validate->errors());
		}
		else
		{
			$data=array(
					'customer_id'=>$post['customer_name'],
					'name'=>$post['contact_name'],
					'email'=>$post['email'],
					'contact_number'=>$post['contact_number']
				);
			$result=DB::table('contacts')->insert($data);
			if ($result>0) 
			{
				\Session::flash('message','Contact added successfully...');
				return redirect('View_contacts');	
			}
		}
	}

	//Filter contacts by customer name
	public function filtercontacts(Request $request)
	{
		$post=$request->all();
		$customer_id=$post['customer_name'];
		$result1=DB::table('contacts')->where('customer_id',$customer_id)->get();
		$result2=DB::table('customer')->get();
		return view('contacts.index')->with('contacts_data',$result1)->with('customers_data',$result2);
	}

	//Edit contact view load
	public function editcontact_viewload($id)
	{
		$result1=DB::table('customer')->get();
		$result2=DB::table('contacts')->where('id',$id)->first();
		return view('contacts.editform')->with('customers_data',$result1)->with('contacts_data',$result2);
	}

	//Edit contact with user inputs
	public function editcontact(Request $request)
	{
		$post=$request->all();
		$id=$post['hiddenid'];
		/*$customer_id=$post['customer_name'];
		$name=$post['contact_name'];
		$email=$post['email'];
		$contact_number=$post['contact_number'];*/

			$data=array(
					'customer_id'=>$post['customer_name'],
					'name'=>$post['contact_name'],
					'email'=>$post['email'],
					'contact_number'=>$post['contact_number']
				);
			$result=DB::table('contacts')->where('id',$id)->update($data);
			if ($result>0) 
			{
				\Session::flash('message','Contact updated successfully...');
				return redirect('View_contacts');	
			}
	}

}
