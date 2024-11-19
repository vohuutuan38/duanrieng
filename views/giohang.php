<main>

<?php
if (!empty($_SESSION['cart'])) {
    echo' 
     <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
      <div class="row">
                        <div class="col-lg-12">
                         <div class="cart-table table-responsive">
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>Sản phẩm</th>
    <th>Ảnh Sản Phẩm</th>
    <th>Màu</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    <th>Hành động</th>
    </tr>
    </thead>
    <tbody>';
    foreach ($_SESSION['cart'] as $item) {
        $tong_tien = $item['gia'] * $item['so_luong'];
        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['ten']) . '</td>';
        echo '<td><img src="'.$item['anh_san_pham'].'" alt="" width = "220px" height = "150px"></td>';
        echo '<td>' . htmlspecialchars($item['mau_sac']) . '</td>';
        echo '<td>' . number_format($item['gia']) . ' đ</td>';
        echo '<td>' . $item['so_luong'] . '</td>';
        echo '<td>' . number_format($tong_tien) . ' đ</td>';
        // echo '<td><a href="index.php?act=removefromcart&id=' . $item['id'] . '&color=' . urlencode($item['mau_sac']) . '" class="btn btn-warning">Xóa</a></td>';
        echo '  <td class="pro-remove"><a href="index.php?act=removefromcart&id=' . $item['id'] . '&color=' . urlencode($item['mau_sac']) . '"><i class="fa fa-trash-o"></i></a></td>';
        echo '</tr>';
    }
    echo '</tbody>
     </table>
     </div>
    </div>
                    </div>
                     </div>
            </div>
        </div>';
} else {
    echo '<p>Giỏ hàng của bạn đang trống!</p>';
}
?>
</main>
