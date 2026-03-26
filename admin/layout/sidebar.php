<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management - Bravo Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin-body">
    <div class="admin-layout">
        <aside class="admin-sidebar">
            <div class="admin-sidebar-header d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <span class="text-primary fw-bold brand-text">Bravo</span>
                    <span class="badge bg-primary-subtle text-primary ms-2 brand-text"><?= $_SESSION["loggedInUser"]["name"] ?></span>
                </div>
            </div>
            <ul class="admin-menu">
                <li>
                    <a href="dashboard.php">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="products.php">
                        <i class="bi bi-box-seam"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li>
                    <a href="categories.php">
                        <i class="bi bi-grid"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li>
                    <a href="orders.php">
                        <i class="bi bi-receipt"></i>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="messages.php">
                        <i class="bi bi-receipt"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="users.php" >
                        <i class="bi bi-people"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="views/users/functions/logout.php">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
            <div class="admin-sidebar-footer">
                <span>User roles &amp; status are static examples.</span>
            </div>
        </aside>