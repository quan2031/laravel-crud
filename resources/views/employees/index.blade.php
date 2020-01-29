@extends("layouts.master")

@section("title")
	社員一覧
@stop

@section("content")	
<h1 class="page-title ">社員一覧</h1>
@include("layouts.msg")
<a href="{{route("employees.create")}}" class="btn btn-default">作成</a>
<table id="employees" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>社員番号</th>
			<th>名</th>
			<th>性</th>
			<th>生年月日</th>
			<th>性別</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($employees as $emp)
		<tr>
			<td>{{$emp->emp_no}}</td>
			<td>{{$emp->first_name}}</td>
			<td>{{$emp->last_name}}</td>
			<td>{{$emp->birth_date}}</td>
			<td>{{$emp->gender}}</td>
			<td class="table-action">
				<a href="{{route("employees.show", [$emp->emp_no])}}">
					<svg class="bi bi-check-box text-success" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M17.354 4.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L10 11.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
				  <path fill-rule="evenodd" d="M3.5 15A1.5 1.5 0 005 16.5h10a1.5 1.5 0 001.5-1.5v-5a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H5a.5.5 0 01-.5-.5V5a.5.5 0 01.5-.5h8a.5.5 0 000-1H5A1.5 1.5 0 003.5 5v10z" clip-rule="evenodd"/>
				</svg>
			</a>
			<a href="{{route("employees.edit", [$emp->emp_no])}}">
				<svg class="bi bi-pen text-info" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M7.707 15.707a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391L12.086 4.5a2 2 0 012.828 0l.586.586a2 2 0 010 2.828l-7.793 7.793zM5 13l7.793-7.793a1 1 0 011.414 0l.586.586a1 1 0 010 1.414L7 15l-3 1 1-3z" clip-rule="evenodd"/>
				  <path fill-rule="evenodd" d="M11.854 4.56a.5.5 0 00-.708 0L7.854 7.855a.5.5 0 11-.708-.708l3.293-3.292a1.5 1.5 0 012.122 0l.293.292a.5.5 0 11-.708.708l-.292-.293z" clip-rule="evenodd"/>
				  <path d="M15.293 3.207a1 1 0 011.414 0l.03.03a1 1 0 01.03 1.383L15.5 6 14 4.5l1.293-1.293z"/>
				</svg>
			</a>
				<svg class="bi bi-x-square-fill text-danger destroy" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-url = "{{route("deletemp", [$emp->emp_no])}}">
				  <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm3.354 4.646L10 9.293l2.646-2.647a.5.5 0 01.708.708L10.707 10l2.647 2.646a.5.5 0 01-.708.708L10 10.707l-2.646 2.647a.5.5 0 01-.708-.708L9.293 10 6.646 7.354a.5.5 0 11.708-.708z" clip-rule="evenodd"/>
				</svg>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
{{ $employees->links() }}
@stop

