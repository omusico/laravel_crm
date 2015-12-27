@extends('layout.master')

@section('tree-menu')
<li><a href="View_customers"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="View_contacts"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="View_activities"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()

@section('pagetitle')
Activities
@stop()

@section('breadcrubms_loc')
activities
@stop

@section('content')
<a href="Add_activity" target="_blank">Add new activity</a>
<br>
<br>
<p style="color:red;"><?php echo Session::get('message');?></p>
<table border="1">
<!--<input type="text" class="form-control" name="test" placeholder="Text here"/>-->
<thead>
<th>Date</th><th>Activity Type</th><th>Outcome</th><th>Sales person name</th><th>Edit</th>
</thead>
<tbody>
<?php 
		foreach ($data as $row) {?>
		<tr>
	        <input type="hidden" name="hiddenid" value="<?php echo $row->id;?>"/>
	        <td><?php echo $row->date;?></td>
	        <td><?php echo $row->activity_type;?></td>
	        <td><?php echo $row->outcome;?></td>
	        <td><?php echo $row->sales_person_name;?></td>
	        <td><a href="<?php echo 'Edit_activityview/'.$row->id?>" target="_blank">Edit</a></td>
		</tr>			
		<?php }?>

</tbody>
</table>
@stop()