<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create() {
        return view('employees.create');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'birthday' => 'required|date',
            'monthly_salary' => 'required|numeric',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee added!');
    }

    public function edit(Employee $employee) {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'birthday' => 'required|date',
            'monthly_salary' => 'required|numeric',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated!');
    }

    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted!');
    }

    public function summary() {
        $employees = Employee::all();
        $maleCount = $employees->where('gender', 'Male')->count();
        $femaleCount = $employees->where('gender', 'Female')->count();
        $averageAge = $employees->avg(function($e) {
            return Carbon::parse($e->birthday)->age;
        });
        $totalSalary = $employees->sum('monthly_salary');

        return view('employees.summary', compact('maleCount', 'femaleCount', 'averageAge', 'totalSalary'));
    }
}

?>