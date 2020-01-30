<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\EmployeePost;
use App\Employee;
class DatatableController extends Controller
{
	/**
	* 社員一覧を表示する。
	* JqueryのDataTablesを単に使い方。
	* @return 社員の一覧
	*/
	public function index(){
		$employees = Employee::take(100)->get();
    return view("datatables.basic", ["employees"=>$employees]);
	}

	public function serverSideView(){
		return view("datatables.server-side");
	}

	/**
	* 社員一覧を表示する。
	* 全部のデータを取ることではない。
	* JqueryのDataTablesとajaxで指定のデータ数量を取って、それから表示する。
	* @return 社員の一覧
	*/
	public function serverSide(Request $request){

		$count = Employee::count();
		$results = Employee::skip($request->start)->take($request->length)->get();
		$output = array(
		"iTotalRecords" => $count,
		"iTotalDisplayRecords" => $count,
		"aaData" => $results
	);
		return response()->json($output);
	}
}