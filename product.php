<?php
	include ("config.php");
	$id = $_SESSION['id'];
	$product_id = $_GET['pro_id'];
	
	$select_product = mysqli_query($mysqli,"select * from product where product_id='$product_id'");
	$fetch_product = mysqli_fetch_array($select_product);
	
?>

<!DOCTYPE html>
<html>
<head>
   <?php include ('header.php')?>

        <!-- Page Content Wraper -->
        <div class="page-content-wraper">
            <!-- Bread Crumb -->
            <section class="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb-link">
                                <a href="#">Home</a>
                                <a href="#">Categories</a>
                                <span>Men Polos & Tees</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bread Crumb -->

            <!-- Page Content -->
            <section id="product-id" class="content-page single-product-content">

                <!-- Product -->
                <div id="product-detail" class="container">
				
                    <div class="row">
                        <div class="col-lg-9 col-md-12 product-content sidebar-position-right">
								
                            <div class="row">
                                <!-- Product Image -->
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                                    <div class="product-page-image">
                                        <!-- Slick Image Slider -->
                                        <div class="product-image-slider product-image-gallery" id="product-image-gallery" data-pswp-uid="3">
                                            <div class="item">
													<?php
													$fetch_pro_id = $fetch_product['product_id'];
													$get_product_image = mysqli_query($mysqli,"select * from product_image where product_id='$fetch_pro_id'");
													$fetch_image = mysqli_fetch_array($get_product_image);
													?>
                                                <a class="product-gallery-item" href="" data-size="" data-med="" data-med-size="">
                                                    <img src="admin/uploads/<?php echo $fetch_image['image_name'];?>" alt="image 1" />
                                                </a>
                                            </div>											
                                           </div>
                                        <!-- End Slick Image Slider -->

                                        <a href="javascript:void(0)" id="zoom-images-button" class="zoom-images-button"><i class="fa fa-expand" aria-hidden="true"></i></a>


                                    </div>

                                    <!-- Slick Thumb Slider -->
                                    <div class="product-image-slider-thumbnails">
                                        <div class="item">
                                            <img src="admin/uploads/<?php echo $fetch_image['image_name'];?>" alt="image 1" />
                                        </div>                                     
                                    </div>
                                    <!-- End Slick Thumb Slider -->
                                </div>
                                <!-- End Product Image -->

                                <!-- Product Content -->
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                                    <div class="product-page-content">
                                        <h2 class="product-title"><?php echo $fetch_product['product_title'];?></h2>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <div class="product-rating-count">( <span class="count">3</span> Reviews )</div>
                                        </div>
                                        <div class="product-price">
                                            <del><?php echo $fetch_product['selling_price'];?></del><span><span class="fa fa-inr"></span><span class="product-price-text"><?php echo $fetch_product['selling_price'];?></span></span>
                                        </div>
                                        <p class="product-description">
                                           <?php echo $fetch_product['product_desc'];?>
                                        </p>
                                        <div class="row product-filters">
                                            <form class="col-md-12 filters-color">
                                                <label for="select-color">Select Color</label>

                                                <!--<select name="select-color" id="select-color" class="nice-select-box select-color">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="#f00">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="orange">Orange</option>
                                            <option value="green">Green</option>
                                            <option value="black">Black</option>
                                            <option value="gray">Gray</option>
                                        </select>-->

                                                <div class="color-selector">
                                                    <div class="entry active" style="background: #000;">&nbsp;</div>
                                                    <div class="entry" style="background: #7eabe9;">&nbsp;</div>
                                                    <div class="entry" style="background: #f27123;">&nbsp;</div>
                                                    <div class="entry" style="background: #d1d1d1;">&nbsp;</div>
                                                </div>
                                            </form>
                                            <form class="col-md-12 filters-size">
                                                <label for="select-size">Select Size</label>
                                                <!--<select name="select-size" id="select-size" class="nice-select-box">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="l">L</option>
                                            <option value="m">M</option>
                                            <option value="s">S</option>
                                            <option value="x">X</option>
                                            <option value="xl">XL</option>
                                            <option value="xs">XS</option>
                                            <option value="xxl">XXL</option>
                                        </select>-->
                                                <div class="size-selector">
                                                    <div class="entry active">S</div>
                                                    <div class="entry">M</div>
                                                    <div class="entry">L</div>
                                                    <div class="entry">X</div>
                                                    <div class="entry">XL</div>
                                                </div>
                                            </form>
                                        </div>
                                        <form class="single-variation-wrap">
                                            <div class="product-quantity">
                                                <span value="+" class="quantity-btn quantityPlus"></span>
                                                <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number" />
                                                <span value="-" class="quantity-btn quantityMinus"></span>
                                            </div>
                                            <button type="submit" class="btn btn-lg btn-black"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Add to cart</button>
                                        </form>
                                        
                                        <div class="product-meta">
                                            <span>SKU : <span class="sku" itemprop="sku"><?php echo rand();?></span></span>
                                            <span>Category : <span class="category" itemprop="category">Shoes</span></span>
                                        </div>
                                        <div class="product-share">
                                            <span>Share :</span>
                                            <ul>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://nileforest.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="http://twitter.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://plus.google.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="mailto:?subject=Check this http://nileforest.com/" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                                <li><a href="http://pinterest.com/pin/create/button/?url=http://nileforest.com/exampleImage.jpg" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
						
                        </div>
                        <div class="col-lg-3 col-md-12 product-sidebar">
                            <div class="sidebar-widget-outline product-brand">
                                <a href="#brand_name" class="image-link">
                                    <img src="img/logo/07.png" alt="brand" /></a>
                                <a href="#View_all_brand" class="text-link">View All Product</a>
                            </div>
                            <div class="sidebar-widget-outline product-list widget-product">
                                <h6 class="widget-title">Popular Product</h6>

                                <ul class="widget-content">

                                    <!--Item-->
                                    <li>
                                        <a class="product-img" href="#">
                                            <img src="img/product-img/big/product_125470007.jpg" alt="">
                                        </a>
                                        <div class="product-content">
                                            <a class="product-link" href="#">Alpha Block Black Polo Sleem T-Shirt</a>
                                            <div class="star-rating">
                                                <span style="width: 80%;"></span>
                                            </div>
                                            <span class="product-amount">$399.00</span>
                                        </div>
                                    </li>

                                    <!--Item-->
                                    <li>
                                        <a class="product-img" href="#">
                                            <img src="images/product_125470006.jpg" alt="">
                                        </a>
                                        <div class="product-content">
                                            <a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>
                                            <div class="star-rating">
                                                <span style="width: 100%;"></span>
                                            </div>
                                            <span class="product-amount">$399.00</span>
                                        </div>
                                    </li>

                                    <!--Item-->
                                    <li>
                                        <a class="product-img" href="#">
                                            <img src="images/product_125470005.jpg" alt="">
                                        </a>
                                        <div class="product-content">
                                            <a class="product-link" href="#">Maroon Solid Henley T-Shirts</a>
                                            <div class="star-rating">
                                                <span style="width: 100%;"></span>
                                            </div>
                                            <span class="product-amount">$399.00</span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="sidebar-widget-outline product-banner-icon-text promo-box">
                                <div class="promo-item">
                                    <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                                    <div class="info">
                                        <a href="#">
                                            <h6 class="normal">Free Shipping</h6>
                                        </a>
                                        <p>On Order Over $150</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			
                </div>
                <!-- End Product -->

                <!-- Product Content Tab -->
                <div class="product-tabs-wrapper container">
                    <ul class="product-content-tabs nav nav-tabs" role="tablist">

                        <li class="nav-item">
                            <a class="active" href="#tab_description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="#tab_additional_information" role="tab" data-toggle="tab">Additional Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="#tab_reviews" role="tab" data-toggle="tab">Reviews (<span>3</span>)</a>
                        </li>
                        

                    </ul>
                    <div class="product-content-Tabs_wraper tab-content container">
                        <div id="tab_description" role="tabpanel" class="tab-pane fade in active">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_description-coll">Description</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_description-coll" class="shop_description product-collapse collapse container">
                                <div class="row">
                                    <div class=" col-md-6">
                                        <p>
                                            <?php echo $fetch_product['product_short_desc'];?>
                                        </p>                                       
                                    </div>                                   
                                </div>
                            </div>
                            <!-- End Accordian Content -->
                        </div>

                        <div id="tab_additional_information" role="tabpanel" class="tab-pane fade">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_additional_information-coll">Additional Information</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_additional_information-coll" class="container product-collapse collapse">

                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Color</th>
                                            <td>Black, Gray, White</td>
                                        </tr>
                                        <tr>
                                            <th>Weight</th>
                                            <td>5 kg</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th>
                                            <td>60 x 40 x 60 cm</td>
                                        </tr>
                                        <tr>
                                            <th>Washcare</th>
                                            <td>Dry Clean</td>
                                        </tr>
                                        <tr>
                                            <th>Composition</th>
                                            <td>100% Polyester</td>
                                        </tr>
                                        <tr>
                                            <th>Lining composition</th>
                                            <td>100% Polyester</td>
                                        </tr>
                                        <tr>
                                            <th>Other info</th>
                                            <td>Ullamcorper nisl mus integer mollis vestibulu</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- End Accordian Content -->
                        </div>
                        <div id="tab_reviews" role="tabpanel" class="tab-pane fade">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_reviews-coll">Reviews (0)</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_reviews-coll" class=" product-collapse collapse container">
                                <div class="row">
                                    <div class="review-form-wrapper col-md-6">
                                        <h6 class="review-title">Add a Review </h6>
                                        <form class="comment-form">
                                            <div class="form-field-wrapper">
                                                <label>Your Rating</label>
                                                <p class="stars">
                                                    <span>
                                                        <a class="star-1" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4 active" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <label>Your Review <span class="required">*</span></label>
                                                <textarea id="comment" class="form-full-width" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <label>Name <span class="required">*</span></label>
                                                <input id="author" class="input-md form-full-width" name="author" value="" size="30" aria-required="true" required="" type="text">
                                            </div>
                                            <div class="form-field-wrapper">
                                                <label>Email <span class="required">*</span></label>
                                                <input id="email" class="input-md form-full-width" name="email" value="" size="30" aria-required="true" required="" type="email">
                                            </div>
                                            <div class="form-field-wrapper">
                                                <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="comments col-md-6">
                                        <h6 class="review-title">Customer Reviews</h6>
                                        <!--<p class="review-blank">There are no reviews yet.</p>-->
                                        <ul class="commentlist">
                                            <li id="comment-101" class="comment-101">
                                                <img src="img/avatar.jpg" class="avatar" alt="author" />
                                                <div class="comment-text">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 100%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong itemprop="author">James Koster</strong>
                                                        &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">April 25, 2016</time>
                                                    </p>
                                                    <div class="description" itemprop="description">
                                                        <p>Wow Amazing!</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="102" class="comment-102">
                                                <img src="images/avatar.jpg" class="avatar" alt="author" />
                                                <div class="comment-text">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 80%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong itemprop="author">Michel</strong>
                                                        &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">April 14, 2016</time>
                                                    </p>
                                                    <div class="description" itemprop="description">
                                                        <p>Wow Special!</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="comment-103" class="comment-103">
                                                <img src="images/avatar.jpg" class="avatar" alt="author" />
                                                <div class="comment-text">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 60%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <em>Your comment is awaiting approval</em>
                                                        <!-- <strong itemprop="author">Kerry</strong>
                                                    &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">march 19, 2016</time>-->
                                                    </p>
                                                    <div class="description" itemprop="description">
                                                        <p>When an unknown printer took a galley!</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordian Content -->
                        </div>
                        <div id="tab_custom" role="tabpanel" class="tab-pane fade">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_custom-coll">Custom</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_custom-coll" class="product-collapse collapse container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/blog_02.jpg" alt="shipping delivery" />
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="normal"><span>When an unknown printer took a galley of type.</span></h3>
                                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged. </p>
                                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged. </p>
                                        <a href="#" class="btn btn-sm btn-black mt-20">More Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordian Content -->
                        </div>
                    </div>
                </div>
                <!-- End Product Content Tab -->

                <!-- Product Carousel -->
                <div class="container product-carousel">
                    <h2 class="page-title">Related Products</h2>
                    <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
						<?php 
						$get_product_id = mysqli_query($mysqli,"select * from product where product_id='$product_id'");
						$fetch_product_id = mysqli_fetch_array($get_product_id);
						$subcat_other_id = $fetch_product_id['subcat_id'];
						$get_subcat_data = mysqli_query($mysqli,"select * from product where subcat_id='$subcat_other_id' and product_id !='$product_id'");
						while($fetch_other_data = mysqli_fetch_array($get_subcat_data))
						{
						?>
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
									<?php
									$fetch_proimg_id = $fetch_other_data['product_id'];
									$get_prod_image = mysqli_query($mysqli,"select * from product_image where product_id='$fetch_proimg_id'");
									$fetch_proimage = mysqli_fetch_array($get_prod_image);
									?>
                                    <img src="admin/uploads/<?php echo $fetch_proimage['image_name'];?>" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                    
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#"></a>
                                <p class="product-title"><a href="product_detail.html"><?php echo $fetch_other_data['product_title'];?></a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                   <?php echo $fetch_other_data['product_short_desc'];?>
                                </p>
                                <h5 class="item-price"><?php echo $fetch_other_data['selling_price'];?></h5>
                            </div>
                        </div>
						<?php
						}
						?>
                        <!-- item.2 -->
                      
                        <!-- item.7 -->                       

                    </div>
                </div>
                <!-- End Product Carousel -->

            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

       <?php include ('footer.php')?>

</body>
</html>
