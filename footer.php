<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Icons</title>
    <!-- Add Font Awesome CSS for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            color: #007bff;
        }

        #social-media {
            padding: 20px 0;
            background-color: #dc3545; /* Red color */
            text-align: center;
        }
    </style>
</head>
<body>
    <section id="social-media" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-white mb-4">Follow Us</h5>
                    <div class="social-icons">
                        <!-- Facebook Icon -->
                        <a href="https://www.facebook.com/yourpage" target="_blank">
                            <span class="fab fa-facebook"></span>
                        </a>
                        <!-- Twitter Icon -->
                        <a href="https://www.twitter.com/yourpage" target="_blank">
                            <span class="fab fa-twitter"></span>
                        </a>
                        <!-- Instagram Icon -->
                        <a href="https://www.instagram.com/yourpage" target="_blank">
                            <span class="fab fa-instagram"></span>
                        </a>
                        <!-- LinkedIn Icon -->
                        <a href="https://www.linkedin.com/yourpage" target="_blank">
                            <span class="fab fa-linkedin"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<!-- footer.php -->
<section id="contact-info" class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="mb-4">CONTACT</h5>
                <p><strong>Technical Support:</strong> 01207100075</p>
                <p><strong>Sales:</strong> 01207100075</p>
            </div>
            <div class="col-md-4">
                <h5 class="mb-4">VISIT US</h5>
                <p>EGYPT, Monfia, Shbeen Elkom </p>
                <p>Shbeen Elkom - Next to Noor Al-Saliheen Mosque</p>
            </div>
            <div class="col-md-4">
                <h5 class="mb-4">INFO</h5>
                <p><strong>Phone:</strong> +201207100075</p>
                <p><strong>Fax:</strong> +201207100075</p>
            </div>
        </div>
    </div>
</section>

<style>
    #contact-info {
        background-color: #343a40; /* Dark background color */
    }

    .contact-info p {
        font-size: 16px;
        margin-bottom: 12px;
    }

    .contact-info h5 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .contact-info p strong {
        color: #f8f9fa; /* Light color for labels */
    }
</style>
