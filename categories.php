<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Bravo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top bravo-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.php">Bravo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
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
                <h1 class="h3 mb-1">Shop by Category</h1>
                <p class="text-muted mb-0">Explore curated collections designed for different lifestyles.</p>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    <!-- Category 1 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card category-card h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3 rounded-3 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-100 h-100 object-fit-cover" alt="Workspace">
                                </div>
                                <h5 class="card-title">Electronics</h5>
                                <p class="card-text text-muted small mb-3">Laptops, phones, audio gear, and more for your digital lifestyle.</p>
                                <a href="products.html" class="btn btn-outline-primary btn-sm mt-auto">View Products</a>
                            </div>
                        </div>
                    </div>
                    <!-- Category 2 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card category-card h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3 rounded-3 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/3739450/pexels-photo-3739450.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-100 h-100 object-fit-cover" alt="Sneakers">
                                </div>
                                <h5 class="card-title">Fashion</h5>
                                <p class="card-text text-muted small mb-3">Clean silhouettes and comfortable fits for everyday wear.</p>
                                <a href="products.html" class="btn btn-outline-primary btn-sm mt-auto">View Products</a>
                            </div>
                        </div>
                    </div>
                    <!-- Category 3 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card category-card h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3 rounded-3 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/5721906/pexels-photo-5721906.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-100 h-100 object-fit-cover" alt="Backpack">
                                </div>
                                <h5 class="card-title">Accessories</h5>
                                <p class="card-text text-muted small mb-3">Backpacks, organizers, and daily carry essentials.</p>
                                <a href="products.html" class="btn btn-outline-primary btn-sm mt-auto">View Products</a>
                            </div>
                        </div>
                    </div>
                    <!-- Category 4 -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card category-card h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3 rounded-3 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/374074/pexels-photo-374074.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-100 h-100 object-fit-cover" alt="Desk setup">
                                </div>
                                <h5 class="card-title">Home Office</h5>
                                <p class="card-text text-muted small mb-3">Create a focused workspace with ergonomic essentials.</p>
                                <a href="products.html" class="btn btn-outline-primary btn-sm mt-auto">View Products</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-4">
                    <!-- Category 5 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card category-card h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3 rounded-3 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/8454341/pexels-photo-8454341.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-100 h-100 object-fit-cover" alt="Headphones">
                                </div>
                                <h5 class="card-title">Audio</h5>
                                <p class="card-text text-muted small mb-3">Headphones and speakers tuned for immersive sound.</p>
                                <a href="products.html" class="btn btn-outline-primary btn-sm mt-auto">View Products</a>
                            </div>
                        </div>
                    </div>
                    <!-- Category 6 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card category-card h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3 rounded-3 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/788946/pexels-photo-788946.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-100 h-100 object-fit-cover" alt="Camera">
                                </div>
                                <h5 class="card-title">Content Creation</h5>
                                <p class="card-text text-muted small mb-3">Gear for streaming, recording, and storytelling.</p>
                                <a href="products.html" class="btn btn-outline-primary btn-sm mt-auto">View Products</a>
                            </div>
                        </div>
                    </div>
                    <!-- Category 7 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card category-card h-100">
                            <div class="card-body d-flex flex-column">
                                <div class="ratio ratio-4x3 mb-3 rounded-3 overflow-hidden">
                                    <img src="https://images.pexels.com/photos/3736381/pexels-photo-3736381.jpeg?auto=compress&cs=tinysrgb&w=800" class="w-100 h-100 object-fit-cover" alt="Shopping">
                                </div>
                                <h5 class="card-title">Gift Ideas</h5>
                                <p class="card-text text-muted small mb-3">Thoughtful picks for people who appreciate design.</p>
                                <a href="products.html" class="btn btn-outline-primary btn-sm mt-auto">View Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="pt-5 pb-3 bg-white border-top">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <p class="text-muted small mb-2 mb-md-0">&copy; 2026 Bravo. All rights reserved.</p>
                <p class="text-muted small mb-0">Static categories for demo purposes only.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


