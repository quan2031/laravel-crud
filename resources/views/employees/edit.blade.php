@extends("layouts.master")

@section("title")
	{{$employee->first_name}} {{$employee->last_name}}
@stop

@section("content")	
	@include("layouts.msg")
	<form action="{{route("employees.update", [$employee->emp_no])}}" method="post">
		@method('PUT')
		@csrf
		<div class="form-group row">
	    <label for="firstName" class="col-sm-2 col-form-label">名</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="firstName" name="firstName" value="{{$employee->first_name}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="lastName" class="col-sm-2 col-form-label">性</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="lastName" name="lastName" value="{{$employee->last_name}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="birthDate" class="col-sm-2 col-form-label">生年月日</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="birthDate" name="birthDate" value="{{$employee->birth_date}}">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="hireDate" class="col-sm-2 col-form-label">採用日</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="hireDate" name="hireDate" value="{{$employee->hire_date}}">
	    </div>
	  </div>
	  <fieldset class="form-group">
	    <div class="row">
	      <legend class="col-form-label col-sm-2 pt-0">性別</legend>
	      <div class="col-sm-10">
	        <div class="form-check">
	          <input class="form-check-input" type="radio" name="gender" value="M" {{$employee->gender == "M" ? 'checked' : ''}}>
	          <label class="form-check-label" for="gender">
	            男
	          </label>
	        </div>
	        <div class="form-check">
	          <input class="form-check-input" type="radio" name="gender" value="F"{{$employee->gender == "F" ? 'checked' : ''}}>
	          <label class="form-check-label" for="gender">
	            女
	          </label>
	        </div>
	      </div>
	    </div>
	  </fieldset>
	  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">同意する</button>
    </div>
  </div>
	</form>
@stop