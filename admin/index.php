<?php

// // Require file Common
// require_once '../commons/env.php'; // Khai báo biến môi trường
// require_once '../commons/function.php'; // Hàm hỗ trợ

// // Require toàn bộ file Controllers
// require_once 'controllers/DashboardController.php';

// // Require toàn bộ file Models

// // Route
// $act = $_GET['act'] ?? '/';

// // Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match


include "../admin/models/pdo.php";
include "../admin/views/layouts/header.php";
include "../admin/views/layouts/siderbar.php";
include "../admin/models/danhmuc.php";
include "../admin/models/sanpham.php";
// //controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include "views/danhmuc/list.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendanhmuc = $_POST['ten_danh_muc'];
                $mota = $_POST['mo_ta'];
                insert_danhmuc($tendanhmuc, $mota);
                $thongbao = "Thêm thành công";
            }
            include "views/danhmuc/add.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "views/danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "views/danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendanhmuc = $_POST['ten_danh_muc'];
                $madanhmuc = $_POST['ma_danh_muc'];
                $mota = $_POST['mo_ta'];
                update_danhmuc($madanhmuc, $tendanhmuc, $mota);
                $thongbao = "Cập Nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "views/danhmuc/list.php";
            break;
            // san pham
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "views/sanpham/list.php";
            break;
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = isset($_POST['ma_danh_muc']) ? $_POST['ma_danh_muc'] : 0;
                $tensp = isset($_POST['ten_san_pham']) ? $_POST['ten_san_pham'] : '';
                $hinh = isset($_FILES['anh_san_pham']['name']) ? $_FILES['anh_san_pham']['name'] : '';
                $giasp = isset($_POST['gia']) ? $_POST['gia'] : 0;
                $mota = isset($_POST['mo_ta']) ? $_POST['mo_ta'] : '';
                $so_luong = isset($_POST['so_luong']) ? $_POST['so_luong'] : 0;

                // Xử lý file upload
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($hinh);
                if (!empty($hinh) && move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file)) {
                    // File được tải lên thành công
                } else {
                    $hinh = ''; // Gán giá trị rỗng nếu không có hình được upload
                }

                // Chèn sản phẩm vào cơ sở dữ liệu
                insert_sanpham($tensp, $hinh, $giasp, $mota, $so_luong, $iddm);
                $thongbao = "Thêm thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "views/sanpham/add.php";
            break;
        case 'xoasp':
            if (isset($_GET['ma_san_pham']) && ($_GET['ma_san_pham'] > 0)) {
                delete_sanpham($_GET['ma_san_pham']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "views/sanpham/list.php";
            break;
            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "views/sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['ma_san_pham'];
                    $iddm = $_POST['ma_danh_muc'];
                    $tensp = $_POST['ten_san_pham'];
                    $giasp = $_POST['gia'];
                    $mota = $_POST['mo_ta'];
                    $hinh = $_FILES['anh_san_pham']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anh_san_pham"]["name"]);
                    if (move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file)) {
                    } else {
                    }
    
                    update_sanpham($iddm, $tensp, $giasp, $mota, $anh_san_pham, $id);
    
                    $thongbao = "Cập Nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "views/sanpham/list.php";
                break;
                
          
        default:
            include "../admin/views/home.php";

            break;
    }
} else {
    include "../admin/views/home.php";
}

include "../admin/views/layouts/footer.php";
