<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%) !important;
        }
        .btn-inventory {
            background: linear-gradient(135deg, #1e88e5 0%, #0d47a1 100%);
            border: none;
            color: white;
        }
        .btn-inventory:hover {
            background: linear-gradient(135deg, #1565c0 0%, #0d47a1 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .btn-success-custom {
            background: linear-gradient(135deg, #00bcd4 0%, #00838f 100%);
            border: none;
            color: white;
        }
        .btn-success-custom:hover {
            background: linear-gradient(135deg, #00acc1 0%, #00838f 100%);
            transform: translateY(-2px);
        }
        .table-custom th {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
        }
        .card-header-custom {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            border-bottom: 2px solid #90caf9;
        }
        .jumbotron-custom {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-left: 5px solid #3498db;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                📦 Inventory System
            </a>
            <div class="navbar-nav">
                <a class="nav-link" href="/categories">📋 Categories</a>
                <a class="nav-link" href="/products">🏷️ Products</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                ✅ {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        @yield('content')
    </div>

    <footer class="bg-light mt-5 py-4">
        <div class="container text-center text-muted">
            <p class="mb-0">Inventory Management System &copy; 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>