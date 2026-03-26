<?php
include "layout/sidebar.php" ;
if(!isset($_SESSION["loggedInUser"])) {
    header("location: login.php");
    exit();
}
?>

        <!-- Main area -->
        <div class="admin-main">
            <header class="admin-topbar d-flex justify-content-between align-items-center">
                <button class="btn btn-sm btn-outline-secondary admin-sidebar-toggle" type="button">
                    <i class="bi bi-layout-sidebar-inset"></i>
                </button>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted small d-none d-sm-inline">Static Bravo Admin Dashboard</span>
                    <div class="user-pill d-flex align-items-center">
                        <span class="badge bg-primary-subtle text-primary me-2">BA</span>
                        <span>Admin User</span>
                    </div>
                </div>
            </header>

            <main class="admin-content">
                <!-- Stats row -->
                <div class="row g-3 mb-4">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted small">Total Products</span>
                                    <span class="badge badge-soft-primary">Catalog</span>
                                </div>
                                <h3 class="h4 mb-1">128</h3>
                                <small class="text-success"><i class="bi bi-arrow-up-right me-1"></i>+8 this month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted small">Total Users</span>
                                    <span class="badge badge-soft-success">Customers</span>
                                </div>
                                <h3 class="h4 mb-1">2,430</h3>
                                <small class="text-success"><i class="bi bi-arrow-up-right me-1"></i>+120 this month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted small">Total Orders</span>
                                    <span class="badge badge-soft-warning">Sales</span>
                                </div>
                                <h3 class="h4 mb-1">864</h3>
                                <small class="text-muted"><i class="bi bi-arrow-right me-1"></i>Stable volume</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="card stat-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted small">Revenue</span>
                                    <span class="badge badge-soft-success">USD</span>
                                </div>
                                <h3 class="h4 mb-1">$124,580</h3>
                                <small class="text-success"><i class="bi bi-arrow-up-right me-1"></i>+12.4% vs last month</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts row -->
                <div class="row g-3 mb-4">
                    <div class="col-12 col-xl-8">
                        <div class="card chart-placeholder h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h2 class="h6 mb-0">Revenue Overview</h2>
                                    <span class="badge bg-light text-muted">Chart Placeholder</span>
                                </div>
                                <p class="text-muted small mb-0">
                                    This area represents where a revenue line chart would appear in a live dashboard.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card chart-placeholder h-100">
                            <div class="card-body">
                                <h2 class="h6 mb-2">Orders by Status</h2>
                                <p class="text-muted small mb-3">
                                    Visual placeholder for a donut or bar chart.
                                </p>
                                <ul class="list-unstyled small mb-0">
                                    <li class="d-flex justify-content-between mb-1">
                                        <span><span class="badge bg-success me-1">&nbsp;</span>Completed</span>
                                        <span class="fw-semibold">642</span>
                                    </li>
                                    <li class="d-flex justify-content-between mb-1">
                                        <span><span class="badge bg-warning me-1">&nbsp;</span>Pending</span>
                                        <span class="fw-semibold">138</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span><span class="badge bg-danger me-1">&nbsp;</span>Cancelled</span>
                                        <span class="fw-semibold">84</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent orders table -->
                <div class="card admin-table-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="h6 mb-0">Recent Orders</h2>
                            <small class="text-muted">Static sample orders &mdash; for layout only</small>
                        </div>
                        <a href="orders.html" class="btn btn-sm btn-outline-primary">View all</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#BR-1024</td>
                                        <td>Jane Cooper</td>
                                        <td>$349.00</td>
                                        <td><span class="badge badge-soft-success">Paid</span></td>
                                        <td><span class="badge badge-soft-success">Completed</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1023</td>
                                        <td>Leslie Alexander</td>
                                        <td>$129.00</td>
                                        <td><span class="badge badge-soft-warning">Pending</span></td>
                                        <td><span class="badge badge-soft-warning">Processing</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1022</td>
                                        <td>Robert Fox</td>
                                        <td>$579.00</td>
                                        <td><span class="badge badge-soft-success">Paid</span></td>
                                        <td><span class="badge badge-soft-success">Completed</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1021</td>
                                        <td>Annette Black</td>
                                        <td>$89.00</td>
                                        <td><span class="badge badge-soft-danger">Failed</span></td>
                                        <td><span class="badge badge-soft-danger">Cancelled</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1020</td>
                                        <td>Jacob Jones</td>
                                        <td>$219.00</td>
                                        <td><span class="badge badge-soft-success">Paid</span></td>
                                        <td><span class="badge badge-soft-warning">Shipping</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>




<?php
include "layout/footer.php" ;
?>