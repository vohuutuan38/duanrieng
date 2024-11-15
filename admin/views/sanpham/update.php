<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
            <?php 
if(is_array($sanpham)){
    extract($sanpham);
}


$hinhpath="../uploads/".$anh_san_pham;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='80px'>";
}else{
    $hinh = "no photo";
}
?>
<div class="row">
            <div class="row formtitle"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                   
            <div class="row mb10">
                    <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                     <?php 
                     foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($ma_danh_muc==$danhmuc['ma_danh_muc']) $s="selected"; else $s="";
                          echo '<option value="'.$danhmuc['ma_danh_muc'].'" '.$s.'>'.$danhmuc['ten_danh_muc'].'</option>';
                     }
                     ?>
                  
                   </select>
                    </div>
                    <div class="row mb10">
                        TÊN SẢN PHẨM <br>
                       <input type="text" name="ten_san_pham" value="<?=$ten_san_pham?>">
                     
                    </div>
                    <div class="row mb10">
                        GIÁ <br>
                        <input type="text" name="giasp" value="<?=$gia?>">
                    </div>
                    <div class="row mb10">
                        HÌNH <br>
                        <input type="file" name="hinh">
                        <?=$hinh?>
                        
                    </div>
                    <div class="row mb10">
                        MÔ TẢ<br>
                       <textarea name="mota" cols="30" rows="10"><?=$mo_ta?></textarea>
                    </div>
                   
                    <div class="row mb20">
                        <input type="hidden" name="id" value="<?=$id?>" >
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
        </div>
    </div>
</div>