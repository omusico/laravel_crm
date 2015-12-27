@extends('layout.master')

@section('tree-menu')
<li><a href="#"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()

@section('pagetitle')
Edit customer
@stop()

@section('breadcrubms_loc')
edit customer
@stop

@section('content')
<form action="{{action('CustomerController@updatecustomer')}}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
<input type="hidden" name="hiddenid" value="<?php echo $data->id;?>"/>
<label>Company Name:</label>
<input type="text" name="company_name" class="form-control" value="<?php echo $data->company_name;?>"/>
<label>Address:</label>
<input type="text" name="address" class="form-control" value="<?php echo $data->address;?>"/>
<label>Business registration number:</label>
<input type="text" name="br_number" class="form-control" value="<?php echo $data->business_registration_number;?>"/>
<label>Website:</label>
<input type="text" name="website" class="form-control" value="<?php echo $data->website;?>"/>
</br>
<input type="submit" name="save" class="btn btn-primary" value="Update"/>
</form>
@stop()