<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- nhập content -->
                <div class="row formtitle"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        MÃ LOẠI <br>
                        <input type="text" name="ma_danh_muc" disabled>
                    </div>
                    <div class="row mb10">
                        TÊN LOẠI <br>
                        <input type="text" name="ten_danh_muc">
                    </div>
                    <div class="row mb10">
                        MÔ TẢ <br>
                        <input type="text" name="mo_ta">
                    </div>
                    <div class="row mb20 ">
                        <input type="submit" name="themmoi" value="Thêm mới" style="width: auto;">
                        <input type="reset" value="Nhập lại" style="width: auto;">
                        <a href="index.php?act=lisdm"><input type="button" value="danhsach"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                    ?>
                </form>
            </div>
        </div>
                <!-- nhập content -->
            </div>
        </div>
    </div>
</div>