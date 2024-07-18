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
                        <h1 class="h3 mb-0 text-gray-800">Tài khoản</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Xem trang Web</a>
                    </div>

                    <!-- Nội dung -->
                    <div class="row">

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên tài khoản</th>
                            <th scope="col">Mật khẩu</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">SDT</th>
                            <th scope="col">EMail</th>
                            <th scope="col">Role</th>
                            
                            <th scope="col">Hành động</th>                     
                            </tr>
                        </thead>

                        <?php
                            foreach($listtk as $tk){
                                extract($tk);
                                if($rolee == 0){
                                    $quyen = "NGười dùng";
                                }else{
                                    $quyen = "Admin";
                                }
                                echo '<tr>
                                <th scope="row">'.$id_tk.'</th>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td><img style="width:50px;height:50px;" src="../img/'.$anh.'" alt="no photo"></td>
                                <td>'.$sdt.'</td>
                                <td>'.$email.'</td>
                                <td>'.$quyen.'</td>
                                <td>
                                    <a href="index.php?act=edittaikhoan&&id='.$id_tk.'" class="btn btn-primary">Sửa</a>
                                    <a href="index.php?act=xoataikhoan&&id='.$id_tk.'" class="btn btn-primary">Xóa</a>
                                    <a href="index.php?act=donhang&&id_tk='.$id_tk.'" class="btn btn-primary">Đơn hàng</a>
                                </td>';
                            }
                        ?>
                    </table>
                    <a href="index.php?act=themtaikhoan" class="btn btn-primary">Thêm tài khoản</a>



                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- Kết thúc Nội dung -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nhóm 2 -- Xưởng thầy Long</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        </div>