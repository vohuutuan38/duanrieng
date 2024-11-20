<?php

function insert_donhang($ma_nguoi_dung, $tong_tien,$pttt) {
    $ngay_dat = date('Y-m-d H:i:s');  // Lấy ngày giờ hiện tại
    $trang_thai = 1;  // Giả sử trạng thái đơn hàng là 1 (chờ xử lý)

    // Câu lệnh SQL để chèn dữ liệu vào bảng donhang
    $sql = "INSERT INTO donhang (ma_nguoi_dung, ngay_dat, tong_tien, trang_thai,pttt) VALUES (?, ?, ?, ?,?)";

    // Kết nối cơ sở dữ liệu và thực thi câu lệnh
    $conn = pdo_get_connection(); // Lấy kết nối PDO
    if ($conn) {
        $stmt = $conn->prepare($sql);
        $stmt->execute([$ma_nguoi_dung, $ngay_dat, $tong_tien, $trang_thai, $pttt]);

        // Trả về ID của đơn hàng vừa tạo
        return $conn->lastInsertId(); // Gọi lastInsertId từ kết nối PDO
    } else {
        return false;
    }
}


function insert_chitietdonhang($ma_don_hang, $item)
{
    // Câu lệnh SQL để lưu chi tiết đơn hàng
    $sql = "INSERT INTO chitietdonhang (ma_don_hang, ma_san_pham, ten_san_pham, so_luong, mau_sac, gia, thanh_tien) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";  // Sử dụng dấu ? thay vì :param_name
    
    // Thực thi câu lệnh với các tham số an toàn
    pdo_execute($sql, $ma_don_hang, $item['id'], $item['ten'], $item['so_luong'], $item['mau_sac'], $item['gia'], $item['so_luong'] * $item['gia']);
}

function get_donhang_by_user($ma_nguoi_dung) {
    $sql = "SELECT * FROM donhang WHERE ma_nguoi_dung = $ma_nguoi_dung ORDER BY ngay_dat DESC"; // Lọc theo ma_nguoi_dung và sắp xếp theo ngày đặt
    $list_donhang = pdo_query($sql);
    return $list_donhang;
}

function get_all_donhangs() {
    $sql = "SELECT donhang.*, nguoidung.ten 
            FROM donhang 
            JOIN nguoidung ON donhang.ma_nguoi_dung = nguoidung.ma_nguoi_dung
            ORDER BY ngay_dat DESC";
    return pdo_query($sql);
}

function get_donhang_by_id($id) {
    $sql = "SELECT donhang.*, nguoidung.ten FROM donhang JOIN nguoidung ON donhang.ma_nguoi_dung = nguoidung.ma_nguoi_dung WHERE ma_don_hang = ?";
    return pdo_query_one($sql, $id);
}

function get_chitiet_donhang_by_donhang($id) {
    $sql = "SELECT * FROM chitietdonhang WHERE ma_don_hang = ?";
    return pdo_query($sql, $id);
}

function update_trang_thai_donhang($id, $trang_thai) {
    $sql = "UPDATE donhang SET trang_thai = ? WHERE ma_don_hang = ?";
    pdo_execute($sql, $trang_thai, $id);
}





?>