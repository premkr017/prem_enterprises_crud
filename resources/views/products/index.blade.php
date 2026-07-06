<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="product-shell">
        <div class="container py-4">
            <div class="product-toolbar">
                <a href="{{ route('products.create') }}" class="btn btn-dark">Create Product</a>
            </div>

            <div class="card product-page-card">
                <div class="product-page-header">
                    <h1 class="product-page-title">All Products</h1>
                </div>

                <div class="card-body p-4">
                    <div class="page-section-title">Available Products</div>
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="https://via.placeholder.com/60" class="img-thumbnail" width="60" alt="Product image"></td>
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

