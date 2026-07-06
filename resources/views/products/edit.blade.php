<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
                    <h1 class="product-page-title">Edit Product</h1>
                </div>

                <div class="card-body p-4">
                    <div class="page-section-title">Update Product Details</div>
                    <form action="#" method="POST" class="product-form">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="Demo Product">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SKU</label>
                            <input type="text" name="sku" class="form-control" value="SKU001">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" value="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-actions">
                            <button class="btn product-btn">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
