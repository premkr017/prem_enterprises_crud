<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
            font-family: 'Segoe UI', sans-serif;
            color: #111827;
        }
        .product-shell { min-height: 100vh; padding: 2rem 1rem 3rem; }
        .container { max-width: 1100px; margin: 0 auto; }
        .product-toolbar { display: flex; justify-content: flex-end; margin-bottom: 1rem; }
        .product-toolbar .btn { border-radius: 999px; padding: 0.6rem 1rem; }
        .product-page-card { border: 0; border-radius: 24px; overflow: hidden; background: #fff; box-shadow: 0 18px 45px rgba(15, 23, 42, 0.12); }
        .product-page-header { background: linear-gradient(135deg, #111827 0%, #1f2937 100%); color: #fff; padding: 1.4rem 1.5rem; text-align: center; }
        .product-page-title { font-size: 1.45rem; font-weight: 700; margin: 0; }
        .product-page-subtitle { color: #6b7280; font-size: 0.95rem; margin-bottom: 1.2rem; }
        .page-section-title { font-weight: 800; font-size: 1.15rem; letter-spacing: 0.2px; margin-bottom: 1rem; padding-bottom: 0.65rem; border-bottom: 2px solid rgba(0,0,0,0.08); }
        .product-form .form-label { font-weight: 700; color: #374151; }
        .product-form .form-control, .product-form .form-select { border: 1.5px solid #d1d5db; border-radius: 12px; padding: 0.72rem 0.9rem; }
        .product-form .form-control:focus, .product-form .form-select:focus { box-shadow: 0 0 0 0.2rem rgba(17,24,39,0.08); border-color: #111827; }
        .product-btn { width: 100%; border: 0; border-radius: 12px; padding: 0.8rem 1rem; font-weight: 600; color: #fff; background: linear-gradient(135deg, #111827 0%, #374151 100%); }
        .product-table thead th { background: #111827; color: #fff; }
        .product-table tbody tr:hover { background: #f9fafb; }
        .product-table .badge { padding: 0.45rem 0.7rem; border-radius: 999px; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="product-shell">
        <div class="container py-4">
            <div class="product-toolbar">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back to Products</a>
            </div>

            <div class="card product-page-card">
                <div class="product-page-header">
                    <h1 class="product-page-title">Prem Enterprises CRUD</h1>
                </div>

                <div class="card-body p-4">
                    <div class="page-section-title">Create Product</div>
                    <div class="product-page-subtitle">Fill the details below and save the product.</div>

                    <form action="{{ route('products.store') }}" method="POST" class="product-form">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter Product Name">

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SKU</label>
                            <input
                                type="text"
                                name="sku"
                                class="form-control @error('sku') is-invalid @enderror"
                                placeholder="Enter Product SKU">

                            @error('sku')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input
                                type="text"
                                name="price"
                                class="form-control @error('price') is-invalid @enderror"
                                placeholder="Enter Product Price">

                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="mb-3 form-actions">
                            <button class="btn product-btn">
                                Create Product
                            </button>
                        </div>
                    </form>

                    <hr class="my-4">

                    <div class="page-section-title mt-3">Product List (Demo)</div>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle mb-0 product-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th width="180">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="https://via.placeholder.com/60" class="img-thumbnail" width="60" alt="Demo product">
                                    </td>
                                    <td>Demo Product</td>
                                    <td>SKU001</td>
                                    <td>₹100</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-dark">Edit</a>
                                        <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
