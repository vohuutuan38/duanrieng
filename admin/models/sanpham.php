<?php 
function insert_sanpham($ten_san_pham,$hinh,$giasp,$mo_ta,$so_luong,$ma_danh_muc){
    $sql="insert into sanpham(ten_san_pham,anh_san_pham,gia,mo_ta,so_luong,ma_danh_muc) values('$ten_san_pham','$hinh','$giasp','$mo_ta','$so_luong','$ma_danh_muc')";
    pdo_execute($sql);
}
function delete_sanpham($ma_san_pham){
    $sql="delete from sanpham where ma_san_pham=".$ma_san_pham;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by ma_san_pham desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="",$ma_danh_muc=0){
    $sql="select * from sanpham where 1 ";
    if($kyw!=""){
        $sql.=" and ten_san_pham like '%".$kyw."%'";
    }
    if($ma_danh_muc>0){
        $sql.=" and ma$ma_danh_muc ='".$ma_danh_muc."'";
    }
    $sql.= "order by ma_san_pham asc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($ma_danh_muc){
    if($ma_danh_muc>0){
    $sql="select * from danhmucsanpham where ma_san_pham=".$ma_danh_muc;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $ten_san_pham;
}else{
    return "";
}
}
function loadone_sanpham($ma_san_pham){
    $sql="select * from sanpham where ma_san_pham=".$ma_san_pham;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($ma_san_pham,$ma_danh_muc){
    $sql="select * from sanpham where ma_danh_muc=".$ma_danh_muc." AND ma_san_pham <> ".$ma_san_pham;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($ma_danh_muc, $ten_san_pham, $hinh, $giasp, $mo_ta, $ma_san_pham) {
    if ($hinh) {
        // Nếu có ảnh mới, cập nhật ảnh mới
        $sql = "UPDATE sanpham SET ma_danh_muc='$ma_danh_muc', ten_san_pham='$ten_san_pham', anh_san_pham='$hinh', gia='$giasp', mo_ta='$mo_ta' WHERE ma_san_pham=$ma_san_pham";
    } else {
        // Nếu không có ảnh mới, không thay đổi ảnh
        $sql = "UPDATE sanpham SET ma_danh_muc='$ma_danh_muc', ten_san_pham='$ten_san_pham', gia='$giasp', mo_ta='$mo_ta' WHERE ma_san_pham=$ma_san_pham";
    }
    pdo_execute($sql);
}

?>
