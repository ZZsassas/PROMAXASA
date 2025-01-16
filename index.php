<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEMAX Security</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://png.pngtree.com/background/20230618/original/pngtree-cityscape-background-with-3d-rendered-security-camera-or-cctv-picture-image_3758017.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            margin: 0;
            padding: 0;
        }
        footer {
            background: rgba(0, 0, 0, 0.8);
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }
        .hero h1 {
            font-size: 4rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            animation: fadeInDown 3s ease-out;
        }
        .hero p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            animation: fadeInUp 2s ease-out;
        }
        .btn-primary {
            margin-top: 20px;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PROMAX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1>Welcome to PROMAX</h1>
            <p>TOP TECH FOR YOU</p>
            <a href="services.php" class="btn btn-primary">Explore Our Services</a>
        </div>
    </section>
    <section id="about-promax" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4" style="color: black;">Why Choose PROMAX?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow hover-effect" onclick="clickEffect(this)">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Advanced Technology</h5>
                        <p class="card-text">We utilize the latest technologies in cameras and monitoring systems to ensure your complete security.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow hover-effect" onclick="clickEffect(this)">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Professional Team</h5>
                        <p class="card-text">Our team of experts works tirelessly to provide you with the best security experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow hover-effect" onclick="clickEffect(this)">
                    <div class="card-body">
                        <h5 class="card-title text-primary">24/7 Support</h5>
                        <p class="card-text">We are always available to support you and answer your inquiries around the clock.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
<!-- Add Google Material Icons library -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- Include JavaScript at the end of your HTML file -->
<script>
    function clickEffect(element) {
        // Add class for active effect
        element.classList.add("clicked");
        // Remove class after 0.3 seconds to reset effect
        setTimeout(() => {
            element.classList.remove("clicked");
        }, 300);
    }
</script>

<!-- Add CSS styles -->
<style>
    .hover-effect {
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .hover-effect:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .clicked {
        transform: scale(0.95);
        background-color: #f1f1f1;
        transition: all 0.2s ease;
    }
</style>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
