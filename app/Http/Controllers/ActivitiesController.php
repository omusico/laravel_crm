<?php namespace App\Http\Controllers;
use DB;
//to make transactions
use Illuminate\Http\Request;

class ActivitiesController extends Controller {


	public function index()
	{
		$result=DB::table('activities')->get();
		return view('activities.index')->with('data',$result);
	}

	public function addnewactivity_viewload()
	{
		$result=DB::table('customer')->get();
		return view('activities.newactivityform')->with('data',$result);
	}

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

	public function editactivity_viewload($id)
	{
		$result=DB::table('activities')->where('id',$id)->get();
		return view('activities.index')->with('data',$result);
	}

}
