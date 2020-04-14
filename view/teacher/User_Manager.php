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
              <li class="list-group-item clearfix active"><a>
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
            
            <div class="content-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tbody><tr>
                    <th class="goods-page-description">用户ID</th>
                    <th class="goods-page-description">昵称</th>
                    <th class="goods-page-stock">身份</th>
                    <th class="goods-page-stock">等级</th>
                    <th class="goods-page-price" colspan="2">余额</th>
                  </tr>
                  <?php if($Users){foreach ($Users as $value): ?>
                  <tr>
                    <td class="goods-page-description">
                        <h3><a style="font-size: 20px" 
                        href="/index.php?r=student/commodity_view&commodity_id=<?php echo $value['id'];?>">
                        <?php echo $value['id'];?></a></h3>
                    </td>
                    <td class="goods-page-description" >
                      <h3><a style="font-size: 20px" 
                        href="/index.php?r=student/commodity_view&commodity_id=<?php echo $value['id'];?>">
                        <?php echo $value['name'];?></a></h3>
                    </td>
                    <td class="goods-page-stock">
                      <h3><?php if($value['role_state']==3){echo 'teacher';}else if($value['role_state']==2){echo '配送员';}else if($value['role_state']==1){echo '普通用户';}?></h3>
                    </td>
                    <td class="goods-page-stock">
                      <h3><?php echo $value['level'] ?></h3>
                    </td>
                    <td class="goods-page-price">
                      <h3><strong><span>$</span><?php echo $value['ecash'];?></strong></h3>
                    </td>
                    <td>
                      <a class="btn btn-default" href="index.php?r=teacher/Give_it_money&user_id=<?php echo $value['id'];?>">打钱(一次一万)</a>
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