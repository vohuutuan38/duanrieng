<?php



include './models/pdo.php';
include './views/header.php';

include './models/nguoidung.php';
include './models/binhluan.php';
include './models/sanpham.php';
include './models/danhmuc.php';



$product_new = loadall_product_home();
$product_iphone = loadall_product_iphone();
$product_samsung = loadall_product_samsung();

// $product_new2 = loadall_product_home2();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'contact';
        include './view/contact.php';
        break;

        case 'shopiphone';
        $product_shop_iphone = loadall_shopiphone();
        include './views/shop-iphone.php';
        break;

        case 'shopsamsung';
        $product_shop_samsung = loadall_shopsamsung();
        include './views/shop-samsung.php';
        break;

        case 'shophuawei';
        $product_shop_huawei = loadall_shophuawei();
        include './views/shop-huawei.php';
        break;
        
        default:
        include './views/home.php';
        break;
    }
} else {
    include './views/home.php';
}
include './views/footer.php';
