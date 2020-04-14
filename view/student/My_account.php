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
              <li class="list-group-item clearfix active"><a href="javascript:;">
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
            
            <div class="panel-body row">
                 <div class="col-md-2 col-sm-2">
                   <img href="#headchange-pop-up" class="img-responsive" src="images/headimage/<?php echo $user[7];?>.png">
                   <button class="btn btn-default fancybox-fast-view" href="#headchange-pop-up">更换头像(重新登陆生效)</button>
                 </div><!-- 头像 -->
                 <div class="col-md-2 col-sm-2">
                   <strong><div style="font-size: 30px"><?php echo $user[1];?></div></strong>
                   <button class="btn btn-default fancybox-fast-view" href="#namechange-pop-up">更换昵称</button>
                 </div><!-- 昵称 -->
                 <div class="col-md-2 col-sm-1">
                   <strong><div style="font-size: 24px ">￥<?php echo $user[6];?></div></strong>
                   <div>余额</div>
                 </div><!-- 余额 -->
                 <div class="col-md-1 col-sm-1">
                   <strong><div style="font-size: 24px "><?php echo $user[4];?></div></strong>
                   <div>等级</div>
                 </div><!-- 等级 -->
                 <div class="col-md-1 col-sm-1">
                   <strong><div style="font-size: 24px "><?php echo $user[5];?>/<?php echo 100*$user[4];?></div></strong>
                   <div>经验</div>
                 </div><!-- 经验 -->
            </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

<?php include('view/layout/footer.php');