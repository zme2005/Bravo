<?php

session_start();
require "admin/views/users/functions/error.php";


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bravo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-body">
    <nav class="navbar navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.html">Bravo</a>
        </div>
    </nav>

    <main class="auth-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card shadow-sm border-0 auth-card">
                        <div class="card-body p-4">
                            <h1 class="h4 mb-1">Create your account</h1>
                            <p class="text-muted small mb-4">A simple registration form for demo purposes.</p>
                            <form action="auth/handleRegister.php" method="post">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="registerName" class="form-label">Full Name</label>
                                        <input name="name" type="text" class="form-control" id="registerName" placeholder="Jane Doe">
                                        <?php error('name'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label for="registerEmail" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" id="registerEmail" placeholder="you@example.com">
                                        <?php error('email'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label for="registerPassword" class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control" id="registerPassword" placeholder="Create a password">
                                        <?php error('password'); ?>
                                    </div>
                                    <div class="col-12">
                                        <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                                        <input name="confirmPassword" type="password" class="form-control" id="registerConfirmPassword" placeholder="Re-enter your password">
                                        <?php error('confirmPassword'); ?>
                                    </div>
                                </div>
                                <div class="my-2 w-100 d-flex justify-content-between">
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
                                    <?php error('phone'); unset($_SESSION["errors"]) ?>
                                </div>
                                </div>
                                <div class="form-check mt-3 mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="termsCheck">
                                    <label class="form-check-label small" for="termsCheck">
                                        I agree to Bravo's terms and privacy policy.
                                    </label>
                                </div>

                                
                                <button class="btn btn-primary w-100 mb-3">Register</button>
                            </form>
                            <p class="text-muted small mb-0 text-center">
                                Already have an account?
                                <a href="login.html" class="text-primary text-decoration-none">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


