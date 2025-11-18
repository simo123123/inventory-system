@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-sm">
            <div class="card-header card-header-custom">
                <h4 class="mb-0">📦 Add New Product</h4>
            </div>
            <div class="card-body">
                @if($categories->count() > 0)
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sku" class="form-label fw-bold">SKU Code</label>
                                    <input type="text" class="form-control" id="sku" name="sku" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label fw-bold">Category</label>
                                    <select class="form-control" id="category_id" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="price" class="form-label fw-bold">Price ($)</label>
                                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="quantity" class="form-label fw-bold">Quantity</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('products.index') }}" class="btn btn-secondary me-md-2">
                                ↩️ Cancel
                            </a>
                            <button type="submit" class="btn btn-success-custom">
                                📦 Create Product
                            </button>
                        </div>
                    </form>
                @else
                    <div class="alert alert-warning text-center">
                        <h4>📋 No Categories Found!</h4>
                        <p>You need to create categories first before adding products.</p>
                        <a href="{{ route('categories.create') }}" class="btn btn-inventory">
                            ➕ Create First Category
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection