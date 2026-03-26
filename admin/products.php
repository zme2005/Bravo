<?php
include "layout/sidebar.php" ;
if(!isset($_SESSION["loggedInUser"])) {
    header("location: login.php");
    exit();
}
?>

        <div class="admin-main">
            <header class="admin-topbar d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-secondary admin-sidebar-toggle" type="button">
                    <i class="bi bi-layout-sidebar-inset"></i>
                </button>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted small d-none d-sm-inline">Products Management</span>
                    <div class="user-pill d-flex align-items-center">
                        <span class="badge bg-primary-subtle text-primary me-2">BA</span>
                        <span>Admin User</span>
                    </div>
                </div>
            </header>

            <?php
            
                if(isset($_GET["product"]) && $_GET["product"] == "add") {
                    include "views/products/add.php";
                }elseif(isset($_GET["editPro"])) {
                    include "views/products/edit.php";
                } else {
                    include "views/products/view.php";
                }
             
            ?>
            
        </div>
    </div>


<?php
include "layout/footer.php" ;
?>
