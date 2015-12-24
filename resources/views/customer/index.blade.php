@extends('layout.master')

@section('tree-menu')
<li><a href="View_customers"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()

@section('pagetitle')
Customers
@stop()

@section('breadcrubms_loc')
customers
@stop

@section('content')
<a href="Newcustomer">Add new customer</a>
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
	        <td><a href="<?php echo 'Customeredit/'.$row->id;?>" target="_blank">Edit</a></td>
		</tr>			
		<?php }?>

</table>
@stop()