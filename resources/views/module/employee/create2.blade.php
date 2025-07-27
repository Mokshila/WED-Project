@extends('layouts.admin')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Whoops!</strong>There are some issues with your inputs.
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Add Employee</h2>
            <form action="{{url('/employee/create2')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Employee Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group mb-3">
                    <label for="nic">Employee ID</label>
                    <input type="text" name="nic" class="form-control" id="nic" placeholder="Enter ID">
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter ID">
                </div>
                <div class="form-group mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="position">Position</label>
                    <select class="form-control" name="position" id="position">
                        <option>Manager</option>
                        <option>Cashier</option>
                        <option>Stocker</option>
                        <option>Cleaner</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="num">Contact Number</label>
                    <input type="text" class="form-control" name="num" id="num" >
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
