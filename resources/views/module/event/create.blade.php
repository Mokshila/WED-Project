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
            <h2 class="card-title">Add Product</h2>
            <form  action="{{url('/event/create')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="code">Product Code</label>
                    <input type="text" name="code" class="form-control" id="code" placeholder="Enter product code">
                </div>
                <div class="form-group mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name">
                </div>
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select name="category" class="form-control" id="category">
                        <option>Grocery</option>
                        <option>Vegetable</option>
                        <option>Fruit</option>
                        <option>Personal Care</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity">Stock</label>
                    <input type="text" name="quantity" class="form-control" id="quantity" >
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price Per Unit</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
