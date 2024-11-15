<?php 
function insert_danhmuc($tendanhmuc,$mota){
    $sql="insert into danhmucsanpham(ten_danh_muc,mo_ta) values('$tendanhmuc','$mota')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmucsanpham where ma_danh_muc=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="select * from danhmucsanpham ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select * from danhmucsanpham where ma_danh_muc=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($madanhmuc, $tendanhmuc,$mota){
    $sql="update danhmucsanpham set ten_danh_muc='".$tendanhmuc."' ,mo_ta='".$mota."'  where ma_danh_muc=".$madanhmuc;
    pdo_execute($sql);
}
?>