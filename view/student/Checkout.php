<?php include('view/layout/header.php'); ?>

<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-6 col-sm-12">
            <h1>订单结算</h1>
            <form enctype="multipart/form-data" class="col-md-6 col-sm-6 col-xs-9" action="index.php?r=student/Do_pay_cart&WholePrice=<?php echo $WholePrice;?>" method="post">
            <br>
            <div>
                      <em style="font-size: 15px">待支付：</em>
                      <strong  class="price color-red v2" style="font-size: 30px"><span>$</span>
                        <?php echo $WholePrice;?></strong>
            </div>
            <br>
            <br>
            <br>
            <div class="form-group">
                        <label for="classify">请选择支付方式 <span class="require">*</span></label>
                        <select class="custom-select form-control" name="classify" required="">
                           <option value="">Choose...</option>
                           <option>账户余额</option>
                           <option>微信</option>
                           <option>支付宝</option>
                        </select>
            </div>
              <div class="form-group">
                        <label for="phone">联系人电话 <span class="require">*</span></label>
                        <input name="phone" placeholder="请填写收货人联系方式" class="form-control" id="inputphone" type="text">
              </div>
            
              <div class="form-group">
                        <label for="address">收货地址 <span class="require">*</span></label>
                        <input name="address" placeholder="请填写收货地址" class="form-control" id="inputaddress" type="text">
              </div>

            <button class="btn btn-primary" style="font-size: 20px"  type="submit">支付订单 <i class="fa fa-check"></i></button>
            </form>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

      </div>
    </div>

<?php include('view/layout/footer.php');