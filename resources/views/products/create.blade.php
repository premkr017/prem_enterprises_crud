<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
