<?php

require 'views/users/functions/connection.php';
$query = "SELECT * FROM products";
$run = mysqli_query($connection , $query);

if($run) {
    $products = mysqli_fetch_all($run , MYSQLI_ASSOC);
}


?>


<main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Products</h1>
                        <small class="text-muted">Static listing of products with mock actions.</small>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-sliders me-1"></i> Filters
                        </button>
                        <a href="?product=add" class="btn btn-primary btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add Product
                        </a>
                    </div>
                </div>

                <div class="card admin-table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Count</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($products as $k => $v) { 
                                    $catId = $v['cat_id'];
                                    $query2 = "SELECT * FROM cat WHERE `id` = '$catId'";
                                    $run2 = mysqli_query($connection , $query2);

                                    if($run2) {
                                        $catt = mysqli_fetch_assoc($run2);
                                    }

                                    $imgs = explode("-" , $v['img']);
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <?php foreach($imgs as $key => $val) { ?>
                                                <img src=<?= "images/$val" ?> alt="Laptop" class="rounded me-2" style="width: 44px; height: 44px; object-fit: cover;">
                                                <?php } ?>
                                                <div>
                                                    <div class="fw-semibold small"> <?= $v['name'] ?> </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td> <?= $catt['name'] ?> </td>
                                        <td> $<?= $v['price'] - ($v['price'] * ($v['sale'] / 100)) ?> </td>
                                        <td><span class="badge badge-soft-success"> <?= $v['count'] ?> </span></td>
                                        <td class="text-end">
                                            <a href="?editPro=<?= $v["id"] ?>" class="btn btn-sm btn-outline-secondary me-1">Edit</a>
                                            <a href="proFunctions/delete.php?delPro=<?= $v['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center small">
                        <span>Showing 5 of 128 products (static)</span>
                        <span class="text-muted">Pagination placeholder</span>
                    </div>
                </div>
        </main>
