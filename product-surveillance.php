<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <title>Surveillance Cameras</title>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border-radius: 10px;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            transition: transform 0.3s ease;
            border-bottom: 2px solid #f1f1f1;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card .btn {
            transition: background-color 0.3s ease, color 0.3s ease;
            padding: 10px 20px;
            font-size: 16px;
        }

        .card .btn:hover {
            background-color: #007bff;
            color: #fff;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .card.clicked {
            transform: scale(0.95);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .row {
            justify-content: center;
        }
    </style>
</head>
<body>
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Surveillance Cameras</h2>
        <p class="text-center text-muted mb-5">Explore our wide range of surveillance cameras tailored to meet your security needs with advanced features and stunning designs.</p>
        <div class="row gy-4">
            <!-- 9 Products -->
            <?php
            $products = [
                ["Camera CONVOY", "High-resolution camera with advanced night vision.", "camera1", "https://static.wixstatic.com/media/38e27e_eecb42df6f3a410f8bcfd77c3a025771~mv2_d_2268_2126_s_2.png/v1/fill/w_1152,h_1080,al_c/38e27e_eecb42df6f3a410f8bcfd77c3a025771~mv2_d_2268_2126_s_2.png+1"],
                ["Camera CONVOY", "Compact and powerful, perfect for indoor use.", "camera2", "https://www.sourcesecurity.com/img/products/400/dedicated-micros-dm-cv-eip28p-dome-camera.jpg"],
                ["Camera CONVOY", "Outdoor camera with weather-resistant design.", "camera3", "https://th.bing.com/th/id/OIP.RKqfv0YCL3kaV7w3Pn6KzAHaHa?w=500&h=500&rs=1&pid=ImgDetMain+3"],
                ["Camera UNV", "360° rotation camera for wide area coverage.", "camera4", "https://th.bing.com/th/id/OIP.6JN8DrEyIMBpVQKJkDyj8wHaHO?rs=1&pid=ImgDetMain"],
                ["Camera UNV", "Smart camera with AI motion detection.", "camera5", "https://www.uniview.com/res/202209/08/20220908_1855117_1_951711_320104_0.jpg"],
                ["Camera UNV", "High-speed PTZ camera for large premises.", "camera6", "https://www.comx-computers.co.za/i/uniview/204509_IMG1.jpg"],
                ["Camera UNIARCH", "Ultra HD 4K camera with zoom capabilities.", "camera7", "https://th.bing.com/th/id/OIP.K4GvvR8ctVVwGi9FPxR6DAAAAA?rs=1&pid=ImgDetMain"],
                ["Camera UNIARCH", "Wireless camera with long battery life.", "camera8", "https://www.cdiscount.com/pdt2/9/0/3/1/700x700/auc1709471496903/rw/2k-poe-camera-surveillance-exterieure-pt-camera-i.jpg"],
                ["Camera UNIARCH", "Weatherproof outdoor camera with night vision.", "camera9", "https://5.imimg.com/data5/SELLER/Default/2022/8/CG/OV/SN/146737122/godrej-see-thru-eco-ir-outdoor-bullet-camera-500x500.jpg"],
            ];

            foreach ($products as $index => $product) {
                $duration = 1000 + ($index % 3) * 200; // Dynamic AOS duration
                echo "
                <div class='col-md-4' data-aos='fade-up' data-aos-duration='$duration'>
                    <div class='card shadow-sm border-0'>
                        <img src='{$product[3]}' class='card-img-top' alt='{$product[0]}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$product[0]}</h5>
                            <p class='card-text'>{$product[1]}</p>
                            <a href='product-detail.php?product={$product[2]}' class='btn btn-outline-primary'>Learn More</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();

    // Click interaction for cards
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', () => {
            card.classList.add('clicked');
            setTimeout(() => card.classList.remove('clicked'), 300);
        });
    });
</script>
</body>
</html>
