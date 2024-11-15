<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <?php
                if (is_array($sanpham)) {
                    extract($sanpham);
                }


                $hinhpath = "../uploads/" . $anh_san_pham;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='290px' width='80px' >";
                } else {
                    $hinh = "no photo";
                }
                ?>
                <div class="row">
                    <div class="row formtitle">
                        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
                    </div>
                    <div class="row formcontent">
                        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="anh_san_pham_cu" value="<?php echo $sanpham['anh_san_pham']; ?>">
                            <div class="row mb10">
                                <select name="iddm">
                                    <option value="0" selected>Tất cả</option>
                                    <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        if ($ma_danh_muc == $danhmuc['ma_danh_muc']) $s = "selected";
                                        else $s = "";
                                        echo '<option value="' . $danhmuc['ma_danh_muc'] . '" ' . $s . '>' . $danhmuc['ten_danh_muc'] . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="row mb10">
                                TÊN SẢN PHẨM <br>
                                <input type="text" name="ten_san_pham" value="<?= $ten_san_pham ?>">

                            </div>
                            <div class="row mb10">
                                GIÁ <br>
                                <input type="text" name="gia" value="<?= $gia ?>">
                            </div>
                            <div class="row mb10">
                                HÌNH <br>
                                <input type="file" name="anh_san_pham">
                                <?= $hinh ?>

                            </div>
                            <div class="row mb10">
                                MÔ TẢ<br>
                                <textarea name="mo_ta" cols="30" rows="10"><?= $sanpham['mo_ta'] ?></textarea>
                            </div>
                            <div class="row mb10 input-group mb-3">
                                MÀU SẮC <br>
                                <label><input type="checkbox" name="mau_sac[]" value="black" <?php echo (in_array('black', $mau_sac) ? 'checked' : ''); ?>> Đen <span style="display: inline-block; width: 17px; height: 17px; background-color:black ; border: 1px solid #000; margin-right: 5px;"></span></label><br>
                                <label><input type="checkbox" name="mau_sac[]" value="white" <?php echo (in_array('white', $mau_sac) ? 'checked' : ''); ?>> Trắng <span style="display: inline-block; width: 17px; height: 17px; background-color:white ; border: 1px solid #000; margin-right: 5px;"></span> </label><br>
                                <label><input type="checkbox" name="mau_sac[]" value="yellow" <?php echo (in_array('yellow', $mau_sac) ? 'checked' : ''); ?>> Vàng <span style="display: inline-block; width: 17px; height: 17px; background-color:yellow ; border: 1px solid #000; margin-right: 5px;"></span></label><br>
                                <label><input type="checkbox" name="mau_sac[]" value="blue" <?php echo (in_array('blue', $mau_sac) ? 'checked' : ''); ?>> Xanh <span style="display: inline-block; width: 17px; height: 17px; background-color:blue ; border: 1px solid #000; margin-right: 5px;"></span></label><br>
                            </div>
                        
                            <div class="row mb10 input-group mb-3">
                                SỐ LƯỢNG <br>
                                <input type="text" name="so_luong" value="<?php echo  $color['so_luong']?>">
                                   
                            </div>
                           

                            <div class="row mb20">
                                <input type="hidden" name="ma_san_pham" value="<?= $ma_san_pham ?>">
                                <input type="submit" name="capnhat" value="Cập nhật">
                                <input type="reset" value="Nhập lại">
                                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                            </div>
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
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