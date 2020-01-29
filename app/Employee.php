<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
		public $timestamps = false;
    protected $table = "employees";
    protected $primaryKey = "emp_no";
    protected $fillable = ["emp_no", "first_name", "last_name", "birth_date", "gender", "hire_date"];
}
