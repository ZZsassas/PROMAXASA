<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROMAX Security</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Set background image with gradient */
        .about-us-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://news.siliconallee.com/wp-content/uploads/2014/03/secure.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            height: 50vh;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Typing effect */
        .typing-effect {
            font-size: 3rem;
            font-weight: bold;
            text-transform: uppercase;
            border-right: 0.15em solid orange;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
            animation: typing 4s steps(30, end) forwards, blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {
            50% {
                border-color: transparent;
            }
        }

        /* Content section styles */
        .about-us-content {
            background-color: white;
            padding: 40px 0;
        }

        .about-us-content h3 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .about-us-content p {
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 15px;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            font-size: 1rem;
            margin: 0;
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
                    <li class="nav-item"><a class="nav-link" href="jop.php">Job Application</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Us Section -->
    <section class="about-us-section">
        <h2 class="typing-effect">ABOUT US PROMAX</h2>
    </section>

    <!-- About Us Content Section -->
    <section class="about-us-content">
        <div class="container">
            <h3>About PROMAX</h3>
            <p>Founded in 1980, our company has built a strong reputation and extensive expertise in the field of surveillance cameras and security systems. Over the decades, we have delivered cutting-edge solutions that ensure safety and peace of mind for our clients.</p>
            <p>Our CEO, Engineer Ibrahim Al-Gohary, leads the company with a vision for innovation and excellence. Additionally, our cybersecurity division is headed by Engineer Ziad Al-Gohary, who ensures that our systems remain robust and resilient in an ever-evolving digital landscape.</p>
            <p>We are committed to providing top-tier security solutions that meet the highest industry standards.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 PROMAX Security. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
