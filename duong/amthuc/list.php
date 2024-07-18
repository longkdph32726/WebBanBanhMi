  <!-- ======= Menu Section ======= -->
    
  <style>
    .long {
   overflow: hidden;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
           line-clamp: 2; 
   -webkit-box-orient: vertical;
}
   .red{
    color: red;
   }
  </style>
  <section id="menu" class="menu">
      <div class="container amthuc" id="amthuc">

        <div class="section-title " >
          <h2>Các sản phẩm <span>Ẩm thực</span> từ các đầu bếp chuyên nghiệp</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu" style="display: flex;list-style-type: none;">
              <!-- <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li> -->
              <li style="margin: 50px;text-decoration: none;border: 1px solid yellow;border-radius: 10px;width: 100px;text-align: center;"><a style="text-decoration: none;color: red;"  href="index.php?act=amthuc&&id=0#amthuc"><strong>Tất cả</strong></a></li>
              <?php
                foreach($listdm as $dm){
                    extract($dm);
                    echo '<li style="margin: 50px;text-decoration: none;border: 1px solid yellow;border-radius: 10px;width: 100px;text-align: center;"><a href="index.php?act=amthuc&&id='.$id_dm.'#amthuc" style="text-decoration: none;color: red;"><strong>'.$ten_dm.'</strong></a></li>'; 
                }
                ?>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

        <?php
            foreach($listsp as $sp){
                extract($sp);
                if($ud==0){
                  $giaud = "";
                }if($ud==1){
                  $giaud = $giatri_ud.'$';
                }
                echo '<div class="col-lg-6 menu-item filter-starters">
                <img style="width: 100px;height: 100px;border-radius: 30px;" src="../img/'.$anh.'"  alt="">
                <div class="menu-content">
                  <a style="font-weight: 700;" href="index.php?act=chitietsanpham&&idsp='.$id_sp.'&&iddm='.$id_dm.'&&luotxem='.$luotxem.'#ctsp">'.$ten_sp.'</a><span>'.$gia.'$ <s class="red">'.$giaud.'</s></span>
                </div>
                <div class="menu-ingredients long">
                  '.$mota.'
                </div>
              </div>';
            }
        ?>


        </div>

      </div>
    </section><!-- End Menu Section -->