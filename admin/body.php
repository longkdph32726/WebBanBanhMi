

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Xem trang web</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm bán chạy</h6>
                                </div>
                                <div class="card-body">
                                    <!-- Bắt đầu nội dung -->
                <div class="container-fluid">
                    <!-- Nội dung -->
                    <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Lượt mua</th>
                            <th scope="col">Lượt xem</th>                   
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($listthongkesp as $thongkesp) {
                                    extract($thongkesp);
                                    echo '<tr>
                                    <th scope="row">'.$id_sp.'</th>
                                    <td>'.$ten_sp.'</td>
                                    <td><img style="width: 100px;height: 100px;" src="../img/'.$anh.'" alt=""></td>
                                    <td>'.$gia.'</td>
                                    <td>'.$mota.'</td>
                                    <td>'.$luotmua.'</td>
                                    <td>'.$luotxem.'</td>
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                
                <!-- Content Row -->
                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">
                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Danh sách tài khoản thường xuyên mua hàng</h6>
                            </div>
                            <div class="card-body">
                                <!-- Bắt đầu nội dung -->
                <div class="container-fluid">
                    <!-- Nội dung -->
                    <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên tài khoản</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Email</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($listthongketk as $thongketk) {
                                    extract($thongketk);
                                    echo '<tr>
                                    <th scope="row">'.$id_tk.'</th>
                                    <td>'.$user.'</td>
                                    <td><img style="width: 100px;height: 100px;" src="../img/'.$anh.'" alt=""></td>
                                    <td>'.$sdt.'</td>
                                    <td>'.$email.'</td>
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                    </div>
                    </div>
                </div>
                </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 