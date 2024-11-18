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
        case 'dangky';
        include './views/account/dangky.php';
        break;
        
        case 'dangnhap';
        include './views/account/dangnhap.php';
        break;

        case '';
        include './view/contact.php';
        break;

        case 'shopiphone';
        $product_shop_iphone = loadall_shopiphone();
        include './views/shop/shop-iphone.php';
        break;

        case 'shopsamsung';
        $product_shop_samsung = loadall_shopsamsung();
        include './views/shop/shop-samsung.php';
        break;

        case 'shophuawei';
        $product_shop_huawei = loadall_shophuawei();
        include './views/shop/shop-huawei.php';
        break;
        
        case 'chitietsanpham';
        if (isset($_GET['ma_san_pham']) && ($_GET['ma_san_pham'] > 0)) {
            $ma_san_pham = $_GET['ma_san_pham'];
            $oneproduct = loadone_sanpham($ma_san_pham);
            extract($oneproduct);
            $product_cung_loai = load_product_cungloai($oneproduct[0]['ma_danh_muc'],$oneproduct[0]['ma_san_pham']);
            $load_all_binhluan = load_all_binhluan($ma_san_pham);
            // var_dump($product_cung_loai);

            // $list_variant = load_product_variant($product_id);

            // if (isset($_SESSION['username'])) {
            //     $list_img_cart = list_img_cart($_SESSION['username']['user_id']);
            // }
            include './views/chitietsanpham.php';
        } else {
            include './views/home.php';
        }
        break;



        default:
        include './views/home.php';
        break;
    }
} else {
    include './views/home.php';
}
include './views/footer.php';
