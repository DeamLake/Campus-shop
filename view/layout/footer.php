
    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-6 col-sm-6 pre-footer-col">
            <h2>关于我们</h2>
            <p>这是一个校园二手物品交易平台，专用于学生之间在校园内进行二手物品的便捷交易，起初灵感来源于在各种群里卖自己物品的毕业班的学长学姐，好了现在我也是毕业班的学长学姐了。觉得还是挺方便的，假如有这么一个网站。</p>
            <p>Emmmmmm 实际上只是我个人的毕业设计作品。</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->

          <!-- END INFO BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">博主微信</h2>
            <img style="height:160px " class="img-responsive" src="/images/wechat.jpg">
                  
          </div>
          <!-- END TWITTER BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>我的联系方式</h2>
            <address class="margin-bottom-40">
              22, 东方大道605号, 台州学院<br>
              台州, 浙江<br>
              手机: 17858262913<br>
              Email: <a href="mailto:info@metronic.com">1115709562@qq.com</a><br>
              QQ: <a href="skype:metronic">1115709562</a>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
      </div>
    </div>
    <!-- END PRE-FOOTER -->


    <!-- 更换头像 -->
    <div id="headchange-pop-up" style="display: none; width:250px">
      <form class="form-group" enctype="multipart/form-data" action="index.php?r=student/Change_headimg" method="post">
            <label for="cimg">图片(名称不包含中文) <span class="require">*</span></label>
            <input type="file" form-control accept="image/jpeg,image/gif,image/png"  name='headimag' />
            <button class="btn btn-primary form-control" type="submit">确认更换</button>
      </form>
    </div>
    <!-- 更换昵称 -->
    <div id="namechange-pop-up" style="display: none; width:250px">
      <form class="form-group" enctype="multipart/form-data" action="index.php?r=student/Change_name" method="post">
            <label for="cimg">请输入新的昵称 <span class="require">*</span></label>
            <input type="test" class="form-control"  name='newname' />
            <button class="btn btn-primary form-control" type="submit">确认更换</button>
      </form>
    </div>
    <!-- 添加新商品 -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="/assets/pages/img/pics/blacksale.png" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                </div>
                <form enctype="multipart/form-data" class="col-md-6 col-sm-6 col-xs-9" action="index.php?r=student/Add_commodity" method="post">
                  <h2>请填写您要上架商品的信息</h2>
                  <div class="form-group">
                        <label for="cname">商品名称 <span class="require">*</span></label>
                        <input name="cname" placeholder="Commodity Name" class="form-control" id="inputcname" type="text">
                  </div>
                  <div class="form-group">
                        <label for="classify">商品分类 <span class="require">*</span></label>
                        <select class="custom-select form-control" name="classify" required="">
                           <option value="">Choose...</option>
                           <option>文具</option>
                           <option>书籍</option>
                           <option>装饰</option>
                           <option>衣物</option>
                           <option>其他</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label for="cprice">商品价格 <span class="require">*</span></label>
                        <input name="cprice" placeholder="Commodity Price" class="form-control" id="inputcprice" type="text">
                  </div>
                  <div class="form-group">
                        <label for="cimg">商品图片(图片名称不包含中文) <span class="require">*</span></label>
                        <input type="file" form-control accept="image/jpeg,image/gif,image/png"  name='cimag' />
                  </div>
                  <div class="form-group">
                        <label for="describe">添加商品描述信息</label>
                        <textarea class="form-control" placeholder="Commodity Information" 
                        name = "describeinfo" 
                        id="delivery-payment-method" rows="8"></textarea>
                      </div>
                  <div class="product-page-cart">
                    <button class="btn btn-primary form-control" type="submit">上 架 商 品</button>
                  </div>
                </form>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='/assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>