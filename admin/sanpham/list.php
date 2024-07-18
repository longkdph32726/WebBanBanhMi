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
                        <h1 class="h3 mb-0 text-gray-800">SẢN PHẨM</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Xem trang Web</a>
                    </div>

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
                            <th scope="col">Id danh mục</th>
                            <th scope="col">ID ưu đãi</th>
                            <th scope="col">Giá trị ưu đãi</th>
                            <th scope="col">Hành động</th>                     
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($listsp as $sp) {
                                    extract($sp);
                                    echo '<tr>
                                    <th scope="row">'.$id_sp.'</th>
                                    <td>'.$ten_sp.'</td>
                                    <td><img style="width: 100px;height: 100px;" src="../img/'.$anh.'" alt=""></td>
                                    <td>'.$gia.'</td>
                                    <td>'.$mota.'</td>
                                    <td>'.$luotmua.'</td>
                                    <td>'.$id_dm.'</td>
                                    <td>'.$ud.'</td>
                                    <td>'.$giatri_ud.'</td>
                                    <td>
                                        <a href="index.php?act=editsanpham&&id='.$id_sp.'" class="btn btn-primary">Sửa</a>
                                        <a href="index.php?act=xoasanpham&&id='.$id_sp.'" class="btn btn-primary">Xóa</a>
                                        <a href="index.php?act=chitietsanpham&&id='.$id_sp.'" class="btn btn-primary">Xem Chi tiết</a>
                                    </td>
                                    </tr>
                                    ';
                                }
                            ?>
                            
                        </tbody>
                    </table>
                    <a href="index.php?act=them" class="btn btn-primary">Thêm Sản phẩm</a>



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