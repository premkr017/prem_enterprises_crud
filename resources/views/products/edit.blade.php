<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
        .page-section-title { font-weight: 800; font-size: 1.15rem; letter-spacing: 0.2px; margin-bottom: 1rem; padding-bottom: 0.65rem; border-bottom: 2px solid rgba(0,0,0,0.08); }
        .product-form .form-label { font-weight: 700; color: #374151; }
        .product-form .form-control, .product-form .form-select { border: 1.5px solid #d1d5db; border-radius: 12px; padding: 0.72rem 0.9rem; }
        .product-form .form-control:focus, .product-form .form-select:focus { box-shadow: 0 0 0 0.2rem rgba(17,24,39,0.08); border-color: #111827; }
        .product-btn { width: 100%; border: 0; border-radius: 12px; padding: 0.8rem 1rem; font-weight: 600; color: #fff; background: linear-gradient(135deg, #111827 0%, #374151 100%); }
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
