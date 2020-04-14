<?php include('view/layout/manage_header.php'); ?>

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
                <i class="fa fa-angle-right"></i> 管理员信息</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=teacher/User_Manager">
                <i class="fa fa-angle-right"></i> 用户管理</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=teacher/Messager">
                <i class="fa fa-angle-right"></i> 消息管理(<?php echo $count;?>条未处理)</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;">
                <i class="fa fa-angle-right"></i> 我的订单</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;">
                <i class="fa fa-angle-right"></i> 我的消息</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;">
                <i class="fa fa-angle-right"></i> 已买到的宝贝</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;">
                <i class="fa fa-angle-right"></i> 校园配送员</a></li>
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

<?php include('view/layout/manage_footer.php'); ?>