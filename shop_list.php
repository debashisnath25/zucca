<?php
	include ("config.php");
	$id = $_SESSION['id'];
	$subcat_id = $_GET['sub_id'];
	
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
            <section class="content-page">
                <div class="container">
                    <div class="row">
                        <!-- Product Content -->
                        <div class="col-md-9 push-md-3">
                            <!-- Title -->
                            <div class="list-page-title">
                                <h2 class="">Men Polos & Tees <small>120 Products</small></h2>
                            </div>
                            <!-- End Title -->

                            <!-- Product Filter -->
                            <div class="product-filter-content">
                                <div class="product-filter-content-inner">

                                    <!--Product Filter Button-->
                                    <div class="product-filter-dropdown-btn "><a href="javascript:void(0)" data-toggle-target="filter-slide-toggle" class="btn btn-sm btn-gray slide-toggle-btn"><i class="fa fa-bars left" aria-hidden="true"></i>Filter</a></div>

                                    <!--Product Sort By-->
                                    <form class="product-sort-by">
                                        <label for="short-by">Short By</label>
                                        <select name="short-by" id="short-by" class="nice-select-box">
                                            <option value="default_sorting" selected="selected">Default sorting</option>
                                            <option value="sort_by_popularity">Popularity</option>
                                            <option value="sort_by_average_rating">Average rating</option>
                                            <option value="sort_by_newness">New product</option>
                                            <option value="price_low_to_high">Price: low to high</option>
                                            <option value="price_high_to_low">Price: high to low</option>
                                        </select>
                                    </form>
                                    <script>
                                        
                                    </script>
                                    <!--Product Show-->
                                    <form class="product-show">
                                        <label for="product-show">Show</label>
                                        <select name="product-show" id="product-show" class="nice-select-box">
                                            <option value="15" selected="selected">15</option>
                                            <option value="18">18</option>
                                            <option value="21">21</option>
                                            <option value="24">24</option>
                                            <option value="all">Show All</option>
                                        </select>
                                    </form>



                                    <!--Product List/Grid Icon-->
                                    <div class="product-view-switcher">
                                        <label>View</label>
                                        <div class="product-view-icon product-grid-switcher">
                                            <a class="" href=""><i class="fa fa-th" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="product-view-icon product-list-switcher product-view-icon-active">
                                            <a class="" href=""><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Product Filter -->

                            <!-- Product filters Toggle-->
                            <div class="container product-filter-dropdown toggle-content" id="filter-slide-toggle">
                                <div class="row col mlr-0">
                                    <!-- Shop Categories -->
                                    <div class="widget-sidebar col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Categories</h6>
                                        <ul class="widget-content widget-product-categories jq-accordian">
                                            <li>
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li>
                                                <a class="javascript:void(0)">Clothings<span class="jq-accordionIcon"></span></a>
                                                <ul class="children" style="display: none;">
                                                    <li><a href="#">All</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Sportswear</a></li>
                                                    <li><a href="#">Swimwear</a></li>
                                                    <li><a href="#">Trousers</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Man<span class="jq-accordionIcon"></span></a>
                                                <ul style="display: none;">
                                                    <li><a href="#">All</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Sportswear</a></li>
                                                    <li><a href="#">Swimwear</a></li>
                                                    <li><a href="#">Trousers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Jacket</a></li>
                                            <li><a href="#">New arrivals</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="sdsd">Socks</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Shop Categories -->

                                    <!-- Filter Price -->
                                    <div class="widget-sidebar widget-filter-price col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Select Price</h6>
                                        <ul class="widget-content">
                                            <li>
                                                <a href="#">All</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>0.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>500.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>500.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>1100.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>1100.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>1600.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>1600.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>2100.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>2100.00</span>
                                                    -
                                                <span class="amount"><span class="currencySymbol">$</span>2600.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="amount"><span class="currencySymbol">$</span>2600.00</span>
                                                    +
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Filter Price -->

                                    <!-- Filter Color -->
                                    <div class="widget-sidebar widget-filter-color col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Select Color</h6>
                                        <ul class="widget-content">
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #ff4040"></span></div>
                                                    Red</a>
                                                <span class="color-count">(9)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #000"></span></div>
                                                    Black</a>
                                                <span class="color-count">(112)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #ff9000"></span></div>
                                                    Orange</a>
                                                <span class="color-count">(56)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #ffcf3d"></span></div>
                                                    Yellow</a>
                                                <span class="color-count">(24)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #55b0da"></span></div>
                                                    Blue</a>
                                                <span class="color-count">(18)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #9ada55"></span></div>
                                                    Green</a>
                                                <span class="color-count">(72)</span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="filter-color-switcher"><span style="background-color: #7a463b"></span></div>
                                                    Brown</a>
                                                <span class="color-count">(5)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Filter Color -->

                                    <!-- Filter Size -->
                                    <div class="widget-sidebar widget-filter-size col-sm-12 col-md-6 col-lg-3">
                                        <h6 class="widget-title">Select Size</h6>
                                        <ul class="widget-content ">
                                            <li>
                                                <a href="#">L</a>
                                                <span>(24)</span>
                                            </li>
                                            <li>
                                                <a href="#">M</a>
                                                <span>(34)</span>
                                            </li>
                                            <li>
                                                <a href="#">S</a>
                                                <span>(45)</span>
                                            </li>
                                            <li>
                                                <a href="#">X</a>
                                                <span>(102)</span>
                                            </li>
                                            <li>
                                                <a href="#">XL</a>
                                                <span>(60)</span>
                                            </li>
                                            <li>
                                                <a href="#">XS</a>
                                                <span>(78)</span>
                                            </li>
                                            <li>
                                                <a href="#">XXL</a>
                                                <span>(35)</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Filter Size -->
                                </div>
                            </div>
                            <!-- End Product filters Toggle-->

                            <!-- Product List -->
                            <div class="row product-list-item product-list-view">
							
							<?php
							$select_product_query = mysqli_query($mysqli,"select * from product where subcat_id='$subcat_id'");
							while($fetch_product_query = mysqli_fetch_array($select_product_query))
							
							{
							?>
                                <!-- item.1 -->
                                <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                    <!--Product Item-->
                                    <div class="product-item">
                                        <div class="product-item-inner">
										<?php
										$get_product = $fetch_product_query['product_id'];
										$get_product_query = mysqli_query($mysqli,"select * from product_image where product_id = '$get_product' order by productimage_id desc");
										$fetch_product_image = mysqli_fetch_array($get_product_query);									
										?>
                                            <div class="product-img-wrap">
                                                <img src="admin/uploads/<?php echo $fetch_product_image['image_name'];?>" alt="">
                                            </div>
                                            <div class="product-button">
                                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                                
                                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                            </div>
										
                                        </div>
                                        <div class="product-detail">
                                            <a class="tag" href="product.php?pro_id=<?php echo $fetch_product_query['product_id'];?>"><h2><?php echo $fetch_product_query['product_title'];?></h2></a>
                                            <p class="product-title"><a href="product_detail.html"><?php echo $fetch_product_query['product_short_desc'];?></a></p>
                                            <div class="product-rating">
                                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 3 out of 5">
                                                    <span style="width: 60%"></span>
                                                </div>
                                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                            </div>
                                            <p class="product-description">
                                              <?php echo $fetch_query['product_desc'];?>
                                            </p>
                                            <h5 class="item-price"><del><?php echo $fetch_product_query['selling_price'];?></del><?php echo $fetch_product_query['selling_price'];?></h5>
                                        </div>
                                    </div>
                                    <!-- End Product Item-->
                                </div>
								<?php
								}
								?>					
                            </div>
                            <!-- End Product List -->

						    <div class="pagination-wraper">
                                <p>Showing 1 - 15 of 120 results</p>
                                <div class="pagination">
                                    <ul class="pagination-numbers">
                                        <!--<li>
                                            <a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a>
                                        </li>-->
                                        <li>
                                            <a href="#" class="page-number current">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">3</a>
                                        </li>
                                        <li>
                                            <span class="page-number dots">...</span>
                                        </li>
                                        <li>
                                            <a href="#" class="page-number">29</a>
                                        </li>
                                        <li>
                                            <a href="#" class="next page-number"><i class="fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- End Product Content -->

                        <!-- Sidebar -->
                        <div class="sidebar-container col-md-3 pull-md-9">

                            <!-- Categories -->
                            <div class="widget-sidebar">
                                <h6 class="widget-title">Shop Categories</h6>
                                <ul class="widget-content widget-product-categories jq-accordian">
                                    <li>
                                        <a href="#">Accessories</a>
                                    </li>
                                    <li>
                                        <a>Clothings</a>
                                        <ul class="children">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Coats & Jackets</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sportswear</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Man</a>
                                        <ul>
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Coats & Jackets</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sportswear</a></li>
                                            <li><a href="#">Swimwear</a></li>
                                            <li><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Jacket</a></li>
                                    <li><a href="#">New arrivals</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="sdsd">Socks</a></li>
                                </ul>
                            </div>

                            <!-- Filter By Price -->
                            <div class="widget-sidebar widget-price-range">
                                <h6 class="widget-title">Filter By Price</h6>
                                <form class="widget-content" method="get" action="#">
                                    <div class="price-range-slider"></div>
                                    <div class="price-range-amount">
                                        <input id="price_range_min" name="price_range_min" value="" data-min="140" placeholder="Min price" style="display: none;" type="text">
                                        <input id="price_range_max" name="price_range_max" value="" data-max="1100" placeholder="Max price" style="display: none;" type="text">
                                        <div id="price-range-from-to">
                                        </div>
                                    </div>
                                    <button class="btn btn-xs btn-black pull-right" type="submit">Filter</button>
                                </form>
                            </div>

                            <!-- Filter By Color -->
                            <div class="widget-sidebar widget-filter-color">
                                <h6 class="widget-title">Filter By Color</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #ff4040"></span></div>
                                            Red</a>
                                        <span class="color-count">(9)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #000"></span></div>
                                            Black</a>
                                        <span class="color-count">(112)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #ff9000"></span></div>
                                            Orange</a>
                                        <span class="color-count">(56)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #ffcf3d"></span></div>
                                            Yellow</a>
                                        <span class="color-count">(24)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #55b0da"></span></div>
                                            Blue</a>
                                        <span class="color-count">(18)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #9ada55"></span></div>
                                            Green</a>
                                        <span class="color-count">(72)</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="filter-color-switcher"><span style="background-color: #7a463b"></span></div>
                                            Brown</a>
                                        <span class="color-count">(5)</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Filter By Size -->
                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title">Filter By Size</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">L</a>
                                        <span>(24)</span>
                                    </li>
                                    <li>
                                        <a href="#">M</a>
                                        <span>(34)</span>
                                    </li>
                                    <li>
                                        <a href="#">S</a>
                                        <span>(45)</span>
                                    </li>
                                    <li>
                                        <a href="#">X</a>
                                        <span>(102)</span>
                                    </li>
                                    <li>
                                        <a href="#">XL</a>
                                        <span>(60)</span>
                                    </li>
                                    <li>
                                        <a href="#">XS</a>
                                        <span>(78)</span>
                                    </li>
                                    <li>
                                        <a href="#">XXL</a>
                                        <span>(35)</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Filter By Tag -->
                            <div class="widget-sidebar widget-filter-tag">
                                <h6 class="widget-title">Popular Tag</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">Shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">Bag</a>
                                    </li>
                                    <li>
                                        <a href="#">Vintage</a>
                                    </li>
                                    <li>
                                        <a href="#">Sweaters</a>
                                    </li>
                                    <li>
                                        <a href="#">t-shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">white</a>
                                    </li>
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">New</a>
                                    </li>
                                    <li>
                                        <a href="#">Popular</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Widget Product -->
                            <div class="widget-sidebar widget-product">
                                <h6 class="widget-title">Popular Product</h6>
                                <ul class="widget-content">

                                    <!--Item-->
                                    <li>
                                        <a class="product-img" href="#">
                                            <img src="images/product_125470007.jpg" alt="">
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

                            <div class="widget-sidebar widget-banner">
                                <a href="#" class="banner-image-wrap">
                                    <img src="images/banner_115146.jpg" alt="" />
                                </a>
                            </div>

                        </div>
                        <!-- End Sidebar -->

                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

<?php include ('footer.php')?>

</body>
</html>
