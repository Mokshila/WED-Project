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
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Update Event</h2>
            <form action="{{url('/event/update')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$products->id}}">
                <div class="form-group mb-3">
                    <label for="code">Product Code</label>
                    <input type="text" name="code" value="{{$products->code}}" class="form-control" id="code" placeholder="Enter product code">
                </div>
                <div class="form-group mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" value="{{$products->name}}" class="form-control" id="name" placeholder="Enter product name">
                </div>
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select name="category" class="form-control" id="category">
                        <option @if($products->category=="Grocery") selected @endif value="Grocery">Grocery</option>
                        <option @if($products->category=="Vegetable") selected @endif value="Vegetable">Vegetable</option>
                        <option @if($products->category=="Fruit") selected @endif value="Fruit">Fruit</option>
                        <option @if($products->category=="Personal Care") selected @endif value="Personal Care">Personal Care</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity">Quantity In Stock</label>
                    <input type="text" name="quantity" value="{{$products->quantity}}" class="form-control" id="quantity">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price Pre Unit(Rs.)</label>
                    <input type="text" name="price" value="{{$products->price}}" class="form-control" id="price">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
