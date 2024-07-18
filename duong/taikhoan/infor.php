    <!-- ======= Chefs Section ======= -->
    <section id="uudai" class="uudai">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <!-- <a href="index.php?act=dangxuat&&id_tk=" class="btn btn-info">Đăng xuất</a> -->
          <?php
            extract($infor_user);
          ?>

        <form action="index.php?act=thaydoithongtintaikhoan&&id_tk=<?=$id_tk ?>" method="POST" enctype="multipart/form-data" id="inforuser">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tên</label>
              <input type="text" class="form-control" value="<?=$user ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
              <input type="text" class="form-control" value="<?=$pass ?>">
            </div>
            <div class="mb-3 form-check">
              <img style="width: 200px;height: 200px;" src="../img/<?=$anh ?>" alt="">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">SDT</label>
              <input type="text" class="form-control" value="<?=$sdt ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="text" class="form-control" value="<?=$email ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Thay đổi thông tin tài khoản">
      </form>

        </div>





        <?php
        $idtk = (int)$id_tk;
        if(isset($_GET['trangthai'])){
          if(empty($_GET['trangthai'])){
            $i = 0;
          }
          $i = $_GET['trangthai'];
          $tt[$i] = 'success';
        }
        ?>
        <div class="row">
          <h1 style="text-align: center;">Trạng thái đơn hàng</h1>
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu" style="display: flex;list-style-type: none;">
              <!-- <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li> -->
              <li style="margin:50px;"><a class="btn btn-<?=$tt[0] ?>" style="border: 1px solid pink;" href="index.php?act=trangthaidonhang&&trangthai=0&&id_tk='<?=$idtk ?>'#donhang"><strong>Đã đặt hàng</strong></a></li>
              <li style="margin:50px;"><a class="btn btn-<?=$tt[1] ?>" style="border: 1px solid pink;" href="index.php?act=trangthaidonhang&&trangthai=1&&id_tk='<?=$idtk ?>'#donhang"><strong>Đã lấy hàng</strong></a></li>
              <li style="margin:50px;"><a class="btn btn-<?=$tt[2] ?>" style="border: 1px solid pink;" href="index.php?act=trangthaidonhang&&trangthai=2&&id_tk='<?=$idtk ?>'#donhang"><strong>Đang giao hàng</strong></a></li>
              <li style="margin:50px;"><a class="btn btn-<?=$tt[3] ?>" style="border: 1px solid pink;" href="index.php?act=trangthaidonhang&&trangthai=3&&id_tk='<?=$idtk ?>'#donhang"><strong>Đã nhận được hàng</strong></a></li>
              <li style="margin:50px;"><a class="btn btn-<?=$tt[4] ?>" style="border: 1px solid pink;" href="index.php?act=trangthaidonhang&&trangthai=4&&id_tk='<?=$idtk ?>'#donhang"><strong>Lịch sử mua hàng</strong></a></li>

            </ul>
          </div>
        </div>





        
        
        <div class="row menu-container" id="donhang">

        <?php
        
            foreach($listdonhang as $dh){
                extract($dh);
                if($trangthai==2){
                  $danhanduochang = '<a class="btn btn-info" href="index.php?act=danhanduochang&&id_dh='.$id_dh.'&&trangthai=3&&id_tk='.$idtk.'#donhang">Đã nhận hàng</a>';
                }elseif($trangthai==3){
                  $danhanduochang = '<a class="btn btn-info" href="index.php?act=danhgia&&id_dh='.$id_dh.'&&trangthai=3&&id_tk='.$idtk.'&&id_sp='.$id_sp.'#binhluan">Đánh Giá</a>';
                }else{
                  $danhanduochang = '';
                }
                echo '<div class="col-lg-6 menu-item filter-starters">
                <img style="width: 100px;height: 100px;border-radius: 30px;" src="../img/'.$anh.'"  alt="">
                <div class="menu-content">
                  <a style="font-weight: 700;" href="index.php?act=chitietsanpham&&idsp='.$id_sp.'&&iddm='.$id_dm.'&&#ctsp">'.$ten_sp.'</a><span>'.$gia.'$</span>
                </div>
                <div class="menu-ingredients">
                  '.$hovaten.'
                </div>
                <div class="menu-ingredients">
                  '.$diachi.'
                </div>
                <div class="menu-ingredients">
                '.$sdt_dh.'
                </div>
                <div class="menu-ingredients">
                '.$danhanduochang.'
                </div>
              </div>';
            }
        ?>


        </div>

      </div>
    </section><!-- End Chefs Section -->