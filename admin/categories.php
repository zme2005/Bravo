<?php
if(!isset($_SESSION["loggedInUser"])) {
    header("location: login.php");
    exit();
}
include "layout/sidebar.php" ;
require "views/users/functions/error.php";
require "views/users/functions/connection.php";
$query = "SELECT * FROM cat";
$run = mysqli_query($connection , $query);
if($run) {
    $cat = mysqli_fetch_all($run , MYSQLI_ASSOC);
}

if(isset($_GET["editCat"])) {
    $catId = $_GET["editCat"];
    $query2 = "SELECT * FROM cat WHERE `id` = '$catId'";
    $run2 = mysqli_query($connection , $query2);
    if($run2) {
        $cat2 = mysqli_fetch_assoc($run2);
        $catTwoName = $cat2['name'];
    }
}
?>
<!-- name -->

        <div class="admin-main">
        <header class="admin-topbar d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-secondary admin-sidebar-toggle" type="button">
                    <i class="bi bi-layout-sidebar-inset"></i>
                </button>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted small d-none d-sm-inline">Categories Management</span>
                    <div class="user-pill d-flex align-items-center">
                        <span class="badge bg-primary-subtle text-primary me-2">BA</span>
                        <span>Admin User</span>
                    </div>
                </div>
            </header>

            <form action="<?= isset($cat2) ? "catFunctions/edit.php" : "catFunctions/add.php" ?>" method="post" class="d-flex flex-wrap justify-content-between align-items-center my-3 px-3">
            <div class="col-md-6">
                                    <label for="userName" class="form-label">Category Name</label>
                                    <input value="<?php if(isset($cat2)) echo $catTwoName ?>" name="catName" type="text" class="form-control" id="userName" placeholder="Category Name">
                                    <?php error("catName"); ?>
</div>

                               <?php if(isset($cat2)) { ?>
                                    <input type="hidden" name="editCatId" value="<?= $cat2["id"] ?>">
                                <?php } ?>

                            <div class="d-flex justify-content-end gap-2">
                                <?php if(isset($cat2)) { ?>
                                    <a href="?" class="btn btn btn-outline-secondary me-1">Cancel</a>
                                <?php } ?>
                                <button type="submit" class="btn btn-primary"> <?php if(isset($cat2)) echo "Edit"; else echo "Save" ?> </button>
                                
                            </div>
        </form>
        <hr>

            <main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Categories</h1>
                        <small class="text-muted">Manage how products are grouped in the storefront.</small>
                    </div>
                    
                </div>

                <div class="card admin-table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Category</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($cat as $key => $value) { ?>
                                    <tr>
                                        <td>
                                            <div class="fw-semibold small"><?= $value["name"] ?></div>
                                        </td>
                                        <td class="text-end">
                                            <a href="?editCat=<?= $value["id"] ?>" class="btn btn-sm btn-outline-secondary me-1">Edit</a>
                                            <?php include "catFunctions/modal.php" ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small d-flex justify-content-between">
                        <span>5 categories configured (static demo).</span>
                        <span class="text-muted">Hierarchy &amp; SEO controls placeholder.</span>
                    </div>
                </div>
            </main>
        </div>
    </div>



<?php
include "layout/footer.php" ;
if(isset($_SESSION["errors"])) {
    unset($_SESSION["errors"]);
}
?>
