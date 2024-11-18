<?php

function load_all_account()
{
  $sql = "SELECT * FROM nguoidung ORDER BY ma_nguoi_dung asc ";
  $list_account = pdo_query($sql);
  return $list_account;
}

function updatetrangthai($new_status, $id)
{
    $sql = "UPDATE nguoidung SET trang_thai = $new_status WHERE ma_nguoi_dung = $id";
    pdo_execute($sql);
}

function insert_user($ten,$email,$mat_khau,$hinh,$so_dien_thoai,$dia_chi)
{
    $sql = "INSERT INTO nguoidung (ten, email, mat_khau, anh_dai_dien, so_dien_thoai,dia_chi) 
            VALUES ('$ten','$email','$mat_khau','$hinh','$so_dien_thoai','$dia_chi')";
    pdo_execute($sql);
}


function findByEmail($email)
{
  $sql = "SELECT * FROM nguoidung WHERE email = '$email'";
  $account = pdo_query_one($sql);
  return $account;
}

function emailExists($email) {
   $sql = "SELECT COUNT(*) FROM nguoidung WHERE email = '$email'";
   $account_user = pdo_query_one($sql);
   return $account_user;
}


?>