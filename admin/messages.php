<?php

include "layout/sidebar.php" ;
if(!isset($_SESSION["loggedInUser"])) {
    header("location: login.php");
    exit();
}


require "views/users/functions/connection.php";
$query = "SELECT * FROM `messages` ORDER BY `id` DESC";
$run = mysqli_query($connection , $query);

if($run) {
    $messages = mysqli_fetch_all($run , MYSQLI_ASSOC);
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

            <main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Messages</h1>
                        <small class="text-muted">Track messages and statuses.</small>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">
                        <a href="?" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-funnel me-1"></i> All messages
                        </a>
                        <a href="?allUnread=1" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-download me-1"></i> All unread messages
                        </a>
                    </div>
                </div>

                <div class="card admin-table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Sender</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($messages as $k => $v) { 
                                    if(isset($_GET["email"]) && $v["email"] != $_GET["email"]) {
                                        continue;
                                    } elseif(isset($_GET["allUnread"]) && $v["viewed"] == 1) {
                                        continue;
                                    }
                                    ?>
                                    <tr>
                                        <td> <?= ++$k ?> </td>
                                        <td> <?= $v["name"] ?> </td>
                                        <td> <a href="?email=<?= $v['email'] ?>"> <?= $v["email"] ?> </a> </td>
                                        <td><span class="badge badge-soft-success"> <?= $v["phone"] ?> </span></td>
                                        <td class="ts"><span class="badge badge-soft-<?= ($v["viewed"]) == 0 ? "success" : "primary" ?>"> <?= ($v["viewed"]) == 0 ? "unread" : "read" ?> </span></td>
                                        <td class="text-end">
                                        
                                        <!-- Button trigger modal -->
<button type="button" msg="<?= $v["id"] ?>" class="btn btn-sm btn-outline-secondary me-1 view-btn" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $v["id"] ?>">
  view
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $v["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Message from: <span class="text-primary"> <?= $v["name"] ?> </span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= $v["message"] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                                            <a href="../contactFunctions/delete.php?msgId=<?= $v["id"] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small d-flex justify-content-between">
                        <span>5 recent orders from a static dataset.</span>
                        <span class="text-muted">Pagination &amp; filters are UI only.</span>
                    </div>
                </div>
            </main>

            </div>
            </div>







<?php
include "layout/footer.php" ;
?>
