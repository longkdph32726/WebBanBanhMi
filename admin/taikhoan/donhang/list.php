
 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Header -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>



                    </ul>

                </nav>
                <!-- End of HEADER -->

                <!-- Bắt đầu nội dung -->
                <div class="container-fluid">

                    <!-- Tiêu đề -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Đơn hàng</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Xem trang Web</a>
                    </div>

                    <!-- Nội dung -->
                    <div class="row">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">id_tk</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Trạng thái</th>
                            
                            <th scope="col">Hành động</th>                     
                            </tr>
                        </thead>

                        <?php
                        $id_tk = $_GET['id_tk'];
                            foreach($listdh as $dh){
                                extract($dh);
                                if($trangthai == 0){
                                    $tt = "Đã đặt hàng";
                                }else if($trangthai == 1){
                                    $tt = "Đã lấy hàng";
                                }else if($trangthai == 2){
                                    $tt = "Đang giao";
                                }else if($trangthai == 3){
                                    $tt = "Đã nhận";
                                }
                                echo '<tr>
                                <th scope="row">'.$id_dh.'</th>
                                <td>'.$id_tk.'</td>
                                <td>'.$ten_sp.'</td>
                                <td>'.$hovaten.'</td>
                                <td>'.$sdt_dh.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$tt.'</td>
                                <td>
                                    <a href="index.php?act=editdonhang&&id='.$id_dh.'&&id_tk='.$id_tk.'" class="btn btn-primary">Sửa</a>
                                    <a href="index.php?act=xoadonhang&&id='.$id_dh.'&&id_tk='.$id_tk.'" class="btn btn-primary">Xóa</a>
                                </td>';
                            }
                        ?>
                    </table>
                    <!-- <a href="index.php?act=themtaikhoan" class="btn btn-primary">Thêm tài khoản</a> -->



                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- Kết thúc Nội dung -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nhóm 2 -- Xưởng thầy Long</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        </div>