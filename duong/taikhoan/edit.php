    <!-- ======= Chefs Section ======= -->
    <section id="uudai" class="uudai">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <?php
            extract($infor_user);
          ?>

        <form action="index.php?act=edituser&&id_tk=<?=$id_tk ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tên</label>
              <input type="text" class="form-control" value="<?=$user ?>" name="user">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label> <br>
              <input type="text" class="form-control" value="<?=$pass ?>" name="pass">
            </div>
            <div class="mb-3 form-check">
              <img style="width: 200px;height: 200px;" src="../img/<?=$anh ?>" alt="">
              <input type="file" class="form-control" name="anh" value="<?=$anh ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">SDT</label>
              <input type="text" class="form-control" value="<?=$sdt ?>" name="sdt">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="text" class="form-control" value="<?=$email ?>" name="email">
            </div>
            <input type="submit" class="btn btn-primary" value="Cập nhật" name="capnhat">
      </form>

        </div>


      </div>
    </section><!-- End Chefs Section -->