<div class="bg-dark text-center text-white p-3">
    <h1 class="h2 mb-0">
        Laravel 12 Prem Enterprises CRUD Application
    </h1>
</div>

<div class="container mt-4">

    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-dark">Create</a>
    </div>

    <div class="card shadow">

        <div class="card-header bg-dark text-white text-center">
            <h4 class="mb-0">Products</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('products.store') }}" method="POST">
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

                <div class="mb-3">
                    <button class="btn btn-dark">
                        Create Product
                    </button>
                </div>

            </form>

            <hr>

            <table class="table table-bordered table-striped text-center align-middle">

                <thead class="table-dark">
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
                            <img src="https://via.placeholder.com/60"
                                class="img-thumbnail"
                                width="60">
                        </td>
                        <td>Demo Product</td>
                        <td>SKU001</td>
                        <td>₹100</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">
                                Edit
                            </a>

                            <a href="#" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>