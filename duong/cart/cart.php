<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<?php 
if(isset($_SESSION['user'])){
  extract($_SESSION['user']);
}
extract($ctsp);
?>
<div class="container" id="muahang">
  <div class="py-5 text-center">
    
    <h2>Thanh toán</h2>
    <!-- <p class="lead">Below is an example form built entirely with Bootstrap 5 form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Giỏ hàng</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
        <img style="width: 50px;height: 50px;border-radius: 20px;" src="../img/<?=$anh ?>" alt="">

          <div>
            <h6 style="color: red;" class="my-0"><?=$ten_sp ?></h6>
          </div>
          <span class="text-muted">$<?=$gia ?> </span>
        </li>

        <li class="list-group-item d-flex justify-content-between">
          <span>Tổng</span>
          <strong>$<?=$gia ?></strong>
        </li>
      </ul>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Địa chỉ đơn hàng</h4>


      <!-- FORM -->
      <form class="needs-validation" novalidate method="post" action="index.php?act=dathang&&idsp=<?=$id_sp ?>&&id_tk=<?=$id_tk ?>">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Họ</label>
            <input type="text" class="form-control" id="firstName" name="ho">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Tên</label>
            <input type="text" class="form-control" id="lastName" name="ten">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address">SDT</label>
          <input type="text" class="form-control" id="address" name="sdt" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Địa chỉ</label>
          <input type="text" class="form-control" id="address" placeholder="số nhà ... đường ..." name="diachi" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Phương thức thanh toán</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input value="0" id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng</label>
          </div>
          <div class="custom-control custom-radio">
            <input value="1" id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Bank</label>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-number">Số thẻ</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>

        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Đặt hàng" name="dathang">
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2023 - 2045 Delicious</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>