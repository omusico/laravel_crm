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
<th>Company name</th><th>Address</th><th>Business registration number</th><th>Website</th><th>Edit</th>
<?php 
		foreach ($data as $row) {?>
		<tr>
	        <td><input type="hidden" name="hiddenid" value="<?php echo $row->id;?>"/><?php echo $row->company_name;?></td>
	        <td><?php echo $row->address;?></td>
	        <td><?php echo $row->business_registration_number;?></td>
	        <td><?php echo $row->website;?></td>
	        <td><a href="<?php echo 'Edit'.$row->id;?>">Edit</a></td>
		</tr>			
		<?php }?>

</table>
@stop()