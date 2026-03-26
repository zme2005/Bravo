<?php
            require "functions/error.php";
            require "functions/connection.php";
            $id = $_GET["editUser"];
            $query = "SELECT * FROM admins WHERE `id` = $id";
            $run = mysqli_query($connection , $query);
            $user = mysqli_fetch_assoc($run);

            if($_SESSION["loggedInUser"]["role"] == "admin" && $user["role"] == "owner" || $_SESSION["loggedInUser"]["role"] == "user" && $user["role"] != "user" || $_SESSION["loggedInUser"]["role"] == "user" && $_SESSION["loggedInUser"]["id"] != $user["id"] || $_SESSION["loggedInUser"]["role"] == "admin" && $_SESSION["loggedInUser"]["id"] != $user["id"]) {
                $loggedInUserId = $_SESSION['loggedInUser']['id'];
                header("location: ?editUser=$loggedInUserId");
                exit();
            }

            ?>
            <main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Edit User Information</h1>
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
                        <form method="post" action="views/users/functions/update.php?updateUser=<?= $id ?>">
                            <div class="row g-3">


                            <!-- name -->
                                <div class="col-md-6">
                                    <label for="userName" class="form-label">Full Name</label>
                                    <input value="<?= $user['name'] ?>" name="name" type="text" class="form-control" id="userName" placeholder="Jane Cooper">
                                    <?php error('name'); ?>
                                </div>

                                <!-- email  -->
                                <div class="col-md-6">
                                    <label for="userEmail" class="form-label">Email</label>
                                    <input value="<?= $user['email'] ?>" name="email" type="email" class="form-control" id="userEmail" placeholder="jane.cooper@example.com">
                                    <?php error('email'); ?>
                                </div>


                                <!-- role  -->

                                <div class="col-md-4">
                                    <label for="userRole" class="form-label">Role</label>
                                    <select name="role" id="userRole" class="form-select">
                                        <option <?php if($user['role'] == 'user') echo "selected" ?> value="user">User</option>
                                        <?php if($_SESSION["loggedInUser"]["role"] != "user") { ?>
                                            <option <?php if($user['role'] == 'admin') echo "selected" ?> value="admin">Admin</option>
                                        <?php } ?>
                                        <?php if($_SESSION["loggedInUser"]["role"] == "owner") { ?>
                                            <option <?php if($user['role'] == 'owner') echo "selected" ?> value="owner">Owner</option>
                                        <?php } ?>
                                        
                                    </select>
                                    <?php error('role'); ?>
                                </div>


                                <!--  gender  -->
                                <div class="col-md-4">
                                    <label for="userStatus" class="form-label">Gender</label>
                                    <select name="gender" id="userStatus" class="form-select">
                                        <option <?php if($user['gander'] == 'male') echo "selected" ?> value="male">Male</option>
                                        <option <?php if($user['gander'] == 'female') echo "selected" ?> value="female">Female</option>
                                    </select>
                                    <?php error('gender'); ?>
                                </div>


                                <!-- phone -->
                                <div class="col-md-4">
                                    <label for="userPhone" class="form-label">Phone (optional)</label>
                                    <input value="<?= $user['phone'] ?>" name="phone" type="tel" class="form-control" id="userPhone" placeholder="+1 (000) 000-0000">
                                    <?php error('phone'); ?>
                                </div>


                                
                            <hr class="my-4">


                            <div class="d-flex justify-content-end gap-2">
                                <a href="?" class="btn btn-outline-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

            <?php if(isset($_SESSION["errors"])) unset($_SESSION["errors"]) ?>