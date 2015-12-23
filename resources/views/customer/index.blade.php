@extends('layout.master')

@section('pagetitle')
Customers
@stop()

@section('breadcrubms_loc')
customers
@stop

@section('content')
<a href="#">Create new customer</a>
<br>
<br>
<table border="1">
<!--<input type="text" class="form-control" name="test" placeholder="Text here"/>-->
<th>Company name</th><th>Address</th><th>Company name</th><th>Business registration number</th><th>Website</th><th>Edit</th>
<tr>
	<td>FFF</td>
	<?php 
		foreach ($data as $row) {
			echo $row->id;
			echo $row->company_name;
		}
	?>
</tr>
</table>
@stop()