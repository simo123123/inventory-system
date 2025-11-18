@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-primary">🏷️ Products Inventory</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success-custom">
        📦 Add New Product
    </a>
</div>

@if($products->count() > 0)
    <div class="card shadow-sm">
        <div class="card-header card-header-custom">
            <h5 class="mb-0">📊 Product List ({{ $products->count() }})</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover table-custom">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="fw-bold text-primary">{{ $product->id }}</td>
                        <td>
                            <span class="fw-bold">{{ $product->name }}</span>
                            <br><small class="text-muted">SKU: {{ $product->sku }}</small>
                        </td>
                        <td>
                            <span class="badge bg-info text-dark">{{ $product->category->name }}</span>
                        </td>
                        <td class="fw-bold text-success">${{ number_format($product->price, 2) }}</td>
                        <td>
                            @if($product->quantity > 20)
                                <span class="badge bg-success">{{ $product->quantity }} in stock</span>
                            @elseif($product->quantity > 0)
                                <span class="badge bg-warning text-dark">Low: {{ $product->quantity }}</span>
                            @else
                                <span class="badge bg-danger">Out of stock</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">
                                    👁️ View
                                </a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?')">
                                        🗑️ Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <h4>{{ $products->count() }}</h4>
                    <p class="mb-0">Total Products</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <h4>${{ number_format($products->sum('price'), 2) }}</h4>
                    <p class="mb-0">Total Value</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-dark">
                <div class="card-body text-center">
                    <h4>{{ $products->sum('quantity') }}</h4>
                    <p class="mb-0">Total Stock</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body text-center">
                    <h4>{{ $products->unique('category_id')->count() }}</h4>
                    <p class="mb-0">Categories</p>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="card shadow-sm">
        <div class="card-body text-center py-5">
            <div class="text-muted mb-3">
                <i class="fas fa-boxes fa-3x"></i>
            </div>
            <h4 class="text-muted">No products found</h4>
            <p class="text-muted">Start building your inventory by adding products</p>
            <a href="{{ route('products.create') }}" class="btn btn-success-custom btn-lg">
                📦 Add First Product
            </a>
        </div>
    </div>
@endif
@endsection