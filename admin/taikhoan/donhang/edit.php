<?php
extract($one_dh);
?>
<div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
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

                <!-- Bắt đầu nội dung -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">SỬA ĐƠN HÀNG</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Xem trang Web</a>
                    </div>

                    <!-- Nội dung -->
                    <div class="row">

                    <form action="index.php?act=updatedh&&id=<?=$id_dh?>&&id_tk=<?=$_GET['id_tk'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">

                        <div class="form-group">
                            <select name="trangthai" class="form-control">
                                <option value="0">Đã đặt hàng</option>
                                <option value="1">Đã lấy hàng</option>
                                <option value="2">Đang giao</option>
                                <option value="3">Đã nhận hàng</option>
                            </select>
                        </div>
                        <input type="hidden" name="id_tk" value="<?=$id_tk ?>">

                        
                        <input type="submit" class="form-control btn btn-info" name="suadonhang" id="exampleInputPassword1" value="Sửa">
                    </form>

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