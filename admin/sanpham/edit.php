<?php 
    extract($one_sp);
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
                        <h1 class="h3 mb-0 text-gray-800">SỬA SẢN PHẨM</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Xem trang Web</a>
                    </div>

                    <!-- Nội dung -->
                    <div class="row">

                    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" value="<?=$ten_sp?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Ảnh</label>
                            <input type="file" class="form-control" name="anh" value="<?=$anh?>" id="exampleInputPassword1" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá</label>
                            <input type="text" class="form-control" name="gia" value="<?=$gia?>" id="exampleInputPassword1" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <input type="text" class="form-control" name="mota" value="<?=$mota?>" id="exampleInputPassword1" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục</label>
                            <select name="id_dm" class="form-control" id="exampleInputEmail1">
                                <?php
                                    $iddm_sp = $id_dm;
                                    foreach ($listdm as $dm) {
                                        extract($dm);
                                        if($id_dm == $iddm_sp){
                                            $a = "";
                                        }

                                    
                                ?>
                                <option value="<?=$id_dm ?>"><?=$ten_dm ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Ưu đãi</label>
                            <input type="text" class="form-control" name="uudai" value="<?=$ud?>" id="exampleInputPassword1" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá trị ưu đãi</label>
                            <input type="text" class="form-control" name="giatri_ud" value="<?=$giatri_ud?>" id="exampleInputPassword1" >
                        </div>

                        <input type="hidden" name="id_sp" value="<?=$id_sp ?>">
                        <input type="submit" class="form-control btn btn-info" name="suasanpham" id="exampleInputPassword1" value="Sửa">
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