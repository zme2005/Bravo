<?php
            
            require 'views/users/functions/connection.php';
            require 'views/users/functions/error.php';
            $query = 'SELECT * FROM cat';
            $run = mysqli_query($connection , $query);

            if($run) {
                $cats = mysqli_fetch_all($run , MYSQLI_ASSOC);
            }

            $id = $_GET["editPro"];
            $query2 = "SELECT * FROM products WHERE `id` = '$id'";
            $run2 = mysqli_query($connection , $query2);

            if($run2) {
                $pro = mysqli_fetch_assoc($run2);
            }
            ?>
            
            
            <main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Create New Product</h1>
                        <small class="text-muted">Static form to demonstrate how a user creation flow would look.</small>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-arrow-counterclockwise me-1"></i> Reset (UI)
                        </button>
                    </div>
                </div>

                <div class="card admin-table-card">
                    <div class="card-body">
                        <form action="proFunctions/update.php?proId=<?= $id ?>" method="post" enctype="multipart/form-data">
                            <div class="row g-3">


                            <!-- name -->
                                <div class="col-md-6">
                                    <label for="userName" class="form-label">Product Name</label>
                                    <input value="<?= $pro["name"] ?>" name="name" type="text" class="form-control" id="userName" placeholder="Product Name">
                                    <?php error('name') ?>
                                </div>

                                <!-- price  -->
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Product Price</label>
                                    <input value="<?= $pro["price"] ?>" name="price" type="number" class="form-control" id="price" placeholder="Product Price">
                                    <?php error('price') ?>
                                </div>



                                                                <!-- Sale  -->
                                <div class="col-md-6">
                                    <label for="Sale" class="form-label">Product Sale</label>
                                    <input value="<?= $pro["sale"] ?>" name="sale" type="number" class="form-control" id="Sale" placeholder="Product Sale">
                                    <?php error('sale') ?>
                                </div>



                                                                <!-- Count  -->
                                <div class="col-md-6">
                                    <label for="Count" class="form-label">Product Count</label>
                                    <input value="<?= $pro["count"] ?>" name="count" type="number" class="form-control" id="Count" placeholder="Product Count">
                                    <?php error('count') ?>
                                </div>




                                <!-- category  -->

                                <div class="col-md-4">
                                    <label for="userRole" class="form-label">Category</label>
                                    <select name="proCat" id="userRole" class="form-select">
                                    <?php foreach($cats as $k => $v) { ?>
                                        <option <?php if($v["id"] == $pro["cat_id"]) echo "selected" ?> value="<?= $v['id'] ?>"> <?= $v['name'] ?> </option>
                                    <?php } ?>
                                    </select>
                                    <?php error('proCat') ?>
                                </div>


                                <!-- image(s) -->
                                <div class="col-md-4">
                                    <label for="image" class="form-label">Image (Images)</label>
                                    <input name="img[]" multiple type="file" class="form-control" id="image" >
                                    <?php error('img') ?>
                                </div>
                            
                            </div>
                            <hr class="my-4">


                            <div class="d-flex justify-content-end gap-2">
                                <a href="?" type="button" class="btn btn-outline-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            
            <?php unset($_SESSION['errors']) ?>
