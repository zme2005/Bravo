<?php

session_start();
require "admin/views/users/functions/error.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bravo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-body">
    <nav class="navbar navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.php">Bravo</a>
        </div>
    </nav>

    <main class="auth-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 auth-card">
                        <div class="card-body p-4">
                            <h1 class="h4 mb-1">Welcome back</h1>
                            <p class="text-muted small mb-4">Log in to continue shopping with Bravo.</p>
                            <form action="auth/handleLogin.php" method="post">
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="loginEmail" placeholder="you@example.com">
                                    <?php error("email") ?>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="loginPassword" class="form-label mb-0">Password</label>
                                        <a href="#" class="small text-primary text-decoration-none">Forgot?</a>
                                    </div>
                                    <input name="password" type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                                    <?php error("password") ?>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label small" for="rememberMe">Remember me on this device</label>
                                </div>
                                <button class="btn btn-primary w-100 mb-3">Login</button>
                            </form>
                            <p class="text-muted small mb-0 text-center">
                                Don’t have an account?
                                <a href="register.php" class="text-primary text-decoration-none">Create one</a>
                            </p>
                        </div>
                    </div>
                    <p class="text-center text-muted small mt-3 mb-0">
                        Looking for the admin panel?
                        <a href="admin/login.php" class="text-primary text-decoration-none">Admin Login</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


<?php unset($_SESSION["errors"]) ?>