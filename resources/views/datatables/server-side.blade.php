@extends("layouts.master")

@section("title")
	DataTables Basic
@stop

@section("javascript")
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="{{asset('js/dataTables-custom.js')}}"></script>
@stop

@section("stylesheet")
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@stop

@section("content")	
	<h1 class="page-title ">DataTables Basic</h1>
	@include("layouts.msg")
	<table id="server-side" class="table table-striped table-bordered" data-url = "{{route("datatable-server-side-data")}}">
		
	</table>
@stop

