<?php include('header.php'); ?>
<?php
// الحصول على اسم المنتج من الرابط
$product = isset($_GET['product']) ? $_GET['product'] : 'Unknown Product';

// تحديد الصورة بناءً على المنتج
$images = [
    'fire-alarm1' => 'https://th.bing.com/th/id/R.06ae8b34e89761ca01c7e8f56f381583?rik=ScvCgArcv2smGg&riu=http%3a%2f%2fwww.etalonsecurity.com%2feng%2fwp-content%2fuploads%2f2020%2f11%2fConventional-Panel.png&ehk=XFZw7IKKdtyfmzjq1cL1TMPXaI1jXZoGZaHtoJHVygg%3d&risl=&pid=ImgRaw&r=0',
    'fire-alarm2' => 'https://th.bing.com/th/id/OIP.jaE9KKnnbP4MzLqS9pkS6gAAAA?w=400&h=266&rs=1&pid=ImgDetMain',
    'fire-alarm3' => 'https://th.bing.com/th/id/OIP.iwb1Zmhs86zdXKNWSD5jGQAAAA?w=366&h=349&rs=1&pid=ImgDetMain',
    'fire-alarm4' => 'https://th.bing.com/th/id/R.aa817f21f4513e9db2e1dd2e3c962f5b?rik=5xsQAwZl2J%2bHkQ&riu=http%3a%2f%2fstatic1.squarespace.com%2fstatic%2f63371c751cba531bc310ca66%2f64011dc26fe4e134a9ac56bf%2f65b1679dd2ac3a1f42c42441%2f1706920244470%2fNBG-12LX.jpg%3fformat%3d1500w&ehk=fOFVJqKyoekiD2Hbo736xMI%2bDafq8%2bVdKmMPitUstgQ%3d&risl=&pid=ImgRaw&r=0',
    'fire-alarm5' => 'https://th.bing.com/th/id/OIP.zeWfDIlCcxQg8HJCwNGK3gHaHa?w=1000&h=1000&rs=1&pid=ImgDetMain',
    'fire-alarm6' => 'https://image.made-in-china.com/2f0j00tihgVUdaJArl/Resettable-Manual-Call-Point-MCP-for-Addressable-Fire-Alarm-System.jpg',
    'fire-alarm7' => 'https://static.wixstatic.com/media/127ef4_88c72c6ddfed4d6ab190ac063af5de74~mv2.png/v1/fill/w_700,h_700,al_c/detect.png',
    'fire-alarm8' => 'https://th.bing.com/th/id/OIP.bHuIfZfUxCXNweICkvvJmQHaHa?w=800&h=800&rs=1&pid=ImgDetMain',
    'fire-alarm9' => 'https://jmsystems.es/3746-large_default/nfxi-opt.jpg',
];

// تحديد الصورة المناسبة بناءً على المنتج
$imageSrc = isset($images[$product]) ? $images[$product] : 'https://via.placeholder.com/800x600?text=Default+Image';

// تحديد التفاصيل بناءً على المنتج
$productDetails = [
    'fire-alarm1' => [
        'title' => 'Fire Alarm Model 1',
        'description' => 'This is a detailed description of Fire Alarm Model 1. It provides early fire detection.',
        'features' => ['Feature 1', 'Feature 2', 'Feature 3']
    ],
    'fire-alarm2' => [
        'title' => 'Fire Alarm Model 2',
        'description' => 'This model offers reliable fire detection with advanced technology.',
        'features' => ['Feature 1', 'Feature 2', 'Feature 3']
    ],
    // إضافة تفاصيل المنتج الأخرى هنا
];

// إذا لم يتم العثور على المنتج، استخدم القيم الافتراضية
$productTitle = isset($productDetails[$product]) ? $productDetails[$product]['title'] : 'Unknown Product';
$productDescription = isset($productDetails[$product]) ? $productDetails[$product]['description'] : 'No description available.';
$productFeatures = isset($productDetails[$product]) ? $productDetails[$product]['features'] : [];
?>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- عرض الصورة المناسبة للمنتج -->
                <img src="<?php echo $imageSrc; ?>" alt="<?php echo $productTitle; ?>" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="display-6 text-primary"><?php echo $productTitle; ?></h2>
                <p class="text-muted mb-4"><?php echo $productDescription; ?></p>
                <ul class="list-unstyled">
                    <?php foreach ($productFeatures as $feature): ?>
                        <li><i class="bi bi-check-circle text-primary"></i> <?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="product-fire-alarm.php" class="btn btn-outline-secondary mt-4">Back to Fire Alarms</a>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
