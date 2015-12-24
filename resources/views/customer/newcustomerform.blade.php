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
<input type="text" name="company_name" class="form-control" value=""/>
<label>Address:</label>
<input type="text" name="address" class="form-control" value=""/>
<label>Business registration number:</label>
<input type="text" name="br_number" class="form-control" value=""/>
<label>Website:</label>
<input type="text" name="website" class="form-control" value=""/>
</br>
<input type="submit" name="save" class="btn btn-primary" value="Add"/>
</form>
@stop()