<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- nhập content -->
                <div class="row"></div>
            <div class="row formtitle"><h1>THÊM MỚI SẢN PHẨM</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10 input-group mb-3  ">
                        Danh mục<br>
                        <select name="ma_danh_muc" >
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$ma_danh_muc.'" style="width: auto;">'.$ten_danh_muc. '</option>';
                            }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10 input-group mb-3">
                        TÊN SẢN PHẨM <br>
                        <input type="text" name="ten_san_pham"  >
                    </div>
                    <div class="row mb10 input-group mb-3">
                        GIÁ <br>
                        <input type="text" name="gia" >
                    </div>
                    <div class="row mb10 input-group mb-3">
                        HÌNH <br>
                        <input type="file" name="anh_san_pham">
                    </div>
                    <div class="row mb10 input-group mb-3">
                        MÔ TẢ<br>
                       <textarea name="mo_ta" id="" ></textarea>
                    </div>
                    <div class="row mb10 input-group mb-3">
                        SỐ LƯỢNG <br>
                        <input type="text" name="so_luong" >
                    </div>
                    <div class="row mb20">
                        <input type="submit" name="themmoi" value="Thêm mới" style="width: auto;"> 
                        <input type="reset" value="Nhập lại" style="width: auto;">
                        <a href="index.php?act=listsp"><input type="button" value="danhsach"></a>
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