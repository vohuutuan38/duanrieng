<?php
function loadone_binhluan($id)
{
    $sql = "SELECT 
    sanpham.ten_san_pham,
    nguoidung.ten,
    binhluan.noi_dung,
    binhluan.danh_gia,
    binhluan.ngay_binh_luan
FROM 
    binhluan
INNER JOIN 
    sanpham 
ON 
    binhluan.ma_san_pham = sanpham.ma_san_pham
INNER JOIN 
    nguoidung 
ON 
    binhluan.ma_nguoi_dung = nguoidung.ma_nguoi_dung
WHERE 
    binhluan.ma_san_pham = " . $id;
    $listcomments = pdo_query($sql);
    return $listcomments;
}




// function delete_danhmuc($id){
//     $sql="delete from danhmucsanpham where ma_danh_muc=".$id;
//     pdo_execute($sql);
// }
// function loadall_danhmuc(){
//     $sql="select * from danhmucsanpham ";
//     $listdanhmuc = pdo_query($sql);
//     return $listdanhmuc;
// }
// function loadone_danhmuc($id){
//     $sql="select * from danhmucsanpham where ma_danh_muc=".$id;
//     $dm = pdo_query_one($sql);
//     return $dm;
// }
// function update_danhmuc($madanhmuc, $tendanhmuc,$mota){
//     $sql="update danhmucsanpham set ten_danh_muc='".$tendanhmuc."' ,mo_ta='".$mota."'  where ma_danh_muc=".$madanhmuc;
//     pdo_execute($sql);
// }
