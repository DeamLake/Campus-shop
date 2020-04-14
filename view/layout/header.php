<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="GB2312">
  <title>月光商城</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="/assets/pages/css/animate.css" rel="stylesheet">
  <link href="/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/assets/pages/css/components.css" rel="stylesheet">
  <link href="/assets/pages/css/slider.css" rel="stylesheet">
  <link href="/assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="/assets/corporate/css/style.css" rel="stylesheet">
  <link href="/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>发现BUG请致电+17858262913</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="index.php?r=student/My_account"><?php echo $user[1]; ?></a></li>
                        <li><a href="index.php?r=student/My_cart">我的购物车</a></li>
                        <li><a href="index.php?r=login/back_to_login">注销</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="index.php?r=login/back_to_home">
          <img src="/assets/corporate/img/logos/Campus_logo.png" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="index.php?r=student/My_cart" class="top-cart-info-count"><?php echo $count;?>件商品</a>
            <a href="javascript:void(0);" class="top-cart-info-value">￥<?php echo $Totalprice;?></a>
          </div>
          <i class="fa fa-shopping-cart"></i>
                        
          <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">
                <?php if($CartCommoditys){foreach ($CartCommoditys as $value): ?>
                <li>
                  <img src="images/commodity/<?php echo $value['imag_name'];?>.png" alt="Rolex Classic Watch" width="37" height="34">
                  <span class="cart-content-count">x 1</span>
                  <strong><?php echo $value['cname'];?></strong>
                  <em>￥<?php echo $value['price'];?></em>
                  <a href="index.php?r=student/Delete_cart_commodity_float&commodity_id=<?php echo $value['cart_id'];?>" class="del-goods">&nbsp;</a>
                </li>
                <?php endforeach;} ?>
              </ul>
              <div class="text-right">
                <a href="index.php?r=student/My_cart" class="btn btn-default">查看购物车</a>
                <a href="index.php?r=student/My_cart" class="btn btn-primary">结 算 </a>
              </div>
            </div>
          </div>            
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li class="dropdown">
              <a href="index.php?r=login/Go_to_Commodity_List">
                所有商品
              </a>
            </li>
            <li class="dropdown">
              <a href="index.php?r=login/Go_to_Wenju_List">
                文具
              </a>
            </li>
            <li class="dropdown dropdown-megamenu">
              <a href="index.php?r=login/Go_to_Shuji_List">
                书籍
              </a>
            </li>
            <li class="dropdown">
              <a href="index.php?r=login/Go_to_Zhuangshi_List">
                装饰
              </a>
            </li>
            <li class="dropdown dropdown100 nav-catalogue">
              <a href="index.php?r=login/Go_to_Yiwu_List">
                衣物
              </a>
            </li>
            <li class="dropdown">
              <a href="index.php?r=login/Go_to_Qita_List">
                其他
              </a>
            </li>

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form enctype="multipart/form-data"action="index.php?r=student/Search_result" method="post">
                  <div class="input-group">
                    <input name='cname' type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">搜索</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->