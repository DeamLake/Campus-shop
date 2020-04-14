<?php include('view/layout/header.php'); ?>

<div class="title-wrapper">
      <div class="container"><div class="container-inner">
      </div></div>
    </div>

<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php?r=login/back_to_home">主页</a></li>
            <li><a href="index.php?r=login/Go_to_Commodity_List">商店</a></li>
            <li class="active">衣物</li>
        </ul>
        <div class="row margin-bottom-40">
          <div class="sidebar col-md-3 col-sm-5">
            <div class="sidebar-products clearfix">
              <h2>推荐商品</h2>
              <div class="item">
                <a href="shop-item.html"><img alt="Some Shoes in Animal with Cut Out" src="assets/pages/img/products/k1.jpg"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$31.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img alt="Some Shoes in Animal with Cut Out" src="assets/pages/img/products/k4.jpg"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$23.00</div>
              </div>
              <div class="item">
                <a href="shop-item.html"><img alt="Some Shoes in Animal with Cut Out" src="assets/pages/img/products/k3.jpg"></a>
                <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
                <div class="price">$86.00</div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-7">
            <div class="row product-list">
              <?php if($Commoditys){foreach ($Commoditys as $value):if($value['state']='normal'){ ?>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img style="height:300px " class="img-responsive" alt="Berry Lace Dress" src="images/commodity/<?php echo $value['imag_name'];?>.png">
                    <div>
                      <a class="btn btn-default fancybox-button" href="images/commodity/<?php echo $value['imag_name'];?>.png">View</a>
                    </div>
                  </div>
                  <h3><a href="/index.php?r=student/commodity_view&commodity_id=<?php echo $value['id'];?>"><?php echo $value['cname'];?></a></h3>
                  <div class="pi-price">￥<?php echo $value['price'];?></div>
                  <a class="btn btn-default add2cart" href="/index.php?r=student/Add_to_cart&cid=<?php echo $value['id'];?>">添加到购物车</a>
                </div>
              </div>
            <?php };endforeach;} ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include('view/layout/footer.php');