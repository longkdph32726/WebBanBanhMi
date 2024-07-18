<section id="menu" class="menu">
      <div class="container amthuc" id="amthuc">

        <div class="section-title " >
          <h2>Các sản phẩm trong <span>Giỏ hàng</span> của bạn</h2>
        </div>

        <div class="row d-flex justify-content-center">

                <div class="col-md-8" id="giohang">
                            <div class="p-2">
                                <h4 id="giohang">Shopping cart</h4>
                                <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
                            </div>

                            <?php
                                    foreach($listspgh as $spgh){
                                        extract($spgh);
                                        echo '                            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                                        <div class="mr-1"><img class="rounded" src="../img/'.$anh.'" width="70"></div>
                                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">'.$ten_sp.'</span>
                                            <div class="d-flex flex-row product-desc">
                                                <div class="size mr-1"><span class="text-grey"></span><span class="font-weight-bold">&nbsp;</span></div>
                                                <div class="color"><span class="text-grey"></span><span class="font-weight-bold">&nbsp;</span></div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                                            <h5 class="text-grey mt-1 mr-1 ml-1"></h5></div>
                                        <div>
                                            <h5 class="text-grey">$'.$gia.'</h5>
                                        </div>
                                        <div class="d-flex align-items-center"><a href="index.php?act=xoagiohang&&id='.$id_gh.'&&id_tk='.$_GET['id_tk'].'#giohang"><i class="fa fa-trash mb-1 text-danger"></i></a></div>
                                    </div>';
                                    }
                                
                                ?>
                        </div>








                </div>
      </div>
</section>