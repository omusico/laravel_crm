@extends('layout.master')

@section('tree-menu')
<li><a href="View_customers"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="View_contacts"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()

@section('pagetitle')
Customers
@stop()

@section('breadcrubms_loc')
customers
@stop

@section('content')
<a href="Add_contact" target="_blank">Add new contact</a>
<br>
<br>
<p style="color:red;"><?php echo Session::get('message');?></p>
<table border="1">
<!--<input type="text" class="form-control" name="test" placeholder="Text here"/>-->
<thead>
<th>Contact Name</th><th>Email</th><th>Contact Number</th><th>Edit</th>
</thead>
<tbody>
<?php 
		foreach ($data as $row) {?>
		<tr>
	        <input type="hidden" name="hiddenid" value="<?php echo $row->id;?>"/>
	        <!--<td><?php echo $row->customer_id;?></td>-->
	        <td><?php echo $row->name;?></td>
	        <td><?php echo $row->email;?></td>
	        <td><?php echo $row->contact_number;?></td>
	        <td><a href="<?php echo 'Contactedit/'.$row->id;?>" target="_blank">Edit</a></td>
		</tr>			
		<?php }?>

</tbody>
</table>
@stop()