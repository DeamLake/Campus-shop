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
              <li class="list-group-item clearfix dropdown active">
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
              <li class="list-group-item clearfix"><a href="javascript:;">
                <i class="fa fa-angle-right active"></i> 已买到的宝贝</a></li>
              <?php if(!$Deliveraccount){ ?>
                <li class="list-group-item clearfix"><a href="index.php?r=student/Deliver">
                <i class="fa fa-angle-right"></i> 校园配送员</a></li>
              <?php }else{ if($Deliveraccount['deliver_state']!='申请成功'){  ?>
                <li class="list-group-item clearfix"><a href="index.php?r=student/Deliver">
                <i class="fa fa-angle-right"></i> 校园配送员</a></li>
              <?php }else{ ?>
                <li class="list-group-item clearfix dropdown">
                <a class="collapsed" href="javascript:void(0);">
                  <i class="fa fa-angle-right"></i>
                  校园配送员
                </a>
                <ul class="dropdown-menu" style="display: block;">
                  <li><a href="index.php?r=student/Deliver"><i class="fa fa-angle-right"></i> 配送主页</a></li>
                  <li><a href="index.php?r=student/My_deliver_order"><i class="fa fa-angle-right"></i> 我的订单</a></li>
                  <li><a href="index.php?r=student/Order_Hall"><i class="fa fa-angle-right"></i> 订单大厅</a></li>
                </ul>
              </li>
              <?php }} ?>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
            
            <div class="content-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tbody><tr>
                    <th class="goods-page-image">图片</th>
                    <th class="goods-page-description">宝贝描述</th>
                    <th class="goods-page-stock">分类</th>
                    <th class="goods-page-price" colspan="2">价格</th>
                  </tr>
                  <?php if($orders){foreach ($orders as $value): if($value['order_state']=='已完成'){ ?>
                  <tr>
                    <td class="goods-page-image">
                        <img src="images/commodity/<?php echo $value['imag_name'];?>.png">
                    </td>
                    <td class="goods-page-description" >
                      <h3><a style="font-size: 20px" 
                        href="/index.php?r=student/commodity_view&commodity_id=<?php echo $value['id'];?>">
                        <?php echo $value['cname'];?></a></h3>
                    </td>
                    <td class="goods-page-stock">
                      <h3><?php echo $value['classify'];?></h3>
                    </td>
                    <td class="goods-page-price">
                      <h3><strong><span>$</span><?php echo $value['price'];?></strong></h3>
                    </td>
                  </tr>
                  <?php } endforeach;} ?>
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