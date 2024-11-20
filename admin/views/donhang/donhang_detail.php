<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <!-- nhập content -->
                <h2>Chi tiết đơn hàng: <?= $donhang['ma_don_hang'] ?></h2>
                <div class="col-lg-6">
                    
                    <table class="table table-bordered">

                        <tr>
                            <th>Người đặt</th>
                            <td><?= $donhang['ten'] ?></td>
                        </tr>

                        <tr>
                            <th>Ngày đặt</th>
                            <td><?= $donhang['ngay_dat'] ?></td>
                        </tr>

                        <tr>
                            <th>Tổng tiền</th>
                            <td><?= number_format($donhang['tong_tien'], 0, ',', '.') ?> VNĐ</td>
                        </tr>

                        <tr>
                            <th>Trạng thái</th>
                            <td> <?=
                                    $donhang['trang_thai']
                                    ?></td>
                        </tr>

                    </table>
                </div>
              
                <h3>Sản phẩm trong đơn hàng</h3>
                <table class="table table-bordered table-striped" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Màu sắc</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($chitiets as $item): ?>
                            <tr>
                                <td><?= $item['ten_san_pham'] ?></td>
                                <td><?= $item['so_luong'] ?></td>
                                <td><?= $item['mau_sac'] ?></td>
                                <td><?= number_format($item['gia'], 0, ',', '.') ?> VNĐ</td>
                                <td><?= number_format($item['thanh_tien'], 0, ',', '.') ?> VNĐ</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="index.php?act=admin_donhang">Quay Lại</a>

                <!-- nhập content -->
            </div>
        </div>
    </div>
</div>