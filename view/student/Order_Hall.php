<?php include('view/layout/header.php'); ?>

<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li style="font-size: 20px" class="active">我的账户</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="index.php?r=student/My_account">
                <i class="fa fa-angle-right"></i> 我的个人信息</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=student/My_commodity">
                <i class="fa fa-angle-right"></i> 我上架的宝贝</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=student/My_cart">
                <i class="fa fa-angle-right"></i> 我的购物车</a></li>
              <li class="list-group-item clearfix dropdown">
                <a class="collapsed" href="javascript:void(0);">
                  <i class="fa fa-angle-right"></i>
                  我的订单
                </a>
                <ul class="dropdown-menu" style="display: block;">
                  <li><a href="index.php?r=student/No_takeout"><i class="fa fa-angle-right"></i> 未发货(<?php echo $takeout_count ?>)</a></li>
                  <li><a href="index.php?r=student/No_getin"><i class="fa fa-angle-right"></i> 未收货(<?php echo $getin_count ?>)</a></li>
                  <li><a href="index.php?r=student/Order_finished"><i class="fa fa-angle-right"></i> 已完成</a></li>
                </ul>
              </li>
              <li class="list-group-item clearfix"><a href="index.php?r=student/My_message">
                <i class="fa fa-angle-right"></i> 我的消息(<?php echo $message_count ?>)</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=student/Buyed_Commoditys">
                <i class="fa fa-angle-right"></i> 已买到的宝贝</a></li>
              <li class="list-group-item clearfix dropdown">
                <a class="collapsed" href="javascript:void(0);">
                  <i class="fa fa-angle-right"></i>
                  校园配送员
                </a>
                <ul class="dropdown-menu" style="display: block;">
                  <li><a href="index.php?r=student/Deliver"><i class="fa fa-angle-right"></i> 配送主页</a></li>
                  <li><a href="index.php?r=student/My_deliver_order"><i class="fa fa-angle-right"></i> 我的订单</a></li>
                  <li class="active"><a href=""><i class="fa fa-angle-right"></i> 订单大厅</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
            
            <div class="content-page">
                <div class="col-md-9 col-sm-7">
                  <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tbody><tr>
                    <th class="goods-page-description">订单编号</th>
                    <th class="goods-page-stock">联系电话</th>
                    <th class="goods-page-price" colspan="1">收货人地址</th>
                    <th class="goods-page-price">佣金</th>
                  </tr>
                  <?php if($Orders){foreach ($Orders as $value): ?>
                  <tr>
                    <td class="goods-page-description" >
                      <h3><a style="font-size: 20px" 
                        href="">
                        <?php echo $value['order_id'];?></a></h3>
                    </td>
                    <td class="goods-page-stock">
                      <h3><?php echo $value['buyer_phone'];?></h3>
                    </td>
                    <td class="goods-page-price">
                      <h3><strong><?php echo $value['buyer_address'];?></strong></h3>
                    </td>
                    <td class="goods-page-price">
                      <h3><strong><span>￥</span>3</strong></h3>
                    </td>
                    <td>
                      <a class="btn btn-default" href="index.php?r=student/Take_Order&order_id=<?php echo $value['order_id'];?>">接单</a>
                    </td>
                  </tr>
                  <?php endforeach;} ?>
                </tbody></table>
                </div>
              </div>
                  </div>
                </div>
            </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

<?php include('view/layout/footer.php');