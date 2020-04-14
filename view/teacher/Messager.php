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
              <li class="list-group-item clearfix"><a href="index.php?r=teacher/home">
                <i class="fa fa-angle-right"></i> 管理员信息</a></li>
              <li class="list-group-item clearfix"><a href="index.php?r=teacher/User_Manager">
                <i class="fa fa-angle-right"></i> 用户管理</a></li>
              <li class="list-group-item clearfix active"><a>
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
            
            <div class="content-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tbody><tr>
                    <th class="goods-page-description">消息来源</th>
                    <th class="goods-page-description">消息类型</th>
                  </tr>
                  <?php if($deliverregist){foreach ($deliverregist as $value): if($value['deliver_state']=='申请中') ?>
                  <tr>
                    <td class="goods-page-description">
                        <h3><a style="font-size: 20px" 
                        href="">
                        系统通知</a></h3>
                    </td>
                    <td class="goods-page-stock">
                      <h3>用户 <?php echo $value['name'] ?> 申请成为配送员。</h3>
                    </td>
                    <td>
                      <a class="btn btn-default" href="index.php?r=teacher/regist_accept&user_id=<?php echo $value['id'];?>">接受</a>
                      <a class="btn btn-default" href="index.php?r=teacher/regist_refuse&user_id=<?php echo $value['id'];?>">拒绝</a>
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

<?php include('view/layout/manage_footer.php'); ?>