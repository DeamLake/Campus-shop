
    <!-- 更换头像 -->
    <div id="headchange-pop-up" style="display: none; width:250px">
      <form class="form-group" enctype="multipart/form-data" action="index.php?r=teacher/Change_headimg" method="post">
            <label for="cimg">图片(名称不包含中文) <span class="require">*</span></label>
            <input type="file" form-control accept="image/jpeg,image/gif,image/png"  name='headimag' />
            <button class="btn btn-primary form-control" type="submit">确认更换</button>
      </form>
    </div>
    <!-- 更换昵称 -->
    <div id="namechange-pop-up" style="display: none; width:250px">
      <form class="form-group" enctype="multipart/form-data" action="index.php?r=teacher/Change_name" method="post">
            <label for="cimg">请输入新的昵称 <span class="require">*</span></label>
            <input type="test" class="form-control"  name='newname' />
            <button class="btn btn-primary form-control" type="submit">确认更换</button>
      </form>
    </div>

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