@extends('layouts.admin')
@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Manage Product</h2>
            <a href="{{url('/event/create')}}" class="btn btn-success mb-3">Add product</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Quantity In Stock</th>
                    <th>Price Per Unit(Rs.)</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>Rs.{{ number_format($product->price, 2) }}</td>
                    <td>
                        <a href="{{'/event/'.$product->id}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{'/event/delete/'.$product->id}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
