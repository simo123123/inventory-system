@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Product: {{ $product->name }}</h1>
    <div>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <p><strong>SKU:</strong> {{ $product->sku }}</p>
        <p><strong>Category:</strong> {{ $product->category->name }}</p>
        <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    </div>
    <div class="col-md-6">
        <strong>Description:</strong>
        <p>{{ $product->description ?? 'No description provided.' }}</p>
    </div>
</div>

<a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
@endsection