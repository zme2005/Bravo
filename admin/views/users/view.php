<?php

 require "functions/connection.php"; 
 $query = 'SELECT * FROM `admins`';
 $run = mysqli_query($connection , $query);
 $users = mysqli_fetch_all($run , MYSQLI_ASSOC);

 ?>
 
 <main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Users</h1>
                        <small class="text-muted">Overview of customers and team members.</small>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-search me-1"></i> Search
                        </button>
                        <a href="?user=add" class="btn btn-primary btn-sm">
                            <i class="bi bi-person-plus me-1"></i> Add User
                        </a>
                    </div>
                </div>

                <div class="card admin-table-card mb-3">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $key => $value) { ?>
                                    <tr>
                                        <td>
                                            <div class="fw-semibold small"><?= $value["name"] ?></div>
                                        </td>
                                        <td><?= $value["email"] ?></td>
                                        <td><span class="badge badge-soft-primary"><?= $value["role"] ?></span></td>
                                        <td><span class="badge badge-soft-success"><?= $value["gander"] ?></span></td>
                                        <td><span class="badge badge-soft-success"><?= $value["phone"] ?></span></td>
                                        <?php 
                                        if($_SESSION["loggedInUser"]["role"] == "owner" || ($value["role"] == "user" && $_SESSION["loggedInUser"]["role"] != "user") || $_SESSION["loggedInUser"]["id"] == $value["id"]) { ?>
                                            <td class="text-end">
                                            <a href="?editUser=<?= $value["id"] ?>" class="btn btn-sm btn-outline-secondary me-1">Edit</a>
                                            <?php include 'functions/modal.php' ?>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small d-flex justify-content-between">
                        <span>5 of 2,430 users displayed (static subset).</span>
                        <span class="text-muted">Role &amp; permission details placeholder.</span>
                    </div>
                </div>
            </main>
