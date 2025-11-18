@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-primary">📋 Product Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-inventory">
        ➕ Add New Category
    </a>
</div>

@if($categories->count() > 0)
    <div class="card shadow-sm">
        <div class="card-header card-header-custom">
            <h5 class="mb-0">📊 Category List ({{ $categories->count() }})</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover table-custom">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Products Count</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="fw-bold text-primary">{{ $category->id }}</td>
                        <td>
                            <span class="fw-bold">{{ $category->name }}</span>
                            @if($category->description)
                                <br><small class="text-muted">{{ Str::limit($category->description, 50) }}</small>
                            @endif
                        </td>
                        <td>
                            <span class="badge bg-primary rounded-pill">{{ $category->products_count }}</span>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">
                                    👁️ View
                                </a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this category?')">
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
@else
    <div class="card shadow-sm">
        <div class="card-body text-center py-5">
            <div class="text-muted mb-3">
                <i class="fas fa-folder-open fa-3x"></i>
            </div>
            <h4 class="text-muted">No categories found</h4>
            <p class="text-muted">Get started by creating your first product category</p>
            <a href="{{ route('categories.create') }}" class="btn btn-inventory btn-lg">
                ➕ Create First Category
            </a>
        </div>
    </div>
@endif
@endsection