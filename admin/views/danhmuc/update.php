<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- nhập content -->
                <?php 
if(is_array($dm)){
    extract($dm);
}
?>
<div class="row">
            <div class="row formtitle"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                <div class="row mb10">
                        MÃ LOẠI <br>
                        <input type="text" name="ma_danh_muc" disabled value="">
                    </div>
                    <div class="row mb10">
                        TÊN LOẠI <br>
                        <input type="text" name="ten_danh_muc" value="<?php if(isset($ten_danh_muc)&&($ten_danh_muc!="")) echo $ten_danh_muc ?>">
                    </div>
                    <div class="row mb10">
                        TMÔ TẢ <br>
                        <input type="text" name="mo_ta" value="<?php if(isset($mo_ta)&&($mo_ta!="")) echo $mo_ta ?>">
                    </div>
                    <div class="row mb20">
                        <input type="hidden" name="ma_danh_muc" value="<?php if(isset($ma_danh_muc)&&($ma_danh_muc!="")) echo $ma_danh_muc ?>">
                        <input type="submit" name="capnhat" value="Cập nhật" style="width: auto;">
                        <a href="index.php?act=lisdm"><input type="button" value="danhsach"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                    ?>
                </form>
            </div>
        </div>
    </div>
                <!-- nhập content -->
            </div>
        </div>
    </div>
</div>