<?php require "views/users/functions/error.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Bravo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="auth-body">
    <!-- Simple top brand bar -->
    <nav class="navbar navbar-dark bg-transparent">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="../index.html">
                <span class="fw-bold text-primary">Bravo</span>
                <span class="badge bg-primary-subtle text-primary ms-2">Admin</span>
            </a>
        </div>
    </nav>

    <main class="auth-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 auth-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center me-2" style="width: 36px; height: 36px;">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                <div>
                                    <h1 class="h5 mb-0">Admin Console</h1>
                                    <small class="text-muted">Secure access</small>
                                </div>
                            </div>
                            <form action="views/users/functions/handleLogin.php" method="post">
                                <div class="mb-3">
                                    <label for="adminEmail" class="form-label">Email</label>
                                    <input name="adminEmail" type="email" class="form-control" id="adminEmail" placeholder="admin@bravo.com">
                                    <?php error("adminEmail") ?>
                                </div>
                                <div class="mb-3">
                                    <label for="adminPassword" class="form-label">Password</label>
                                    <input name="adminPassword" type="password" class="form-control" id="adminPassword" placeholder="Enter your password">
                                    <?php error("adminPassword") ?>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="adminRemember">
                                        <label class="form-check-label small" for="adminRemember">
                                            Remember this device
                                        </label>
                                    </div>
                                    <a href="#" class="small text-primary text-decoration-none">Need help?</a>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-2">Login to Dashboard</button>
                            </form>
                            <p class="text-muted small mb-0 text-center">
                                This admin login is a visual prototype only.
                            </p>
                        </div>
                    </div>
                    <p class="text-center text-muted small mt-3 mb-0">
                        Back to storefront?
                        <a href="../index.html" class="text-primary text-decoration-none">Go to Bravo</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>

<?php unset($_SESSION["errors"]) ?>
