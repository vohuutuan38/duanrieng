<?php
function insert_sanpham($ten_san_pham, $hinh, $giasp, $mo_ta, $ma_danh_muc, $mau_sac, $so_luong)
{

    $sql = "INSERT INTO sanpham (ten_san_pham, anh_san_pham, gia, mo_ta, ma_danh_muc) 
            VALUES ('$ten_san_pham', '$hinh', '$giasp', '$mo_ta', '$ma_danh_muc')";

    pdo_execute($sql);
    if ($sql) {
        // Lấy thông tin sản phẩm vừa thêm vào
        $sql = "SELECT * FROM sanpham ORDER BY ma_san_pham DESC LIMIT 1";
        $a = pdo_query_one($sql);
        $ma_san_pham = $a['ma_san_pham'];

        // Kiểm tra số lượng mảng và thực hiện thêm vào ProductVariants
        if (is_array($mau_sac) && count($mau_sac) > 0) {
            foreach ($mau_sac as $color_value) {
                // Thêm biến thể sản phẩm vào bảng bienthe
                $sql_variant = "INSERT INTO bienthe (ma_san_pham, mau_sac, so_luong) 
                                VALUES ('$ma_san_pham', '$color_value', '$so_luong')";
                pdo_execute($sql_variant); // Thực hiện thêm biến thể vào bảng
            }
        } else {
            echo "Lỗi: Không có màu sắc được chọn.";
        }
    } else {
        echo "Lỗi: Không thể thêm sản phẩm.";
    }

    return $sql;
}

