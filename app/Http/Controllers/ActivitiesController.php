<?php namespace App\Http\Controllers;
use DB;
//to make transactions
use Illuminate\Http\Request;

class ActivitiesController extends Controller {

	//Activities view load
	public function index()
	{
		$result=DB::table('activities')->get();
		return view('activities.index')->with('data',$result);
	}

	//Add new activity view load
	public function addnewactivity_viewload()
	{
		$result=DB::table('customer')->get();
		return view('activities.newactivityform')->with('data',$result);
	}

	//Adding a new activity with validations
	public function addnewactivity(Request $request)
	{
		$post=$request->all();
		$validate=\Validator::make($request->all(),
			[
				'outcome'=>'required',
				'sales_person_name'=>'required'
			]);

		if ($validate->fails()) 
		{
			return redirect()->back()->withErrors($validate->errors());
		}
		else
		{
			$year=$post['year'];
			$month=$post['month'];
			$date=$post['date'];
			$dates=$year.'-'.$month.'-'.$date;
			$data=array(
					'customer_id'=>$post['customer_name'],
					'date'=>$dates,
					'activity_type'=>$post['activity_type'],
					'outcome'=>$post['outcome'],
					'sales_person_name'=>$post['sales_person_name']
				);
			$result=DB::table('activities')->insert($data);
			if ($result>0) 
			{
				\Session::flash('message','Activity added successfully...');
				return redirect('View_activities');	
			}
		}
	}

	//Editing an activity view load
	public function editactivity_viewload($id)
	{
		$result1=DB::table('customer')->get();
		$result2=DB::table('activities')->where('id',$id)->first();
		$result3=DB::table('customer')->where('id',$id)->first();
		return view('activities.editform')->with('customer_data',$result1)->with('activity_data',$result2)->with('currentcustomer',$result3);
	}

	//Edit an activity with user inputs
	public function editactivity(Request $request)
	{
		$post=$request->all();
		$id=$post['hiddenid'];
		$date=$post['year'].'-'.$post['month'].'-'.$post['date'];
		$data=array(
					'customer_id'=>$post['customer_name'],
					'date'=>$date,
					'activity_type'=>$post['activity_type'],
					'outcome'=>$post['outcome'],
					'sales_person_name'=>$post['sales_person_name']
				);
			$result=DB::table('activities')->where('id',$id)->update($data);
			if ($result>0) 
			{
				\Session::flash('message','Activity updated successfully...');
				return redirect('View_activities');	
			}
	}

}
