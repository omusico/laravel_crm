@extends('layout.master')

@section('tree-menu')
<li><a href="#"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()

@section('pagetitle')
Edit contact
@stop()

@section('breadcrubms_loc')
edit contact
@stop

@section('content')
<form action="{{action('ContactsController@editcontact')}}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
<label>Customer Name:</label>
<select name="customer_name">
<?php 
foreach ($customers_data as $row) {?>
<option value="<?php echo $row->id?>"><?php echo $row->company_name?></option>	
<?php }
?>
</select>
</br>
<input type="hidden" name="hiddenid" value="<?php echo $contacts_data->id;?>"/>
<label>Contact Name:</label>
<input type="text" name="contact_name" class="form-control" value="<?php echo $contacts_data->name?>"/>
<label>Email:</label>
<input type="text" name="email" class="form-control" value="<?php echo $contacts_data->email?>"/>
<label>Contact Number:</label>
<input type="text" name="contact_number" class="form-control" value="<?php echo $contacts_data->contact_number?>"/>
</br>
<input type="submit" name="save" class="btn btn-primary" value="Update"/>
</form>
@stop()