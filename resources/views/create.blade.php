@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Employee</h2>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        @include('employees.form')
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
