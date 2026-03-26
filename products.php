<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Bravo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
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
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.html">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3 me-lg-2">
                        <a class="nav-link position-relative" href="#">
                            <i class="bi bi-cart3 fs-5"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="btn btn-outline-primary ms-lg-2">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page-content">
        <section class="py-4 border-bottom bg-light-subtle">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h1 class="h3 mb-1">All Products</h1>
                        <p class="text-muted mb-0">Browse our curated selection of premium products.</p>
                    </div>
                    <div class="mt-3 mt-sm-0">
                        <span class="badge bg-primary-subtle text-primary">Static Demo UI</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <!-- Static filters UI (non-functional) -->
                <div class="row mb-4 g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control border-start-0" placeholder="Search products (UI only)">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option selected>All Categories</option>
                            <option>Electronics</option>
                            <option>Fashion</option>
                            <option>Accessories</option>
                            <option>Home Office</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option selected>Sort by</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest</option>
                            <option>Popular</option>
                        </select>
                    </div>
                    <div class="col-md-2 text-md-end">
                        <button class="btn btn-outline-secondary w-100 w-md-auto">
                            <i class="bi bi-sliders me-1"></i> Filters
                        </button>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Product 1 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/18104/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Laptop">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-primary-subtle text-primary mb-2">Electronics</span>
                                <h5 class="card-title small-title">Bravo Ultra Laptop 14&quot;</h5>
                                <p class="card-text text-muted mb-2">16GB RAM • 1TB SSD</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$1,499.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.8</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Camera">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-primary-subtle text-primary mb-2">Electronics</span>
                                <h5 class="card-title small-title">Mirrorless Camera Pro</h5>
                                <p class="card-text text-muted mb-2">24MP • 4K Video</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$1,099.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.7</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/845434/pexels-photo-845434.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Phone">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-primary-subtle text-primary mb-2">Electronics</span>
                                <h5 class="card-title small-title">BravoX Phone 13</h5>
                                <p class="card-text text-muted mb-2">256GB • 5G</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$899.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.9</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/8454341/pexels-photo-8454341.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Headphones">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-primary-subtle text-primary mb-2">Accessories</span>
                                <h5 class="card-title small-title">Studio Wireless Headphones</h5>
                                <p class="card-text text-muted mb-2">Active Noise Canceling</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$229.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.6</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/3739450/pexels-photo-3739450.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Sneakers">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-info-subtle text-info mb-2">Fashion</span>
                                <h5 class="card-title small-title">Bravo Air Sneakers</h5>
                                <p class="card-text text-muted mb-2">Lightweight • Everyday</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$129.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.5</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product 6 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/7671166/pexels-photo-7671166.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Smartwatch">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-info-subtle text-info mb-2">Accessories</span>
                                <h5 class="card-title small-title">Bravo Active Watch</h5>
                                <p class="card-text text-muted mb-2">Fitness &amp; Notifications</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$259.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.4</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product 7 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/5721906/pexels-photo-5721906.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Backpack">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-info-subtle text-info mb-2">Fashion</span>
                                <h5 class="card-title small-title">Urban Tech Backpack</h5>
                                <p class="card-text text-muted mb-2">Laptop Pocket • Water Resistant</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$89.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.3</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product 8 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card product-card h-100">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Desk setup">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span class="badge bg-success-subtle text-success mb-2">Home Office</span>
                                <h5 class="card-title small-title">Minimal Desk Set</h5>
                                <p class="card-text text-muted mb-2">Keyboard • Mouse • Pad</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="fw-bold text-primary">$149.00</span>
                                    <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.6</span>
                                </div>
                                <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Static pagination -->
                <nav class="mt-4" aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><span class="page-link">2</span></li>
                        <li class="page-item"><span class="page-link">3</span></li>
                        <li class="page-item"><span class="page-link">Next</span></li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="pt-5 pb-3 bg-white border-top">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="fw-bold text-primary mb-3">Bravo</h5>
                    <p class="text-muted mb-3">
                        Explore curated technology, fashion, and lifestyle essentials in one modern storefront.
                    </p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-semibold mb-3">Explore</h6>
                    <ul class="list-unstyled text-muted footer-links">
                        <li><a href="products.html">Latest Products</a></li>
                        <li><a href="categories.html">Shop by Category</a></li>
                        <li><a href="contact.html">Customer Support</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-semibold mb-3">Contact</h6>
                    <p class="text-muted small mb-1"><i class="bi bi-envelope me-2"></i>support@bravostore.com</p>
                    <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-2"></i>Global design-first ecommerce concept.</p>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 pt-3 border-top">
                <p class="text-muted small mb-2 mb-md-0">&copy; 2026 Bravo. All rights reserved.</p>
                <p class="text-muted small mb-0">Static UI showcase. No backend or live data.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


