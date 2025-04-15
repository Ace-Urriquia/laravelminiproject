@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Employee</h2>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf @method('PUT')
        @include('employees.form')
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
