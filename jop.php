<?php 
// بدء الجلسة إذا كنت بحاجة إلى استخدام الجلسات
session_start();

// معالجة بيانات التقديم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $cv = $_FILES['cv'];

    // تحقق من وجود المجلد "uploads" وإنشائه إذا لم يكن موجودًا
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // تحديد مسار حفظ الملف
    $cvPath = $uploadDir . basename($cv['name']);

    // تأكد من أن الملف قد تم رفعه بنجاح
    if (move_uploaded_file($cv['tmp_name'], $cvPath)) {
        $statusMessage = "تم تقديم طلبك بنجاح!";
    } else {
        $statusMessage = "حدث خطأ أثناء رفع الملف.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROMAX Security - Job Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* تنسيق الصفحة */
        body {
            font-family: Arial, sans-serif;
        }

        /* قسم الخلفية الصغيرة */
        .header-image {
            background-image: url('https://1.bp.blogspot.com/-eexmOLEk4_8/WBYMXYGzQdI/AAAAAAAAhNE/o7LrbZ0K2sU33ix6dJe8bXaDTJ-SePzSACLcB/s1600/Job-Application-Image.jpg');
            background-size: cover;
            background-position: center;
            height: 400px; /* تكبير الصورة إلى 400px */
            width: 100%;
        }

        .header-image h2 {
            color: white;
            text-align: center;
            padding: 120px 0; /* زيادة المسافة لإظهار النص بشكل أفضل */
            font-size: 2.5rem;
        }

        .job-application-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .job-application-form {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .job-application-form .form-label {
            font-weight: bold;
        }

        .job-application-form .btn {
            width: 100%;
        }

        .available-jobs {
            padding: 50px 0;
            background-color: #f2f2f2;
        }

        .available-jobs .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .available-jobs .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .available-jobs .card-body {
            padding: 20px;
        }

        .available-jobs .btn-info {
            width: 100%;
            text-align: center;
            margin-top: 15px;
        }

        .row .col-md-4 {
            margin-bottom: 20px;
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
                    <li class="nav-item"><a class="nav-link" href="job.php">Job Application</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background Image Section -->
    <section class="header-image">
    </section>

    <!-- Job Application Section -->
    <section id="job-application" class="job-application-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Job Application</h2>
            <p>Fill out the form below to apply for a job at PROMAX.</p>
        </div>
    </section>

    <!-- Job Application Form -->
    <section class="job-application-form py-5">
        <div class="container">
            <h3 class="text-center mb-4">Apply Now</h3>
            <?php if (isset($statusMessage)) { echo "<p class='alert alert-info'>$statusMessage</p>"; } ?>
            <form action="job.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position Applying For</label>
                    <input type="text" class="form-control" id="position" name="position" required>
                </div>
                <div class="mb-3">
                    <label for="cv" class="form-label">Upload Resume (CV)</label>
                    <input type="file" class="form-control" id="cv" name="cv" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit Application</button>
            </form>
        </div>
    </section>

    <!-- Available Jobs Section -->
    <section class="available-jobs py-5">
        <div class="container">
            <h3 class="text-center mb-4">Current Job Openings</h3>
            <div class="row">
                <!-- Job Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Security Analyst</h5>
                            <p class="card-text">We are looking for a detail-oriented Security Analyst to monitor and analyze potential threats to our network and infrastructure.</p>
                            <a href="apply-job.php?job_id=1" class="btn btn-info">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-- Job Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cybersecurity Specialist</h5>
                            <p class="card-text">As a Cybersecurity Specialist, you will protect our organization’s digital assets, respond to security incidents, and ensure system security compliance.</p>
                            <a href="apply-job.php?job_id=2" class="btn btn-info">Apply Now</a>
                        </div>
                    </div>
                </div>
                <!-- Job Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">IT Support Engineer</h5>
                            <p class="card-text">We are looking for an IT Support Engineer to provide technical support to our employees and ensure all systems and networks are running smoothly.</p>
                            <a href="apply-job.php?job_id=3" class="btn btn-info">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 PROMAX. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
