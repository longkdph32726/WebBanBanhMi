    <!-- ======= Chefs Section ======= -->
    <section id="datban" class="datban">
      <div class="container">

        <div class="section-title">
          <h2><span>Đặt bàn</span></h2>
          <p>Dịch vụ đặt bàn sẽ giúp khách hàng xem được các vị trí còn trống giúp tạo nên sự tiện lợi cho khách hàng khi đến thưởng thức ẩm thực của Dương Restaurant</p>
        </div>

        <div class="row">
          <?php
          $i=0;
            foreach($listban as $ban){
              extract($ban);
              
              if($trangthai==0){
                echo '            <div class="container py-5">
              <div class="row justify-content-center">
              <div class="col-md-8 col-lg-6 col-xl-4">
                  <div class="card" style="border-radius: 15px;">
                  <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                      data-mdb-ripple-color="light">
                      <a href="#!">
                      <div class="mask"></div>
                      </a>
                  </div>
                  <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                      <div>
                          <p><a href="#!" class="text-dark">Bàn số '.$vitri.'</a></p>
                          <p class="small text-muted">Loại bàn '.$loaiban.' người</p>
                      </div>
                      <div>
                          <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                          <i class="fas fa-star">Rated 4.0/5</i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          </div>
                          <p class="small text-muted"></p>
                      </div>
                      </div>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                      <p><a href="#!" class="text-dark">'. 2*$loaiban.'$</a></p>
                      <p class="text-dark">#### 00'.$i.'</p>
                      </div>
                      <p class="small text-muted">Phí phục vụ</p>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                      <a href="#!" class="text-dark fw-bold">Cancel</a>
                      <a href="index.php?act=formdatban&&id='.$id_ban.'#formdatban"><input type="submit" class="btn btn-primary" value="Đặt bàn ngay"></a>
                      </div>
                  </div>
                  </div>
              </div>
              </div>
          </div>';
              }else{
                echo '            <div class="container py-5">
              <div class="row justify-content-center">
              <div class="col-md-8 col-lg-6 col-xl-4">
                  <div class="card" style="border-radius: 15px;">
                  <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                      data-mdb-ripple-color="light">
                      <a href="#!">
                      <div class="mask"></div>
                      </a>
                  </div>
                  <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                      <div>
                          <p><a href="#!" class="text-dark">Bàn số '.$vitri.'</a></p>
                          <p class="small text-muted">Loại bàn '.$loaiban.' người</p>
                      </div>
                      <div>
                          <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                          <i class="fas fa-star">Rated 4.0/5</i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          </div>
                          <p class="small text-muted"></p>
                      </div>
                      </div>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body pb-0">
                      <div class="d-flex justify-content-between">
                      <p><a href="#!" class="text-dark">'. 2*$loaiban.'$</a></p>
                      <p class="text-dark">#### 00'.$i.'</p>
                      </div>
                      <p class="small text-muted">Phí phục vụ</p>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                      <a href="#!" class="text-dark fw-bold">Cancel</a>
                      <input type="submit" class="btn btn-primary" value="Đã đặt">
                      </div>
                  </div>
                  </div>
              </div>
              </div>
          </div>';
              }
              
            }
            $i+=1;
          ?>


        </div>

      </div>
    </section><!-- End Chefs Section -->