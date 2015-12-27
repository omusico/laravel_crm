@extends('layout.master')
@section('tree-menu')
<li><a href="#"><i class="fa fa-circle-o"></i> Customers</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Contacts</a></li>
<li><a href="#"><i class="fa fa-circle-o"></i> Activities</a></li>
@stop()


@section('pagetitle')
Edit Activity
@stop()

@section('breadcrubms_loc')
edit activity
@stop

@section('content')

<form action="{{action('ActivitiesController@editactivity')}}" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
<input type="hidden" name="hiddenid" value="<?php echo $activity_data->id;?>"/>
<label>Customer Name:</label>
</br>
<select name="customer_name">
<option value="<?php echo $currentcustomer->id;?>" selected><?php echo $currentcustomer->company_name;?></option>
<?php foreach($customer_data as $row1){?>
<option value="<?php echo $row1->id;?>"><?php echo $row1->company_name;?></option>
<?php }?>
</select>
</br>
<label>Date:</label><label>(Current date in database: <?php echo $activity_data->date;?>)</label>
</br>
<label>Year:</label>
<select name="year">
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2013">2012</option>
<option value="2013">2011</option>
<option value="2013">2010</option>
<option value="2013">2009</option>
<option value="2013">2008</option>
<option value="2013">2007</option>
</select>
<label>Month:</label>
<select name="month">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<label>Date:</label>
<select name="date">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</br>
<label>Activity type:</label><label>(Current activity type in database: <?php echo $activity_data->activity_type;?>)</label>
</br>
<select name="activity_type">
<option value="<?php echo $activity_data->activity_type;?>" selected><?php echo $activity_data->activity_type;?></option>	
<option value="call">Call</option>
<option value="email">Email</option>
<option value="meeting">Meeting</option>
</select>
</br>
<label>Outcome:</label>
<input type="text" name="outcome" class="form-control" value="<?php echo $activity_data->outcome;?>"/>
<label>Sales person name:</label>
<input type="text" name="sales_person_name" class="form-control" value="<?php echo $activity_data->sales_person_name;?>"/>
</br>
<input type="submit" name="save" class="btn btn-primary" value="Update"/>
</form>
@stop()