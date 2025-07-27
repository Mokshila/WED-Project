@extends('layouts.admin')
@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Employee Details</h2>
            <a href="{{url('/employee/create2')}}" class="btn btn-success mb-3">Add Details</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>ID</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->nic}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->position}}</td>
                    <td>{{$employee->num}}</td>
                    <td>{{$employee->email}}</td>
                    <td>
                        <a href="{{'$/employee/'.$employee->id}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{'$/employee/delete/'.$employee->id}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
