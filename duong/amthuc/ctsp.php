<style>
  .preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }


.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }
            .card {
              margin-top: 50px;
              background: #eee;
              padding: 3em;
              line-height: 1.5em; }
            
            @media screen and (min-width: 997px) {
              .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }
            
            .details {
              display: -webkit-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
              -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                      flex-direction: column; }
            
            .colors {
              -webkit-box-flex: 1;
              -webkit-flex-grow: 1;
                  -ms-flex-positive: 1;
                      flex-grow: 1; }
            
            .product-title, .price, .sizes, .colors {
              text-transform: UPPERCASE;
              font-weight: bold; }
            
            .checked, .price span {
              color: #ff9f1a; }
            
            .product-title, .rating, .product-description, .price, .vote, .sizes {
              margin-bottom: 15px; }
            
            .product-title {
              margin-top: 0; }
            
            .size {
              margin-right: 10px; }
              .size:first-of-type {
                margin-left: 40px; }
            
            .color {
              display: inline-block;
              vertical-align: middle;
              margin-right: 10px;
              height: 2em;
              width: 2em;
              border-radius: 2px; }
              .color:first-of-type {
                margin-left: 20px; }
            
            .add-to-cart, .like {
              background: #ff9f1a;
              padding: 1.2em 1.5em;
              border: none;
              text-transform: UPPERCASE;
              font-weight: bold;
              color: #fff;
              -webkit-transition: background .3s ease;
                      transition: background .3s ease; }
              .add-to-cart:hover, .like:hover {
                background: #b36800;
                color: #fff; }
            
            .not-available {
              text-align: center;
              line-height: 2em; }
              .not-available:before {
                font-family: fontawesome;
                content: "\f00d";
                color: #fff; }
            
            .orange {
              background: #ff9f1a; }
            
            .green {
              background: #85ad00; }
            
            .blue {
              background: #0076ad; }
            
            .tooltip-inner {
              padding: 1.3em; }
            
            @-webkit-keyframes opacity {
              0% {
                opacity: 0;
                -webkit-transform: scale(3);
                        transform: scale(3); }
              100% {
                opacity: 1;
                -webkit-transform: scale(1);
                        transform: scale(1); } }
            
            @keyframes opacity {
              0% {
                opacity: 0;
                -webkit-transform: scale(3);
                        transform: scale(3); }
              100% {
                opacity: 1;
                -webkit-transform: scale(1);
                        transform: scale(1); } }
</style>
<?php
extract($ctsp);
$hinh = $hinhpath.$anh;
?>
<section>
      <div class="container">

        <div class="row d-flex justify-content-center">


					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img id="ctsp" style="border-radius: 5px;" src="<?=$hinh ?>"></div>
						</div>
						
					</div>
					<div class="details col-md-6" style="position: relative;">
						<h3 class="product-title"><?=$ten_sp ?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no"><?=$luotxem ?> reviews</span>
						</div>
						<p class="product-description"><?=$mota ?></p>
						<h4 class="price"> <span><?=$gia ?>$</span></h4>
						<!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
						<div class="action" style="bottom: 10px;position: absolute;left: 50px;">
							<a href="index.php?act=muahang&&idsp=<?=$id_sp ?>#muahang"><input type="submit" class="add-to-cart btn btn-default"  value="Mua hàng"></a>
							<a href="index.php?act=themgiohang&&idsp=<?=$id_sp ?>&&iddm=<?=$id_dm ?>"><input type="submit" class="add-to-cart btn btn-default"  value="Thêm giỏ hàng"></a>
						</div>
					</div>




        </div>
      </div>
</section>




<section>
      <div class="container">

        <div class="row">


        <!-- ------------------------------------------------------------------------------------------- -->


        <div class="col-md-12">

<div class="headings d-flex justify-content-between align-items-center mb-3" id="binhluan">
    <h5>Bình luận đánh giá</h5>

    <div class="buttons">

        <span class="badge bg-white d-flex flex-row align-items-center">
        </span>
        
    </div>
    
</div>
<?php
  foreach ($binhluan as $bl) {
    extract($bl);
    echo '<div class="card p-3">

    <div class="d-flex justify-content-between align-items-center">

  <div class="user d-flex flex-row align-items-center">

    <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
    <span><small class="font-weight-bold text-primary">'.$user.'</small> <small class="font-weight-bold">'.$noidung.'</small></span>
      
  </div>


  <small>'.$ngaybinhluan.'</small>

  </div>


  <div class="action d-flex justify-content-between mt-2 align-items-center">

    <div class="reply px-4">
        <small>Remove</small>
        <span class="dots"></span>
        <small>Reply</small>
        <span class="dots"></span>
        <small>Translate</small>
       
    </div>

    <div class="icons align-items-center">

        <i class="fa fa-star text-warning"></i>
        <i class="fa fa-check-circle-o check-icon"></i>
        
    </div>
      
  </div>


    
</div>';
    # code...
  }
?>

</div>






<!-- ------------------------------------------------------------------------------------------- -->
        </div>
      </div>
</section>




<section style="background-color: #eee;">
  <div class="container py-5">
    <h4 class="text-center mb-5"><strong>Product listing</strong></h4>


<div class="row">
    <?php 
      foreach($listspdm as $spdm){
        extract($spdm);
        echo ' 
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="../img/'.$anh.'" style="width:100%;height:400px;"/>
            <a href="index.php?act=chitietsanpham&&idsp='.$id_sp.'&&iddm='.$id_dm.'&&#ctsp">
              <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">'.$gia.'$</span></h5>
                </div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
              </div>
            </a>
          </div>
        </div>';
      }
    ?>

    <!-- <div class="row">
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(1).webp"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$123</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);">oke</div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(2).webp"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$239</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(3).webp"
            class="w-100" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-start align-items-start h-100">
                <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$147</span></h5>
              </div>
            </div>
            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
            </div>
          </a>
        </div>
      </div>
    </div> -->
    </div>
  </div>
</section>