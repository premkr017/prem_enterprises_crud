<div class="bg-dark text-center text-white p-3">
    <h1 class="h2 bg-dark text-center text-white p-3">
        Laravel 12 Prem Enterprises CRUD Application
    </h1>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-end p-e mt-3">
            <a href="" class="btn btn-dark">Create</a>
        </div>
        <div class="card">
            <div class="header bg-dark text-center text-white p-3">
                <!-- <h1 class="h2 bg-dark text-center text-white p-3"> -->
                <!-- Products -->
                </h1>

            </div>
            <div class="card-body shadow-lg">
                <div class="class">
                    <form action="{{ route('products.store') }}" method="post">
                        <div class="mb3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name">

                        </div>
                        <div class="mb3">
                            <label for="sku" class="form-label">SKU</label>
                            <input type="text" name="sku" id="sku" class="form-control" placeholder="Enter product SKU">
                        </div>
                        <div class="mb3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Enter product price">
                        </div>
                        <div class="mb3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="mb3">
                            <button type="submit" class="btn btn-dark">Create Product</button>
                        </div>

                    </form>
                </div>
                <!-- <h5 class="card-title">Product Title</h5>
                <p class="card-text">Product description goes here.</p> -->
                <table class="table table-striped">
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
        <tbody>     <tr>
                <td>1</t>
                <td></td>
                <td>dd</td>
                <td>SKUddd</td>
                <td>$100</td>
                <td>active</td>
                <td>Actions</td>
            </tr>
        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

