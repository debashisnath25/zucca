            <?php
			$page_name = BASENAME($_SERVER['PHP_SELF']);
			$user_id = $_SESSION['user_id'];
			$check_user_type = mysqli_query($mysqli,"select * from user where user_id = '$user_id'");
			$fetch_user_type = mysqli_fetch_array($check_user_type);
			?>
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
						<?php if($fetch_user_type['user_type']=='admin')
						{
						?>
                        <li class="nav-item start <?php if($page_name == 'dashboard.php'){ ?>active open<?php } ?>">
                            <a href="dashboard.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
				<!--work -->
						 <li class="nav-item start <?php if($page_name == 'listing_seller.php' || $page_name == 'listing_associates.php' || $page_name == 'listing_customer.php') { ?>active open<?php } ?>">
                            <a href="javascript:void(0);" class="nav-link nav-toggle">
                                <i class="fa fa-user"></i>
                                <span class="title">All Users</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu"  style="">
                             <li class="nav-item start <?php if($page_name == 'listing_seller.php'){ ?>active open<?php } ?>">
								<a href="listing_seller.php" class="nav-link nav-toggle">
									<i class="icon-home"></i>
									<span class="title">Listing Sellers</span>
									<span class="selected"></span>
								</a>
							 </li>
							<li class="nav-item start <?php if($page_name == 'listing_associates.php'){ ?>active open<?php } ?>">
								<a href="listing_associates.php" class="nav-link nav-toggle">
									<i class="icon-home"></i>
									<span class="title">Listing Associates</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item start <?php if($page_name == 'listing_customer.php'){ ?>active open<?php } ?>">
								<a href="listing_customer.php" class="nav-link nav-toggle">
									<i class="icon-home"></i>
									<span class="title">Listing Customers</span>
									<span class="selected"></span>
								</a>
							 </li>								
                            </ul>
                        </li>

						 <li class="nav-item start <?php if($page_name == 'associate_to_sellers.php'){ ?>active open<?php } ?>">
                            <a href="associate_to_sellers.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Assign Associate To Sellers</span>
                                <span class="selected"></span>
                            </a>
                        </li>

						 <li class="nav-item start <?php if($page_name == 'approve_sellers.php'){ ?>active open<?php } ?>">
                            <a href="approve_sellers.php" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Approve Sellers</span>
                                <span class="selected"></span>
                            </a>
                        </li>

                        <li class="nav-item start <?php if($page_name == 'add_category.php' || $page_name == 'listing_category.php' || $page_name == 'edit_category.php' || $page_name == 'view_category.php') { ?>active open<?php } ?>">
                            <a href="javascript:void(0);" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Category</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu"  style="">
                                <li class="nav-item <?php if($page_name == 'add_category.php') {?>active selected <?php } ?>">
                                    <a href="add_category.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Add Category</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'listing_category.php' || $page_name == 'edit_category.php' || $page_name == 'view_category.php') { ?>active selected<?php } ?> ">
                                    <a href="listing_category.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Listing Category</span>
                                    </a>
                                </li>								
                            </ul>
                        </li>
                        <li class="nav-item start <?php if($page_name == 'add_sub_category.php' || $page_name == 'listing_sub_category.php' || $page_name == 'edit_sub_category.php' || $page_name == 'view_sub_category.php') { ?>active open<?php } ?>  ">
                            <a href="javascript:void(0);" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Sub-Category</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style="">
                               <li class="nav-item <?php if($page_name == 'add_sub_category.php') { ?>active selected<?php } ?> ">
                                    <a href="add_sub_category.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Add Sub-Category</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'listing_sub_category.php' || $page_name == 'edit_sub_category.php' || $page_name == 'view_sub_category.php') { ?>active selected<?php } ?> ">
                                    <a href="listing_sub_category.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Listing Sub-Category</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item start <?php if($page_name == 'add_brand.php' || $page_name == 'listing_brand.php' || $page_name == 'edit_brand.php' || $page_name == 'view_brand.php') { ?>active open<?php } ?>  ">
                            <a href="javascript:void(0);" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Brand</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style="">
                                <li class="nav-item <?php if($page_name == 'add_brand.php') { ?>active selected<?php } ?> ">
                                    <a href="add_brand.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Add Brand</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'listing_brand.php' || $page_name == 'edit_brand.php' || $page_name == 'view_brand.php') { ?>active selected<?php } ?> ">
                                    <a href="listing_brand.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Listing Brand</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

						<li class="nav-item start <?php if($page_name == 'user_settings.php') { ?>active open<?php } ?>">
                            <a href="user_settings.php" class="nav-link">
                                <i class="fa fa-cog"></i>
                                <span class="title">Settings</span>
                                <span class="selected"></span>
                            </a>
                        </li>
				<?php
				}else if($fetch_user_type['user_type']=='seller'){
				?>
						 <li class="nav-item start <?php if($page_name == 'add_product.php' || $page_name == 'listing_product.php' || $page_name == 'view_product.php' || $page_name == 'edit_product.php') { ?>active open<?php } ?>  ">
                            <a href="javascript:void(0);" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Product</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu" style="">
                                <li class="nav-item <?php if($page_name == 'add_product.php') { ?>active selected<?php } ?> ">
                                    <a href="add_product.php" class="nav-link nav-toggle">
										<i class="icon-home"></i>
                                        <span class="title">Add Product</span>
                                    </a>
                                </li>
								<li class="nav-item <?php if($page_name == 'listing_product.php' || $page_name == 'view_product.php' || $page_name == 'edit_product.php') { ?>active selected<?php } ?> ">
                                    <a href="listing_product.php" class="nav-link nav-toggle">
										<i class="icon-compass"></i>
                                        <span class="title">Listing Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item start <?php if($page_name == 'user_settings.php') { ?>active open<?php } ?>">
                            <a href="user_settings.php" class="nav-link">
                                <i class="fa fa-cog"></i>
                                <span class="title">Settings</span>
                                <span class="selected"></span>
                            </a>
                        </li>
				<?php
					}
				?>        <!--<li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">Plans</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
										<i class="icon-plus"></i>
                                        <span class="title"> Add Pricing</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link ">
										<i class="icon-eye"></i>
                                        <span class="title"> View Pricing</span>
                                    </a>
                                </li>
                            </ul>
                        </li>-->				
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->