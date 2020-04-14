<?php include('view/layout/header.php'); ?>

    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">

                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                                Unlimted
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                Layout Options
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                                Fully Responsive
                            </p>
                            <a class="carousel-btn" href="#" data-animation="animated fadeInUp">See More Details</a>
                        </div>
                        <img class="carousel-position-five animate-delay hidden-sm hidden-xs" src="/assets/pages/img/shop-slider/slide2/price.png" alt="Price" data-animation="animated zoomIn">
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-six">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                                Full Admin &amp; Frontend
                            </span>
                            <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
                                eCommerce UI
                            </p>
                            <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                                Is Ready For Your Project
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="item carousel-item-seven">
                   <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                    The most <br/>
                                    wanted bijouterie
                                </h2>
                                <a class="carousel-btn" href="#" data-animation="animated fadeInUp">But It Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12">
            <h2>新的商品</h2>
            <div class="owl-carousel owl-carousel5">
            <?php if($newCommoditys){foreach ($newCommoditys as $value):if($value['state']=='normal'){ ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img style="height:180px " src="images/commodity/<?php echo $value['imag_name'];?>.png" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="images/commodity/<?php echo $value['imag_name'];?>.png" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="/index.php?r=student/commodity_view&commodity_id=<?php echo $value['id'];?>"><?php echo $value['cname'];?></a></h3>
                  <div class="pi-price">￥<?php echo $value['price'];?></div>
                  <a class="btn btn-default add2cart" href="/index.php?r=student/Add_to_cart&cid=<?php echo $value['id'];?>">添加到购物车</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
            <?php };endforeach;} ?>
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="index.php?r=login/Go_to_Commodity_List"><i class="fa fa-angle-right"></i> 所有商品</a></li>
              <li class="list-group-item clearfix dropdown"><a href="index.php?r=login/Go_to_Wenju_List"><i class="fa fa-angle-right"></i>文具</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=login/Go_to_Shuji_List"><i class="fa fa-angle-right"></i> 书籍</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=login/Go_to_Zhuangshi_List"><i class="fa fa-angle-right"></i> 装饰</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=login/Go_to_Yiwu_List"><i class="fa fa-angle-right"></i> 衣物</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=login/Go_to_Qita_List"><i class="fa fa-angle-right"></i> 其他</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <h2>廉价商品甩卖</h2>
            <div class="owl-carousel owl-carousel3">
            <?php if($cheapCommoditys){foreach ($cheapCommoditys as $value):if($value['state']=='normal'){ ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img style="height:200px " src="images/commodity/<?php echo $value['imag_name'];?>.png" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="images/commodity/<?php echo $value['imag_name'];?>.png" class="btn btn-default fancybox-fast-view">View</a>
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
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">
          <!-- BEGIN TWO PRODUCTS -->
          <div class="col-md-6 two-items-bottom-items">
            <h2>镇店之宝</h2>
            <div class="owl-carousel owl-carousel2">
            <?php if($expensiveCommoditys){foreach ($expensiveCommoditys as $value):if($value['state']=='normal'){ ?>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img style="height:200px " src="images/commodity/<?php echo $value['imag_name'];?>.png" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      <a href="images/commodity/<?php echo $value['imag_name'];?>.png" class="btn btn-default fancybox-fast-view">View</a>
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
          <!-- END TWO PRODUCTS -->
          <!-- BEGIN PROMO -->
          <div class="col-md-6 shop-index-carousel">
            <div class="content-slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="/assets/pages/img/index-sliders/slide1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="/assets/pages/img/index-sliders/slide2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="/assets/pages/img/index-sliders/slide3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PROMO -->
        </div>        
        <!-- END TWO PRODUCTS & PROMO -->
      </div>
    </div>

<?php include('view/layout/footer.php');