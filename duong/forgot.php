<?php
if(isset($_SESSION['pass'])){
    extract($_SESSION['pass']);
}
?>
<section id="forgotpass" class="about">
      <div class="container-fluid">
        <div class="row" style="display: flex;justify-content: center;align-items: center;">
            <span>Mật khẩu của bạn là: <p style="color: red;"><?=$pass ?></p></span>
        </div>
      </div>
</section>