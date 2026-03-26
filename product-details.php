<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Bravo</title>
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
                        <a class="nav-link" href="products.html">Products</a>
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
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">UltraSlim Pro Laptop</li>
                    </ol>
                </nav>
                <h1 class="h3 mb-0">UltraSlim Pro Laptop 13.3&quot;</h1>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0">
                            <div class="ratio ratio-4x3">
                                <img src="https://images.pexels.com/photos/18104/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1200" class="rounded-3" alt="UltraSlim Pro Laptop">
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-4">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.pexels.com/photos/18104/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=400" class="rounded-3 border" alt="Laptop angle">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&w=400" class="rounded-3 border" alt="Desk setup">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.pexels.com/photos/3736381/pexels-photo-3736381.jpeg?auto=compress&cs=tinysrgb&w=400" class="rounded-3 border" alt="Lifestyle">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="badge bg-primary-subtle text-primary mb-2">Electronics</span>
                        <h2 class="h4 mb-2">UltraSlim Pro Laptop 13.3&quot; • 16GB • 1TB SSD</h2>
                        <p class="text-muted mb-3">
                            Designed for creators and professionals, the UltraSlim Pro balances aesthetics with performance in a lightweight chassis.
                        </p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <span class="h4 text-primary mb-0">$1,499.00</span>
                            </div>
                            <span class="text-success small"><i class="bi bi-check-circle me-1"></i>In Stock &ndash; ships in 24h</span>
                        </div>
                        <div class="mb-3">
                            <span class="text-warning small"><i class="bi bi-star-fill me-1"></i>4.8</span>
                            <span class="text-muted small ms-2">132 reviews</span>
                        </div>
                        <hr>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-1"><i class="bi bi-dot"></i> 13.3&quot; FHD edge-to-edge display</li>
                            <li class="mb-1"><i class="bi bi-dot"></i> 16GB DDR4 RAM, 1TB NVMe SSD</li>
                            <li class="mb-1"><i class="bi bi-dot"></i> Backlit keyboard &amp; precision trackpad</li>
                            <li><i class="bi bi-dot"></i> All-day battery life with fast charging</li>
                        </ul>

                        <div class="d-flex align-items-center mb-4">
                            <div class="me-3">
                                <label class="form-label small fw-semibold mb-1">Quantity</label>
                                <div class="input-group quantity-group">
                                    <button class="btn btn-outline-secondary qty-minus" type="button"><i class="bi bi-dash"></i></button>
                                    <input type="text" class="form-control text-center qty-input" value="1" aria-label="Quantity">
                                    <button class="btn btn-outline-secondary qty-plus" type="button"><i class="bi bi-plus"></i></button>
                                </div>
                            </div>
                            <div>
                                <label class="form-label small fw-semibold mb-1">Variant</label>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-primary btn-sm active">16GB / 1TB</button>
                                    <button type="button" class="btn btn-outline-primary btn-sm">32GB / 1TB</button>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <button class="btn btn-primary btn-lg">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                            <button class="btn btn-outline-secondary btn-lg">
                                <i class="bi bi-heart me-2"></i>Add to Wishlist
                            </button>
                        </div>

                        <div class="p-3 bg-light rounded-3 small">
                            <div class="d-flex align-items-center mb-1">
                                <i class="bi bi-truck me-2 text-primary"></i>
                                <span class="fw-semibold">Free shipping</span>
                            </div>
                            <p class="mb-1 text-muted">Estimated delivery between <strong>3–5 business days</strong>.</p>
                            <p class="mb-0 text-muted"><i class="bi bi-arrow-repeat me-1"></i> 30-day hassle-free returns.</p>
                        </div>
                    </div>
                </div>

                <!-- Static related products -->
                <div class="mt-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="h5 mb-0">Related Products</h3>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card product-card h-100">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Keyboard">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title small-title">Wireless Keyboard</h5>
                                    <p class="card-text text-muted mb-2">Slim &amp; silent keys</p>
                                    <span class="fw-bold text-primary mb-3">$69.00</span>
                                    <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card product-card h-100">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Camera">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title small-title">Desk Webcam HD</h5>
                                    <p class="card-text text-muted mb-2">For video calls</p>
                                    <span class="fw-bold text-primary mb-3">$89.00</span>
                                    <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card product-card h-100">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.pexels.com/photos/3739450/pexels-photo-3739450.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Sneakers">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title small-title">Bravo Desk Chair</h5>
                                    <p class="card-text text-muted mb-2">Ergonomic comfort</p>
                                    <span class="fw-bold text-primary mb-3">$219.00</span>
                                    <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card product-card h-100">
                                <div class="ratio ratio-4x3">
                                    <img src="https://images.pexels.com/photos/5721906/pexels-photo-5721906.jpeg?auto=compress&cs=tinysrgb&w=800" class="card-img-top" alt="Backpack">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title small-title">Tech Organizer Pouch</h5>
                                    <p class="card-text text-muted mb-2">Cables &amp; adapters</p>
                                    <span class="fw-bold text-primary mb-3">$39.00</span>
                                    <a href="product-details.html" class="btn btn-outline-primary w-100 mt-auto">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="pt-5 pb-3 bg-white border-top">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <p class="text-muted small mb-2 mb-md-0">&copy; 2026 Bravo. All rights reserved.</p>
                <p class="text-muted small mb-0">Static product details page for UI showcase only.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


