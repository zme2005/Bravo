<?php

session_start();
require "admin/views/users/functions/error.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Bravo</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
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
                <h1 class="h3 mb-1">Contact Us</h1>
                <p class="text-muted mb-0">We’d love to hear from you. This form is for UI demo only.</p>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0">
                            <div class="card-body p-4">
                                <h2 class="h5 mb-3">Send a Message</h2>
                                <div class="call"></div>
                                <form class="form">
                                    <div class="mb-3">
                                        <label for="contactName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="contactName" placeholder="Your full name">
                                        <?php error("name") ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contactEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="contactEmail" placeholder="you@example.com">
                                        <?php error("email") ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contactPhone" class="form-label">Phone</label>
                                        <input type="number" class="form-control" id="contactPhone" placeholder="+999 2134 654">
                                        <?php error("phone") ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contactMessage" class="form-label">Message</label>
                                        <textarea class="form-control" id="contactMessage" rows="5" placeholder="Share the details of your request"></textarea>
                                    </div>
                                    <button class="btn btn-primary w-100">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0 mb-3">
                            <div class="card-body p-4">
                                <h2 class="h5 mb-3">Contact Details</h2>
                                <p class="text-muted small mb-3">
                                    Bravo is a concept brand created to showcase a modern e-commerce experience.
                                </p>
                                <p class="text-muted small mb-1">
                                    <i class="bi bi-envelope me-2 text-primary"></i>support@bravostore.com
                                </p>
                                <p class="text-muted small mb-1">
                                    <i class="bi bi-telephone me-2 text-primary"></i>+1 (000) 000-0000
                                </p>
                                <p class="text-muted small mb-0">
                                    <i class="bi bi-geo-alt me-2 text-primary"></i>Design-first commerce &mdash; accessible from anywhere.
                                </p>
                            </div>
                        </div>
                        <div class="card shadow-sm border-0">
                            <div class="card-body p-4">
                                <h2 class="h6 mb-3">Support Hours</h2>
                                <div class="d-flex justify-content-between small text-muted mb-1">
                                    <span>Monday &ndash; Friday</span>
                                    <span>09:00 &ndash; 18:00</span>
                                </div>
                                <div class="d-flex justify-content-between small text-muted mb-1">
                                    <span>Saturday</span>
                                    <span>10:00 &ndash; 15:00</span>
                                </div>
                                <div class="d-flex justify-content-between small text-muted mb-0">
                                    <span>Sunday</span>
                                    <span>Closed</span>
                                </div>
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
                <p class="text-muted small mb-0">Contact form is static and does not send data.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

    <script>

        $(".form").submit(function(e) {
            e.preventDefault();

            let name = $("#contactName").val().trim();
            let email = $("#contactEmail").val().trim();
            let phone = $("#contactPhone").val().trim();
            let msg = $("#contactMessage").val().trim();

            if(!name) {
                $("#contactName").attr("placeholder" , "Please enter your name");
            }

            if(!email) {
                $("#contactEmail").attr("placeholder" , "Please enter your email");
            }

            if(!phone) {
                $("#contactPhone").attr("placeholder" , "Please enter your phone");
            }

            if(!msg) {
                $("#contactMessage").attr("placeholder" , "Please enter your message");
            }

            if(name && email && phone && msg) {
                $.post("contactFunctions/insert.php" , {
                    name ,
                    email ,
                    phone ,
                    msg
                } , function(data) {
                        $(".call").html(data);

                        setInterval(() => {
                            $(".call").html("");
                        } , 3000);

                        $("#contactName").val("");
                        $("#contactEmail").val("");
                        $("#contactPhone").val("");
                        $("#contactMessage").val("");
                });
            }

        });        

    </script>

</body>
</html>

<?php if(isset($_SESSION["errors"])) { unset($_SESSION["errors"]); } ?>
