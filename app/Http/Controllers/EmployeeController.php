<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\EmployeePost;
use App\Employee;
class EmployeeController extends Controller
{
		/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	Log::debug('An informational message.');
    	$employees = Employee::orderBy("emp_no", "desc")->take(100)->get();
    	return view("employees.index", ["employees"=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = new Employee;
        return view("employees.create", ["employee"=>$employee]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeePost $request)
    {
        $employee = new Employee;
        // $employee -> emp_no = 500000;
        $employee -> first_name = $request -> firstName;
        $employee -> last_name = $request -> lastName;
        $employee -> birth_date = $request -> birthDate;
        $employee -> hire_date = $request -> hireDate;
        $employee -> gender = $request -> gender;
        $employee -> save();
        return redirect()->route("employees.edit", [$employee->emp_no])->with("status", "社員が作成できました。");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        
         return view("employees.show", ["employee"=>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view("employees.edit", ["employee"=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeePost $request, $id)
    {
        $employee = Employee::find($id);
        $employee -> first_name = $request -> firstName;
        $employee -> last_name = $request -> lastName;
        $employee -> birth_date = $request -> birthDate;
        $employee -> hire_date = $request -> hireDate;
        $employee -> gender = $request -> gender;
        $employee -> save();
        return redirect()->route("employees.edit", [$id])->with("status", "情報が変更できました。");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect()->route("employees.index", [$id])->with("status", "削除されました。");
    }
}
