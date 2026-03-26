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
                    <span class="text-muted small d-none d-sm-inline">Orders Management</span>
                    <div class="user-pill d-flex align-items-center">
                        <span class="badge bg-primary-subtle text-primary me-2">BA</span>
                        <span>Admin User</span>
                    </div>
                </div>
            </header>

            <main class="admin-content">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <div>
                        <h1 class="h5 mb-1">Orders</h1>
                        <small class="text-muted">Track static sample orders and statuses.</small>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-funnel me-1"></i> Filter
                        </button>
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-download me-1"></i> Export
                        </button>
                    </div>
                </div>

                <div class="card admin-table-card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Order Status</th>
                                        <th scope="col">Placed</th>
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
                                        <td>02 Feb 2026</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1">View</button>
                                            <button class="btn btn-sm btn-outline-danger">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1023</td>
                                        <td>Leslie Alexander</td>
                                        <td>$129.00</td>
                                        <td><span class="badge badge-soft-warning">Pending</span></td>
                                        <td><span class="badge badge-soft-warning">Processing</span></td>
                                        <td>01 Feb 2026</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1">View</button>
                                            <button class="btn btn-sm btn-outline-danger">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1022</td>
                                        <td>Robert Fox</td>
                                        <td>$579.00</td>
                                        <td><span class="badge badge-soft-success">Paid</span></td>
                                        <td><span class="badge badge-soft-success">Completed</span></td>
                                        <td>31 Jan 2026</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1">View</button>
                                            <button class="btn btn-sm btn-outline-danger">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1021</td>
                                        <td>Annette Black</td>
                                        <td>$89.00</td>
                                        <td><span class="badge badge-soft-danger">Failed</span></td>
                                        <td><span class="badge badge-soft-danger">Cancelled</span></td>
                                        <td>30 Jan 2026</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1">View</button>
                                            <button class="btn btn-sm btn-outline-danger">Cancel</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#BR-1020</td>
                                        <td>Jacob Jones</td>
                                        <td>$219.00</td>
                                        <td><span class="badge badge-soft-success">Paid</span></td>
                                        <td><span class="badge badge-soft-warning">Shipping</span></td>
                                        <td>29 Jan 2026</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1">View</button>
                                            <button class="btn btn-sm btn-outline-danger">Cancel</button>
                                        </td>
                                    </tr>
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
