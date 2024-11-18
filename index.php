<?php

if (!isset($_SESSION)) {
    session_start();
}
ob_start(); // Bắt đầu bộ đệm đầu ra


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
        case 'dangky':

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ten = $_POST['ten'];
            $email = $_POST['email'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $dia_chi = $_POST['dia_chi'];
            $mat_khau =password_hash($_POST['mat_khau'], PASSWORD_BCRYPT);
            $hinh = isset($_FILES['anh_dai_dien']['name']) ? $_FILES['anh_dai_dien']['name'] : '';
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($hinh);
            if (!empty($hinh) && move_uploaded_file($_FILES["anh_dai_dien"]["tmp_name"], $target_file)) {
               
            } else {
                $hinh = ''; 
            }
            if (emailExists($email)) {
                $thongbao = "Email này đã được sử dụng!";
                require './views/account/dangky.php';
                return;
            }
            insert_user($ten,$email,$mat_khau,$hinh,$so_dien_thoai,$dia_chi);
            header('Location:index.php?act=dangnhap');
            exit();
        } 

        include './views/account/dangky.php';
        break;
        
        case 'dangnhap':

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = findByEmail($email);
                if ($user && password_verify($password, $user['mat_khau'])) {
                    $_SESSION['user'] = $user;
                    //  var_dump($_SESSION['user']['loai_nguoi_dung']);
                    //  die();
                    
                    if($_SESSION['user']['trang_thai'] == '0'){
                        $thongbao = "Tài khoản đã bị khóa.";
                        unset($_SESSION['user']);
                    }else{
                        if ($_SESSION['user']['loai_nguoi_dung'] == 'KhachHang') {
                            header('Location:index.php');
                        } else {
                            header('Location:./admin/index.php');
                        }
                    }
                   
                } else {
                    $thongbao = "Email hoặc mật khẩu không đúng!";
                    require './views/account/dangnhap.php';
                }
            } else {
                require './views/account/dangnhap.php';
            }

        include './views/account/dangnhap.php';
        break;

        case 'dangxuat';
        session_start();
        session_destroy();
        header('Location:index.php');
        break;

        case 'shopiphone':
        $product_shop_iphone = loadall_shopiphone();
        include './views/shop/shop-iphone.php';
        break;

        case 'shopsamsung':
        $product_shop_samsung = loadall_shopsamsung();
        include './views/shop/shop-samsung.php';
        break;

        case 'shophuawei':
        $product_shop_huawei = loadall_shophuawei();
        include './views/shop/shop-huawei.php';
        break;
        
        case 'chitietsanpham':
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


ob_end_flush();
