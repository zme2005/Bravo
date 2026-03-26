            <?php
            require "functions/error.php";
            ?>
            <main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Create New User</h1>
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
                        <form method="post" action="views/users/functions/insert.php">
                            <div class="row g-3">


                            <!-- name -->
                                <div class="col-md-6">
                                    <label for="userName" class="form-label">Full Name</label>
                                    <input name="name" type="text" class="form-control" id="userName" placeholder="Jane Cooper">
                                    <?php error('name'); ?>
                                </div>

                                <!-- email  -->
                                <div class="col-md-6">
                                    <label for="userEmail" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="userEmail" placeholder="jane.cooper@example.com">
                                    <?php error('email'); ?>
                                </div>


                                <!-- role  -->

                                <div class="col-md-4">
                                    <label for="userRole" class="form-label">Role</label>
                                    <select name="role" id="userRole" class="form-select">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                        <option value="owner">Owner</option>
                                    </select>
                                    <?php error('role'); ?>
                                </div>


                                <!--  gender  -->
                                <div class="col-md-4">
                                    <label for="userStatus" class="form-label">Gender</label>
                                    <select name="gender" id="userStatus" class="form-select">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <?php error('gender'); ?>
                                </div>


                                <!-- phone -->
                                <div class="col-md-4">
                                    <label for="userPhone" class="form-label">Phone (optional)</label>
                                    <input name="phone" type="tel" class="form-control" id="userPhone" placeholder="+1 (000) 000-0000">
                                    <?php error('phone'); ?>
                                </div>


                                <!-- password  -->
                                <div class="col-md-6">
                                    <label class="form-label">Password</label>
                                    <div class="form-check">
                                        <input name="password" type="password" class="form-control" id="userPassword" placeholder="Create a password">
                                    </div>
                                    <?php error('password'); ?>
                                </div>


                                <!-- confirm -->
                                <div class="col-md-6">
                                    <label class="form-label">Confirm Password</label>
                                    <input name="confirmPassword" type="password" class="form-control" id="userPasswordConfirm" placeholder="Re-enter password">
                                </div>
                                <?php error('confirmPassword'); ?>
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