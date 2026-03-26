<?php

session_start();
require 'admin/views/users/functions/connection.php';

if(isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}

$realOffset = $offset * 4;

$query = "SELECT * FROM products LIMIT 4 OFFSET $realOffset";
$run = mysqli_query($connection , $query);

if($run) {
    $products = mysqli_fetch_all($run , MYSQLI_ASSOC);
    $numRows = mysqli_num_rows($run);
}

if(isset($_SESSION["loggedUser"])) {
    $userId = $_SESSION["loggedUser"]["id"];
    $query_cart = "SELECT * FROM `cart` WHERE `user_id` = '$userId'";
    $run_cart = mysqli_query($connection , $query_cart);

    if($run_cart) {
        $prosIds = mysqli_fetch_all($run_cart , MYSQLI_ASSOC);
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bravo - Modern E-Commerce</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top bravo-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.html">Bravo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                    <li class="nav-item dropdown ms-lg-3 me-lg-2">
    <a class="nav-link position-relative dropdown-toggle" href="#" id="cartDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-cart3 fs-5"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            3
        </span>
    </a>
    <?php if(isset($_SESSION["loggedUser"])) { ?>
    <ul class="dropdown-menu dropdown-menu-end p-2" style="width: 320px;" aria-labelledby="cartDropdown">
    <?php foreach($prosIds as $val) {
        $valId = $val["product_id"]; 
        $query_pro = "SELECT * From `products` WHERE `id` = '$valId'";
        $run_pro = mysqli_query($connection , $query_pro);

        if($run_pro) {
            $pro_data = mysqli_fetch_assoc($run_pro);
        }
        $img_arr = explode("-" , $pro_data["img"]);
        ?>
        <!-- Product -->
        <li class="d-flex align-items-center">
            <img src="admin/images/<?= $img_arr[0] ?>" class="rounded" width="75" height="50">

            <div class="ms-2 flex-grow-1">
                <h6 class="mb-0"> <?= $pro_data["name"] ?> </h6>
                <p style="color: green;">$<?= $pro_data["price"] ?></p>
            </div>

        </li>
    <?php } ?>
    </ul>
    <?php } ?>
</li>
                    
                    <li class="nav-item">
                    <?php if(!isset($_SESSION["loggedUser"])) { ?>
                        <a href="login.php" class="btn btn-outline-primary ms-lg-2">Login</a>
                    <?php } else { ?>
                        <span>Welcome, <span class="text-primary"> <?= $_SESSION["loggedUser"]["name"] ?> </span> </span>
                        <a href="auth/logout.php" class="btn btn-outline-danger ms-lg-2">Logout</a>
                    <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Shop Smart. Shop <span class="text-primary">Bravo</span>.</h1>
                    <p class="lead text-muted mb-4">
                        Discover a curated selection of premium electronics, fashion, and lifestyle products in a clean, professional shopping experience.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="products.html" class="btn btn-primary btn-lg px-4">Shop Now</a>
                        <a href="categories.html" class="btn btn-outline-primary btn-lg px-4">Explore Categories</a>
                    </div>
                    <div class="mt-4 d-flex flex-wrap gap-4 hero-stats">
                        <div>
                            <h4 class="fw-bold mb-0">2K+</h4>
                            <small class="text-muted">Premium Products</small>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0">4.9/5</h4>
                            <small class="text-muted">Customer Rating</small>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-0">24/7</h4>
                            <small class="text-muted">Support</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="hero-image-wrapper">
                        <img src="https://images.pexels.com/photos/3945668/pexels-photo-3945668.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Shopping Online" class="img-fluid rounded-4 shadow-lg hero-main-img">
                        <div class="hero-floating-card card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="https://images.pexels.com/photos/404280/pexels-photo-404280.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Headphones" class="rounded me-3 hero-product-thumb">
                                    <div>
                                        <h6 class="mb-1">Wireless Headphones</h6>
                                        <small class="text-muted">Starting at $89.00</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-badge card shadow-sm">
                            <div class="card-body py-2 px-3">
                                <small class="text-muted d-block">Secure Checkout</small>
                                <span class="fw-semibold text-success"><i class="bi bi-shield-lock me-1"></i>SSL Encrypted</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="h3 mb-1">Featured Products</h2>
                    <p class="text-muted mb-0">Handpicked products for a premium shopping experience.</p>
                </div>
                <a href="products.html" class="btn btn-outline-primary btn-sm">View All Products</a>
            </div>
            <div class="row g-4">
            <?php foreach($products as $k => $v) { 
                $arrOfImgs = explode("-" , $v['img']);
                $catId = $v['cat_id'];
                $catQuery = "SELECT * FROM cat WHERE `id` = '$catId'";
                $catRun = mysqli_query($connection , $catQuery);
                if($catRun) {
                    $cat = mysqli_fetch_assoc($catRun);
                }
                ?>
                <!-- Product Card -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card product-card h-100">
                        <div class="ratio ratio-4x3">
                            <img src="admin/images/<?= $arrOfImgs[0] ?>" class="card-img-top" alt="Premium Laptop">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"> <?= $v['name'] ?> </h5>
                            <p class="card-text text-muted mb-2"> <?= $cat["name"] ?> </p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-bold text-primary">$ <?= $v['price'] - ($v['price'] * ($v['sale'] / 100)) ?></span>
                                <span class="badge bg-success-subtle text-success border border-success-subtle">In Stock</span>
                            </div>
                            <a href="product-details.php" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            <?php if(isset($_SESSION["loggedUser"])) { ?>
                            <button proId="<?= $v["id"] ?>" class="btn btn-outline-primary w-100 mt-2 addCart">Add To Cart</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>

            <!-- pagination -->
            <nav class="mt-4" aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?php if($offset == 0) echo "disabled" ?>"><a href="index.php?offset=<?= $offset - 1 ?>" class="page-link">Previous</a></li>
                        <?php for($i = $offset; $i < $offset + 3; $i++) { if($i != 0 && $i < $numRows) { ?>
                        <li class="page-item"><a href="index.php?offset=<?= $i - 1 ?>" class="page-link <?php if($offset == $i - 1) echo "active" ?>"> <?= $i ?> </a></li>
                        <?php }} ?>
                        <li class="page-itemitem <?php if($offset == $numRows - 2) echo "disabled" ?>"><a href="index.php?offset=<?= $offset + 1 ?>" class="page-link">Next</a></li>
                    </ul>
                </nav>
        </div>
    </section>

    <!-- Promotional Banner -->
    <section class="py-5 promo-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <h2 class="h3 text-white mb-2">Upgrade Your Workspace</h2>
                    <p class="text-white-50 mb-0">
                        Save up to 30% on premium laptops, monitors, and accessories curated for productivity and comfort.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <span class="badge bg-light text-primary fw-semibold mb-2">Limited Time Offer</span>
                    <div>
                        <a href="products.html" class="btn btn-light me-2">Browse Deals</a>
                        <a href="contact.html" class="btn btn-outline-light">Talk to Specialist</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="pt-5 pb-3 bg-white border-top">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="fw-bold text-primary mb-3">Bravo</h5>
                    <p class="text-muted mb-3">
                        Bravo is a modern, design-focused e-commerce experience built for premium brands and thoughtful shoppers.
                    </p>
                    <div class="d-flex gap-2">
                        <span class="badge bg-light text-muted">Secure Payments</span>
                        <span class="badge bg-light text-muted">Fast Shipping</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-semibold mb-3">Shop</h6>
                    <ul class="list-unstyled text-muted footer-links">
                        <li><a href="products.html">All Products</a></li>
                        <li><a href="categories.html">Categories</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-semibold mb-3">Support</h6>
                    <ul class="list-unstyled text-muted footer-links">
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Shipping &amp; Returns</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-semibold mb-3">Stay Updated</h6>
                    <p class="text-muted mb-3">Get curated product updates and exclusive offers.</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email address" aria-label="Email address">
                            <button class="btn btn-primary" type="button">Join</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 pt-3 border-top">
                <p class="text-muted small mb-2 mb-md-0">&copy; 2026 Bravo. All rights reserved.</p>
                <p class="text-muted small mb-0">Designed with passion for modern commerce.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(".addCart").click(function() {
            let proId = $(this).attr("proId");
            
            $.post("cartFunctions/add.php" , {proId} , function(data) {

            });
        });
    </script>


</body>
</html>


