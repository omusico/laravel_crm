@extends('layout.master')

@section('pagetitle')
Edit customer
@stop()

@section('breadcrubms_loc')
edit customer
@stop

@section('content')
<form action="" method="post">
<label>Company Name:</label>
<input type="text" name="company_name" class="form-control" value="<?php echo $data->company_name;?>"/>
<label>Address:</label>
<input type="text" name="address" class="form-control" value="<?php echo $data->address;?>"/>
<label>Business registration number:</label>
<input type="text" name="br_number" class="form-control" value="<?php echo $data->business_registration_number;?>"/>
<label>Website:</label>
<input type="text" name="website" class="form-control" value="<?php echo $data->website;?>"/>
</br>
<input type="submit" name="save" class="btn btn-primary" value="Save"/>
</form>
@stop()