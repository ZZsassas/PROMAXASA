<?php include('header.php'); ?>
<?php
// الحصول على اسم المنتج من الرابط
$product = isset($_GET['product']) ? $_GET['product'] : 'Unknown Product';

// تحديد الصورة بناءً على المنتج
$images = [
    'camera1' => 'https://static.wixstatic.com/media/38e27e_eecb42df6f3a410f8bcfd77c3a025771~mv2_d_2268_2126_s_2.png/v1/fill/w_1152,h_1080,al_c/38e27e_eecb42df6f3a410f8bcfd77c3a025771~mv2_d_2268_2126_s_2.png',
    'camera2' => 'https://www.sourcesecurity.com/img/products/400/dedicated-micros-dm-cv-eip28p-dome-camera.jpg',
    'camera3' => 'https://th.bing.com/th/id/OIP.RKqfv0YCL3kaV7w3Pn6KzAHaHa?w=500&h=500&rs=1&pid=ImgDetMain',
    'camera4' => 'https://th.bing.com/th/id/OIP.6JN8DrEyIMBpVQKJkDyj8wHaHO?rs=1&pid=ImgDetMain',
    'camera5' => 'https://www.uniview.com/res/202209/08/20220908_1855117_1_951711_320104_0.jpg',
    'camera6' => 'https://www.comx-computers.co.za/i/uniview/204509_IMG1.jpg',
    'camera7' => 'https://th.bing.com/th/id/OIP.K4GvvR8ctVVwGi9FPxR6DAAAAA?rs=1&pid=ImgDetMain',
    'camera8' => 'https://www.cdiscount.com/pdt2/9/0/3/1/700x700/auc1709471496903/rw/2k-poe-camera-surveillance-exterieure-pt-camera-i.jpg',
    'camera9' => 'https://5.imimg.com/data5/SELLER/Default/2022/8/CG/OV/SN/146737122/godrej-see-thru-eco-ir-outdoor-bullet-camera-500x500.jpg',
];

// تحديد الصورة المناسبة بناءً على المنتج
$imageSrc = isset($images[$product]) ? $images[$product] : 'https://via.placeholder.com/800x600?text=Default+Image';
?>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- عرض الصورة المناسبة للمنتج -->
                <img src="<?php echo $imageSrc; ?>" alt="<?php echo $product; ?>" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="display-6 text-primary"><?php echo ucwords(str_replace("-", " ", $product)); ?></h2>
                <p class="text-muted mb-4">Detailed description of <?php echo $product; ?> goes here. Highlight features, specifications, and benefits to the user.</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary"></i> Feature 1</li>
                    <li><i class="bi bi-check-circle text-primary"></i> Feature 2</li>
                    <li><i class="bi bi-check-circle text-primary"></i> Feature 3</li>
                </ul>
                <a href="product-surveillance.php" class="btn btn-outline-secondary mt-4">Back to Cameras</a>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
