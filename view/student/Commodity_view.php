<?php include('view/layout/header.php'); ?>

<div class="main">
      <div class="container">
        
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-2 col-sm-2">
            <ul class="breadcrumb">
               <li style="font-size: 20px" class="active">卖家信息</li>
            </ul>
            <img class="goods-page-image" src="images/headimage/<?php echo $seller[7];?>.png">
            <h2><?php echo $seller[1];?></h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">等级：<?php echo $seller[4];?></a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">经验：<?php echo $seller[5];?>/<?php echo 100*$seller[4];?></a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">信誉：</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
            
            <div class="col-md-10 col-sm-10">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img class="img-responsive" alt="Cool green dress with red bell" src="images/commodity/<?php echo $commodity['imag_name'];?>.png" data-bigimgsrc="images/commodity/<?php echo $commodity['imag_name'];?>.png">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1><?php echo $commodity['cname'];?></h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>￥</span><?php echo $commodity['price'];?></strong>
                    </div>
                    <div class="availability">
                      分类: <strong><?php echo $commodity['classify'];?></strong>
                    </div>
                  </div>
                  <div class="description">
                    <p><?php echo $commodity['describeinfo'];?></p>
                  </div>
                  <form action="/index.php?r=student/Add_to_cart&cid=<?php echo $commodity_id;?>" method="post">
                    <div class="product-page-cart">
                    <button class="btn btn-primary"  type="submit">添加到购物车</button>
                   </div>
                  </form>
                  
                </div>

                <div class="product-page-content">
                  <ul class="nav nav-tabs" id="myTab">
                    <li><a href="#Description" data-toggle="tab">商品描述</a></li>
                    <li class="active"><a href="#Reviews" data-toggle="tab">留言(2)</a></li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="Description">
                      <p><?php echo $commodity['describeinfo'];?></p>
                    </div>
                    <div class="tab-pane fade in active" id="Reviews">
                      <!--<p>There are no reviews for this product.</p>-->
                      <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>Bob</strong>
                          <em>30/12/2013 - 07:37</em>
                          <div class="rateit" data-rateit-ispreset="true" data-rateit-readonly="true" data-rateit-value="5"><button class="rateit-reset" id="rateit-reset-3" aria-controls="rateit-range-3" style="display: none;" aria-label="reset rating" data-role="none"></button><div tabindex="0" class="rateit-range" id="rateit-range-3" role="slider" aria-readonly="true" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" aria-owns="rateit-reset-3" style="width: 80px; height: 16px;" aria-label="rating"><div class="rateit-selected rateit-preset" style="width: 80px; height: 16px;"></div><div class="rateit-hover" style="height: 16px;"></div></div></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                        </div>
                      </div>
                      <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong>Mary</strong>
                          <em>13/12/2013 - 17:49</em>
                          <div class="rateit" data-rateit-ispreset="true" data-rateit-readonly="true" data-rateit-value="2.5"><button class="rateit-reset" id="rateit-reset-4" aria-controls="rateit-range-4" style="display: none;" aria-label="reset rating" data-role="none"></button><div tabindex="0" class="rateit-range" id="rateit-range-4" role="slider" aria-readonly="true" aria-valuenow="2.5" aria-valuemin="0" aria-valuemax="5" aria-owns="rateit-reset-4" style="width: 80px; height: 16px;" aria-label="rating"><div class="rateit-selected rateit-preset" style="width: 40px; height: 16px;"></div><div class="rateit-hover" style="height: 16px;"></div></div></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                        </div>
                      </div>

                      <!-- BEGIN FORM-->
                      <form class="reviews-form" role="form" action="#">
                        <h2>Write a review</h2>
                        <div class="form-group">
                          <label for="name">Name <span class="require">*</span></label>
                          <input class="form-control" id="name" type="text">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input class="form-control" id="email" type="text">
                        </div>
                        <div class="form-group">
                          <label for="review">Review <span class="require">*</span></label>
                          <textarea class="form-control" id="review" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="email">Rating</label>
                          <input id="backing5" style="display: none;" type="range" step="0.25" value="4">
                          <div class="rateit" data-rateit-max="5" data-rateit-min="0" data-rateit-ispreset="true" data-rateit-resetable="false" data-rateit-backingfld="#backing5">
                          <button class="rateit-reset" id="rateit-reset-5" aria-controls="rateit-range-5" style="display: none;" aria-label="reset rating" data-role="none"></button><div tabindex="0" class="rateit-range" id="rateit-range-5" role="slider" aria-readonly="false" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" aria-owns="rateit-reset-5" style="width: 80px; height: 16px;" aria-label="rating"><div class="rateit-selected rateit-preset" style="width: 64px; height: 16px;"></div><div class="rateit-hover" style="height: 16px;"></div></div></div>
                        </div>
                        <div class="padding-top-20">                  
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </form>
                      <!-- END FORM--> 
                    </div>
                  </div>
                </div>
                <?php if($commodity['state']!= 'normal'){ ?>
                <div class="sticker sticker-sale"></div>
              <?php }?>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

<?php include('view/layout/footer.php');