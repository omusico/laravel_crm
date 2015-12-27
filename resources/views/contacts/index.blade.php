@extends('layout.master')

@section('tree-menu')
<li><a href="View_customers"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="View_contacts"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="View_activities"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()

@section('pagetitle')
Contacts
@stop()

@section('breadcrubms_loc')
contacts
@stop

@section('content')
<a href="Newcontact" target="_blank">Add new contact</a>
<br>
<br>
<form action="{{action('ContactsController@filtercontacts')}}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/> 
<label>Filter by customer:</label>
<select name="customer_name">
<?php 
foreach ($customers_data as $row) {?>
<option value="<?php echo $row->id?>"><?php echo $row->company_name?></option>	
<?php }
?>
</select>
<input type="submit" name="filterby" value="Filter" class="btn btn-primary"/>
</form>
<a href="View_contacts">Clear filter</a>
<br>
<br>
<p style="color:red;"><?php echo Session::get('message');?></p>
<table border="1">
<thead>
<th>Contact Name</th><th>Email</th><th>Contact Number</th><th>Edit</th>
</thead>
<tbody>
<?php 
		foreach ($contacts_data as $row) {?>
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