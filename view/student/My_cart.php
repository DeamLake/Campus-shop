<?php include('view/layout/header.php'); ?>

<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>我的购物车</h1>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tbody><tr>
                    <th class="goods-page-image">图片</th>
                    <th class="goods-page-description">描述</th>
                    <th class="goods-page-ref-no">卖家账号</th>
                    <th class="goods-page-quantity">数量</th>
                    <th class="goods-page-price">价格</th>
                    <th class="goods-page-total" colspan="2">总计</th>
                  </tr>
                  <?php if($CartCommoditys){foreach ($CartCommoditys as $value): ?>
                  <tr>
                    <td class="goods-page-image">
                      <a href="javascript:;"><img alt="Berry Lace Dress" src="images/commodity/<?php echo $value['imag_name'];?>.png"></a>
                    </td>
                    <td class="goods-page-description">
                      <h3><a href="/index.php?r=student/Commodity_view&commodity_id=<?php echo $value['id'];?>"><?php echo $value['cname'];?></a></h3>
                      <p><strong>类别</strong> - <?php echo $value['classify'];?></p>
                    </td>
                    <td class="goods-page-ref-no">
                      <?php echo $value['sellerID'];?>
                    </td>
                    <td class="goods-page-quantity">
                      <div class="product-quantity">
                          <input class="form-control input-sm" id="product-quantity" type="text" readonly="" value="1">
                      </div>
                    </td>
                    <td class="goods-page-price">
                      <strong><span>￥</span><?php echo $value['price'];?></strong>
                    </td>
                    <td class="goods-page-total">
                      <strong><span>￥</span><?php echo $value['price'];?></strong>
                    </td>
                    <td><a class="btn btn-default" href="index.php?r=student/Delete_cart_commodity&commodity_id=<?php echo $value['cart_id'];?>">删除</a>
                    </td>
                  </tr>
                  <?php endforeach;} ?>
                </tbody></table>
                </div>

                <div class="shopping-total">
                  <ul>
                    <li>
                      <em>减免</em>
                      <strong class="price"><span>￥</span>0</strong>
                    </li>
                    <li>
                      <em>邮费</em>
                      <strong class="price"><span>￥</span><?php echo $count*3;?></strong>
                    </li>
                    <li class="shopping-total-price">
                      <em>总计</em>
                      <strong class="price"><span>￥</span>
                        <?php echo $WholePrice;?></strong>
                    </li>
                  </ul>
                </div>
              </div>
              <a class="btn btn-default" href="index.php?r=student/Commodity_List" type="submit">继 续 我 的 购 物<i class="fa fa-shopping-cart"></i></a>
              <a class="btn btn-primary" href="index.php?r=student/Checkout&WholePrice=<?php echo $WholePrice;?>" type="submit">结算 <i class="fa fa-check"></i></a>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>Most popular products</h2>
            <div class="owl-carousel owl-carousel4 owl-theme owl-loaded">
              
              
              
              
              
              
            <div class="owl-stage-outer"><div class="owl-stage" style="transition:all; width: 1710px; transform: translate3d(0px, 0px, 0px);"><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img class="img-responsive" alt="Berry Lace Dress" src="assets/pages/img/products/k1.jpg">
                    <div>
                      <a class="btn btn-default fancybox-button" href="assets/pages/img/products/k1.jpg">Zoom</a>
                      <a class="btn btn-default fancybox-fast-view" href="#product-pop-up">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a class="btn btn-default add2cart" href="javascript:;">Add to cart</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div></div><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img class="img-responsive" alt="Berry Lace Dress" src="assets/pages/img/products/k2.jpg">
                    <div>
                      <a class="btn btn-default fancybox-button" href="assets/pages/img/products/k2.jpg">Zoom</a>
                      <a class="btn btn-default fancybox-fast-view" href="#product-pop-up">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a class="btn btn-default add2cart" href="javascript:;">Add to cart</a>
                </div>
              </div></div><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img class="img-responsive" alt="Berry Lace Dress" src="assets/pages/img/products/k3.jpg">
                    <div>
                      <a class="btn btn-default fancybox-button" href="assets/pages/img/products/k3.jpg">Zoom</a>
                      <a class="btn btn-default fancybox-fast-view" href="#product-pop-up">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a class="btn btn-default add2cart" href="javascript:;">Add to cart</a>
                </div>
              </div></div><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img class="img-responsive" alt="Berry Lace Dress" src="assets/pages/img/products/k4.jpg">
                    <div>
                      <a class="btn btn-default fancybox-button" href="assets/pages/img/products/k4.jpg">Zoom</a>
                      <a class="btn btn-default fancybox-fast-view" href="#product-pop-up">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a class="btn btn-default add2cart" href="javascript:;">Add to cart</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              </div></div><div class="owl-item" style="width: 285px; margin-right: 0px;"><div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img class="img-responsive" alt="Berry Lace Dress" src="assets/pages/img/products/k1.jpg">
                    <div>
                      <a class="btn btn-default fancybox-button" href="assets/pages/img/products/k1.jpg">Zoom</a>
                      <a class="btn btn-default fancybox-fast-view" href="#product-pop-up">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a class="btn btn-default add2cart" href="javascript:;">Add to cart</a>
                </div>
              </div></div><div class="owl-item" style="width: 285px; margin-right: 0px;"><div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img class="img-responsive" alt="Berry Lace Dress" src="assets/pages/img/products/k2.jpg">
                    <div>
                      <a class="btn btn-default fancybox-button" href="assets/pages/img/products/k2.jpg">Zoom</a>
                      <a class="btn btn-default fancybox-fast-view" href="#product-pop-up">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a class="btn btn-default add2cart" href="javascript:;">Add to cart</a>
                </div>
              </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
          </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>

<?php include('view/layout/footer.php');