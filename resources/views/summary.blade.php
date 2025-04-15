@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Employee Summary</h2>

    <ul class="list-group mb-3">
        <li class="list-group-item"> Male Employees: <strong>{{ $maleCount }}</strong></li>
        <li class="list-group-item"> Female Employees: <strong>{{ $femaleCount }}</strong></li>
        <li class="list-group-item"> Average Age: <strong>{{ number_format($averageAge, 1) }}</strong> years</li>
        <li class="list-group-item"> Total Monthly Salary: <strong>₱{{ number_format($totalSalary, 2) }}</strong></li>
    </ul>

    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to Employee List</a>
</div>
@endsection
