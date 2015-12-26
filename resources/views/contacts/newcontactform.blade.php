@extends('layout.master')
@section('tree-menu')
<li><a href="#"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()


@section('pagetitle')
Add new contact
@stop()

@section('breadcrubms_loc')
add new customer
@stop

@section('content')
<p style="color:red;">{{$errors->first('company_name')}}</p>
<p style="color:red;">{{$errors->first('address')}}</p>
<p style="color:red;">{{$errors->first('business_registration_number')}}</p>
<p style="color:red;">{{$errors->first('website')}}</p>

<form action="{{action('CustomerController@add_newcustomer')}}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
<label>Customer Name:</label>
<select>
<?php 
foreach ($customer_result as $row) {?>
<option value="<?php echo $row->id?>"><?php echo $row->company_name?></option>	
<?php }
?>
</select>
</br>
<label>Contact Name:</label>
<input type="text" name="address" class="form-control" value=""/>
<label>Email:</label>
<input type="text" name="business_registration_number" class="form-control" value=""/>
<label>Contact Number:</label>
<input type="text" name="website" class="form-control" value=""/>
</br>
<input type="submit" name="save" class="btn btn-primary" value="Add"/>
</form>
@stop()