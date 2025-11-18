@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-custom rounded p-5 mb-5">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1 class="display-4 text-primary">📦 Inventory Management System</h1>
            <p class="lead">Efficiently manage your products, categories, and stock levels with our intuitive inventory system.</p>
            <hr class="my-4">
            <p>Track inventory, manage categories, and monitor stock levels in real-time.</p>
            <div class="mt-4">
                <a class="btn btn-inventory btn-lg me-3" href="/categories">
                    📋 Manage Categories
                </a>
                <a class="btn btn-success-custom btn-lg" href="/products">
                    🏷️ Manage Products
                </a>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div style="font-size: 8rem;">📊</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <div style="font-size: 3rem;">📋</div>
                <h5 class="card-title">Category Management</h5>
                <p class="card-text">Organize your products into categories for better inventory management.</p>
                <a href="/categories" class="btn btn-outline-primary">View Categories</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <div style="font-size: 3rem;">🏷️</div>
                <h5 class="card-title">Product Inventory</h5>
                <p class="card-text">Manage product details, prices, and stock quantities efficiently.</p>
                <a href="/products" class="btn btn-outline-success">View Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <div style="font-size: 3rem;">📊</div>
                <h5 class="card-title">Stock Monitoring</h5>
                <p class="card-text">Track inventory levels and get alerts for low stock items.</p>
                <a href="/products" class="btn btn-outline-info">Check Stock</a>
            </div>
        </div>
    </div>
</div>
@endsection