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
              <li class="list-group-item clearfix"><a href="javascript:;">
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
              <li class="list-group-item clearfix active"><a href="javascript:;">
                <i class="fa fa-angle-right"></i> 我的消息(<?php echo $message_count ?>)</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=student/Buyed_Commoditys">
                <i class="fa fa-angle-right"></i> 已买到的宝贝</a></li>
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
                    <th class="goods-page-description">消息来源</th>
                    <th class="goods-page-stock">消息类型</th>
                  </tr>
                  <?php if($messages){foreach ($messages as $value): if($value['order_state']=='未发货'){ ?>
                  <tr>
                    <td class="goods-page-description" >
                      <h3><a style="font-size: 20px" 
                        href="">
                        系统消息</a></h3>
                    </td>
                    <td class="goods-page-stock">
                      <h3>用户 <?php echo $value['name'];?> 下单的商品 <?php echo $value['cname'];?> 未发货</h3>
                    </td>
                    <td>
                      <a class="btn btn-default" href="index.php?r=student/Comfirm_takeout&order_id=<?php echo $value['order_id'];?>">已确认发货</a>
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