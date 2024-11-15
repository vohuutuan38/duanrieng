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


?>