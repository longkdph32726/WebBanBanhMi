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
                        <h1 class="h3 mb-0 text-gray-800">DANH MỤC</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Xem trang Web</a>
                    </div>

                    <!-- Nội dung -->
                    <div class="row">
                        <?php
                            
                        ?>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Hành động</th>                     
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($listdm as $dm){
                                extract($dm);
                                echo ' <tr>
                                <th scope="row">'.$id_dm.'</th>
                                <td>'.$ten_dm.'</td>
                                <td><img style="width: 100px;height: 100px;" src="../img/'.$anh_dm.'" alt=""></td>
                                <td>
                                    <a href="index.php?act=editdanhmuc&&id='.$id_dm.'" class="btn btn-primary">Sửa</a>
                                    <a href="index.php?act=deletedanhmuc&&id='.$id_dm.'" class="btn btn-primary">Xóa</a>
                                </td>
                                </tr>';
                            }
                            ?>

                    



                    </div>

                    <a href="index.php?act=themdanhmuc" class="btn btn-primary">Thêm Danh mục</a>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- Kết thúc Nội dung -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nhóm 14 -- Du an 1</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        </div>