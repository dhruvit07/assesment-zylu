<?php

namespace App\Http\Controllers\Front;

use App\Models\Employee;
use App\Models\WorkDepartment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;


class EmployeeController extends Controller
{
    function index()
    {
        $dt  = Carbon::now();
        $date = date($dt);
        $employees = Employee::all();
        return view('index', compact('employees', 'date'));
    }
}
