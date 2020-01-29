@extends("layouts.master")

@section("title")
	{{$employee->first_name}} {{$employee->last_name}}
@stop

@section("content")	
<div class="container">
	<table class="table">
		<tr>
			<td>社員番号</td>
			<td>{{$employee->emp_no}}</td>
		</tr>
		<tr>
			<td>名前</td>
			<td>{{$employee->first_name}} {{$employee->last_name}}</td>
		</tr>
		<tr>
			<td>生年月日</td>
			<td>{{$employee->birth_date}}</td>
		</tr>
		<tr>
			<td>採用日</td>
			<td>{{$employee->hire_date}}</td>
		</tr>
		<tr>
			<td>性別</td>
			<td>{{$employee->gender}}</td>
		</tr>
	</table>	
</div>
@stop