function insert_bienthe($ma_san_pham, $mau_sac, $so_luong)
{
    $sql = "INSERT INTO bienthe (ma_san_pham, mau_sac, so_luong) 
            VALUES ('$ma_san_pham', '$mau_sac', $so_luong)";
    pdo_execute($sql);
}
function delete_sanpham($ma_san_pham)
{
    $sql = "delete from sanpham where ma_san_pham=" . $ma_san_pham;
    pdo_execute($sql);
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by ma_san_pham desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $ma_danh_muc = 0)
{
    $sql = "select * from sanpham where 1 ";
    if ($kyw != "") {
        $sql .= " and ten_san_pham like '%" . $kyw . "%'";
    }
    if ($ma_danh_muc > 0) {
        $sql .= " and ma$ma_danh_muc ='" . $ma_danh_muc . "'";
    }
    $sql .= "order by ma_san_pham asc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($ma_danh_muc)
{
    if ($ma_danh_muc > 0) {
        $sql = "select * from danhmucsanpham where ma_san_pham=" . $ma_danh_muc;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_san_pham;
    } else {
        return "";
    }
}
// function loadone_sanpham($ma_san_pham)
// {
//     $sql = "select * from sanpham where ma_san_pham=" . $ma_san_pham;
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
function loadone_mausac($ma_san_pham)
{
    $sql_color = "SELECT mau_sac , so_luong FROM bienthe WHERE ma_san_pham = '$ma_san_pham'";
    $colors = pdo_query($sql_color);
    return $colors;
}
// function load_sanpham_cungloai($ma_san_pham,$ma_danh_muc){
//     $sql="select * from sanpham where ma_danh_muc=".$ma_danh_muc." AND ma_san_pham <> ".$ma_san_pham;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function update_sanpham($ma_san_pham, $ten_san_pham, $hinh, $gia, $mo_ta, $so_luong, $mau_sac)
{
    // Nếu không có hình mới, bỏ qua trường anh_san_pham
    if (empty($hinh)) {
        $sql = "UPDATE sanpham 
                SET ten_san_pham = '$ten_san_pham', 
                    gia = '$gia', 
                    mo_ta = '$mo_ta'
                WHERE ma_san_pham = '$ma_san_pham'";
    } else {
        $sql = "UPDATE sanpham 
                SET ten_san_pham = '$ten_san_pham', 
                    anh_san_pham = '$hinh', 
                    gia = '$gia', 
                    mo_ta = '$mo_ta'
                WHERE ma_san_pham = '$ma_san_pham'";
    }
    pdo_execute($sql);

    // Xóa các biến thể cũ và thêm các biến thể mới vào bảng bienthe
    $sql_delete = "DELETE FROM bienthe WHERE ma_san_pham = '$ma_san_pham'";
    pdo_execute($sql_delete);

    if (is_array($mau_sac) && count($mau_sac) > 0) {
        foreach ($mau_sac as $color_value) {
            $sql_variant = "INSERT INTO bienthe (ma_san_pham, mau_sac, so_luong) 
                            VALUES ('$ma_san_pham', '$color_value', '$so_luong')";
            pdo_execute($sql_variant);
        }
    }
}

function loadall_product_home()
{
    $sql = "SELECT 
    sanpham.ma_san_pham,
    sanpham.ten_san_pham,
    sanpham.anh_san_pham,
    sanpham.gia,
    GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
FROM 
    sanpham
INNER JOIN 
    bienthe 
ON 
    sanpham.ma_san_pham = bienthe.ma_san_pham
 GROUP BY 
    sanpham.ma_san_pham
ORDER BY 
    sanpham.ma_san_pham DESC";
    $list_product = pdo_query($sql);
    return $list_product;
}
function loadall_product_iphone()
{
    $sql = "SELECT 
                sanpham.ma_san_pham,
                sanpham.ten_san_pham,
                sanpham.anh_san_pham,
                sanpham.gia,
                GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
            FROM 
                sanpham
            INNER JOIN 
                bienthe 
            ON 
                sanpham.ma_san_pham = bienthe.ma_san_pham
            WHERE 
                sanpham.ma_danh_muc = 1
            GROUP BY 
                sanpham.ma_san_pham
            ORDER BY 
                sanpham.ma_san_pham DESC";
    $list_product = pdo_query($sql);
    return $list_product;
}

function loadall_product_samsung()
{
    $sql = "SELECT 
                sanpham.ma_san_pham,
                sanpham.ten_san_pham,
                sanpham.anh_san_pham,
                sanpham.gia,
                GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
            FROM 
                sanpham
            INNER JOIN 
                bienthe 
            ON 
                sanpham.ma_san_pham = bienthe.ma_san_pham
            WHERE 
                sanpham.ma_danh_muc = 2
            GROUP BY 
                sanpham.ma_san_pham
            ORDER BY 
                sanpham.ma_san_pham DESC";
    $list_product = pdo_query($sql);
    return $list_product;
}

function loadall_shopiphone()
{
    $sql = "SELECT 
                sanpham.ma_san_pham,
                sanpham.ten_san_pham,
                sanpham.anh_san_pham,
                sanpham.gia,
                GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
            FROM 
                sanpham
            INNER JOIN 
                bienthe 
            ON 
                sanpham.ma_san_pham = bienthe.ma_san_pham
            WHERE 
                sanpham.ma_danh_muc = 1
            GROUP BY 
                sanpham.ma_san_pham
            ORDER BY 
                sanpham.ma_san_pham DESC";
    $list_product = pdo_query($sql);
    return $list_product;
}

function loadall_shopsamsung()
{
    $sql = "SELECT 
                sanpham.ma_san_pham,
                sanpham.ten_san_pham,
                sanpham.anh_san_pham,
                sanpham.gia,
                GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
            FROM 
                sanpham
            INNER JOIN 
                bienthe 
            ON 
                sanpham.ma_san_pham = bienthe.ma_san_pham
            WHERE 
                sanpham.ma_danh_muc = 2
            GROUP BY 
                sanpham.ma_san_pham
            ORDER BY 
                sanpham.ma_san_pham DESC";
    $list_product = pdo_query($sql);
    return $list_product;
}

function loadall_shophuawei()
{
    $sql = "SELECT 
                sanpham.ma_san_pham,
                sanpham.ten_san_pham,
                sanpham.anh_san_pham,
                sanpham.gia,
                GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
            FROM 
                sanpham
            INNER JOIN 
                bienthe 
            ON 
                sanpham.ma_san_pham = bienthe.ma_san_pham
            WHERE 
                sanpham.ma_danh_muc = 3
            GROUP BY 
                sanpham.ma_san_pham
            ORDER BY 
                sanpham.ma_san_pham DESC";
    $list_product = pdo_query($sql);
    return $list_product;
}

function loadone_sanpham($ma_san_pham)
{
    $sql = "SELECT 
                sanpham.ma_san_pham,
                sanpham.ten_san_pham,
                sanpham.anh_san_pham,
                sanpham.mo_ta,
                sanpham.ma_danh_muc,
                sanpham.gia,
                GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
            FROM 
                sanpham
            INNER JOIN 
                bienthe 
            ON 
                sanpham.ma_san_pham = bienthe.ma_san_pham
            WHERE 
                sanpham.ma_san_pham = $ma_san_pham
            GROUP BY 
                sanpham.ma_san_pham
            ORDER BY 
                sanpham.ma_san_pham DESC";
    $oneproduct = pdo_query_one($sql);
    return $oneproduct;
}


function load_product_cungloai($ma_danh_muc,$current_product_id)
{
    $sql = "SELECT 
                sanpham.ma_san_pham,
                sanpham.ten_san_pham,
                sanpham.anh_san_pham,
                sanpham.gia,
                GROUP_CONCAT(bienthe.mau_sac) AS mau_sac
            FROM 
                sanpham
            INNER JOIN 
                bienthe 
            ON 
                sanpham.ma_san_pham = bienthe.ma_san_pham
            WHERE 
                sanpham.ma_danh_muc = $ma_danh_muc
                AND sanpham.ma_san_pham != $current_product_id
            GROUP BY 
                sanpham.ma_san_pham
            ORDER BY 
                sanpham.ma_san_pham DESC";
    $oneproduct = pdo_query($sql);
    return $oneproduct;
}