<?php 
  if(is_array($sp)){
      extract($sp);
  }
  
?>
<style>

    .long{
        overflow: hidden;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
           line-clamp: 2; 
   -webkit-box-orient: vertical;
    }

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
                        <h1 class="h3 mb-0 text-gray-800">CHI TIẾT SẢN PHẨM</h1>
                        <a href="<?=$client ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Xem trang Web</a>
                    </div>

                    <!-- Nội dung -->
                    <section>
      <div class="container">

        <div class="row d-flex justify-content-center">


					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img style="border-radius: 5px;" src="../img/<?=$anh ?>"></div>
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
						<p class="product-description long"><?=$mota ?></p>
						<h4 class="price"> <span><?=$gia ?>$</span></h4>
						<!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
						<div class="action" style="bottom: 10px;position: absolute;left: 50px;">
							<a href="index.php?act=editsanpham&&id=<?=$id_sp ?>"><input type="submit" class="add-to-cart btn btn-default"  value="Sửa"></a>
							<a href="index.php?act=xoasanpham&&id=<?=$id_sp ?>"><input type="submit" class="add-to-cart btn btn-default"  value="Xóa"></a>
						</div>
					</div>




        </div>
      </div>
</section>
          <br>

          <section>
      <div class="container">

        <div class="row">


        <!-- ------------------------------------------------------------------------------------------- -->


        <div class="col-md-12">

<div class="headings d-flex justify-content-between align-items-center mb-3">
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


    <div class="icons align-items-center">

    <a href="index.php?act=xoabinhluan&&id_bl='.$id_bl.'&&id_sp='.$id_sp.'" class="btn btn-primary">Xóa</a>
        
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