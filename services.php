<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Our Premium Products</title>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            transition: transform 0.3s ease;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card .btn {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .card .btn:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4 display-5 text-primary">Our Premium Products</h2>
        <p class="text-center text-muted mb-5">Explore our top-notch security products tailored to meet your needs with exceptional quality and performance.</p>
        <div class="row gy-4">
            <!-- Surveillance Cameras -->
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-sm border-0">
                    <img src="https://5.imimg.com/data5/EO/DJ/IW/SELLER-93813358/cctv-camera-500x500.jpg" class="card-img-top" alt="Surveillance Camera">
                    <div class="card-body text-center">
                        <h5 class="card-title">Surveillance Cameras</h5>
                        <p class="card-text">High-quality security cameras for indoor and outdoor use.</p>
                        <a href="product-surveillance.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Fire Alarm Systems -->
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="card shadow-sm border-0">
                    <img src="https://th.bing.com/th/id/R.bab340389d0837229616ee970986d9c2?rik=VhE2U1D9eWt6Pg&pid=ImgRaw&r=0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fire Alarm Systems</h5>
                        <p class="card-text">Reliable fire detection and alarm solutions designed to protect you and your property.</p>
                        <a href="product-fire-alarm.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Security Gates -->
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1400">
                <div class="card shadow-sm border-0">
                    <img src="https://5.imimg.com/data5/SELLER/Default/2022/11/OH/TY/IQ/21430514/essl-zkteco-automatic-access-control-tripod-turnstile-500x500.png" class="card-img-top" alt="Security Gate">
                    <div class="card-body text-center">
                        <h5 class="card-title">Security Gates</h5>
                        <p class="card-text">Durable and aesthetically pleasing security gates for enhanced protection.</p>
                        <a href="product-security-gate.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Add more products (e.g., Smart Locks, CCTV Systems) -->
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1600">
                <div class="card shadow-sm border-0">
                    <img src="https://th.bing.com/th/id/OIP.RRMlrMiCEIEW_ZoVBNfw_wHaFn?w=654&h=496&rs=1&pid=ImgDetMain" class="card-img-top" alt="Smart Locks">
                    <div class="card-body text-center">
                        <h5 class="card-title">Smart Locks</h5>
                        <p class="card-text">Secure and convenient keyless entry systems for homes and offices.</p>
                        <a href="product-smart-locks.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                <div class="card shadow-sm border-0">
                    <img src="https://th.bing.com/th/id/OIP.dTDrmftlcqpL1GV9Tu3jAAAAAA?w=300&h=300&rs=1&pid=ImgDetMain" class="card-img-top" alt="CCTV Systems">
                    <div class="card-body text-center">
                        <h5 class="card-title">CCTV Systems</h5>
                        <p class="card-text">Advanced CCTV systems for surveillance and monitoring purposes.</p>
                        <a href="product-cctv.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="card shadow-sm border-0">
                    <img src="https://n11scdn.akamaized.net/a1/602_857/05/16/50/52/IMG-5080364362277378883.jpg" class="card-img-top" alt="Intruder Alarms">
                    <div class="card-body text-center">
                        <h5 class="card-title">Intruder Alarms</h5>
                        <p class="card-text">Protect your property with state-of-the-art intruder alarm systems.</p>
                        <a href="product-intruder-alarms.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
