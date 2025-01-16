<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من النموذج
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // إعداد الرسالة التي سيتم إرسالها
    $messageContent = "Name: $name\nEmail: $email\nMessage: $message\n";
    
    // إرسال الرسالة إلى البريد الإلكتروني المطلوب
    $to = "ruziad43@gmail.com";  // البريد الإلكتروني الجديد
    $subject = "New Message from Contact Us Form";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "Content-Type: text/plain; charset=UTF-8";
    
    // محاولة إرسال البريد الإلكتروني
    $emailSent = mail($to, $subject, $messageContent, $headers);
    
    // إذا تم إرسال البريد الإلكتروني بنجاح، أو تم تخزين الرسالة في ملف، أخبر المستخدم
    if ($emailSent) {
        echo "<div class='alert alert-success'>Your message has been sent successfully! Thank you for contacting us.</div>";
    } else {
        echo "<div class='alert alert-danger'>There was an error sending your message. Please try again.</div>";
    }

    // تخزين الرسالة في ملف نصي (اختياري)
    $file = 'messages.txt';
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents($file, $data, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PROMAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header-background {
            background-image: url('http://www.convoy-security.com/img/Caroussel/5.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 25vh;
            width: 100%;
        }
        .contact-info {
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
        }

        .contact-info h2, .contact-info h3 {
            color: #333;
        }

        .contact-location {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .map-container {
            margin-top: 30px;
        }

        .map-container iframe {
            width: 100%;
            height: 500px;
            border: none;
        }

        footer {
            background-color: #343a40;
            color: white;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .location-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            width: 300px;
        }

        .location-box:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .location-box h5 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .location-box p {
            color: #333;
            margin: 0;
        }

        .icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .icon i {
            color: #007bff;
        }

        .text-dark:hover {
            color: #0056b3;
        }

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

        .hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PROMAX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header-background"></div>

    <div class="container contact-info">
        <h2>Contact Us</h2>
        <form action="contact.php" method="POST">
            <div class="form-group mb-3">
                <label for="name">Your Name</label>
                <input type="text" id="name" class="form-control" name="name" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Your Email</label>
                <input type="email" id="email" class="form-control" name="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="message">Your Message</label>
                <textarea id="message" class="form-control" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>

    <div class="container contact-info">
        <h3 class="contact-header text-center mb-4">Our Location</h3>
        <div class="contact-location d-flex flex-column flex-lg-row align-items-center justify-content-around text-center text-lg-start">
            <div class="location-box p-3 mx-2">
                <div class="icon mb-2">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h5>Address</h5>
                <p>EGYPT, Monfia, Shbeen Elkom <br>Next to Noor Al-Saliheen Mosque</p>
            </div>
            <div class="location-box p-3 mx-2">
                <div class="icon mb-2">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h5>Phone</h5>
                <p><a href="tel:+201207100075" class="text-decoration-none text-dark">+201207100075</a></p>
            </div>
            <div class="location-box p-3 mx-2">
                <div class="icon mb-2">
                    <i class="fas fa-envelope"></i>
                </div>
                <h5>Email</h5>
                <p><a href="mailto:support@PROMAX.com" class="text-decoration-none text-dark">support@PROMAX.com</a></p>
            </div>
        </div>
    </div>

    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9058478524566!2d31.0210263!3d30.5638596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584ec42429d3e7%3A0xbe82b6e6c7c7bc7c!2z2YbYsdipINin2YTYrNixINin2YTZh9mE!5e0!3m2!1sar!2seg!4v1673945815487!5m2!1sar!2seg"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

    <footer class="bg-dark text-white p-4 text-center mt-5">
        <div class="container">
            <div class="social-icons">
                <a href="#" class="hover-effect"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover-effect"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover-effect"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
