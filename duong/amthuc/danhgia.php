<section>
      <div class="container">
        <div class="row">
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
        </div>

        <div class="row" id="binhluan">

        <form action="index.php?act=binhluan&&id_sp=<?=$id_sp ?>&&id_tk=<?=$_GET['id_tk'] ?>#binhluan" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Đăng tải nội dung bình luận của bạn</label>
                <input type="text" class="form-control" name="noidungcmt">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				<input type="hidden" name="id_dm" value="<?=$id_dm ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Đánh giá" name="binhluan">
        </form>


        </div>
      </div>
</section>
