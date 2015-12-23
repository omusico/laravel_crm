@extends('layout.master')

@section('pagetitle')
Customers
@stop()

@section('breadcrubms_loc')
customers
@stop

@section('content')

<?php 
foreach ($data as $row) {
	echo $row->('company_name');
	echo '</br>';			
}
?>

</table>
@stop()