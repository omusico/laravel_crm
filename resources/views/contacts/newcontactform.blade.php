@extends('layout.master')
@section('tree-menu')
<li><a href="#"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()


@section('pagetitle')
Add new activity
@stop()

@section('breadcrubms_loc')
add new activity
@stop

@section('content')
<p style="color:red;">{{$errors->first('contact_name')}}</p>
<p style="color:red;">{{$errors->first('email')}}</p>
<p style="color:red;">{{$errors->first('contact_number')}}</p>

<form action="{{action('ContactsController@add_newcontact')}}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
<label>Customer Name:</label>
<select name="customer_name">
<?php 
foreach ($data as $row) {?>
<option value="<?php echo $row->id?>"><?php echo $row->company_name?></option>	
<?php }
?>
</select>
</br>
<label>Contact Name:</label>
<input type="text" name="contact_name" class="form-control" value=""/>
<label>Email:</label>
<input type="text" name="email" class="form-control" value=""/>
<label>Contact Number:</label>
<input type="text" name="contact_number" class="form-control" value=""/>
</br>
<input type="submit" name="save" class="btn btn-primary" value="Add"/>
</form>
@stop()