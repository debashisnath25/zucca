<head>
   <meta charset="utf-8">
    <title>ZUCCA - Clothing Collections</title>
    <meta name="description" content="Zucca Template" />
    <meta name="keywords" content="Zucca, WooCommerce, bootstrap, html template, Zucca template">
    <meta name="author" content="Zucca" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="img/png" href="images/favicon.png">
    <link rel="icon" type="img/png" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawesome css -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <!-- animate css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- template css -->
    <link href="css/settings-ver.5.3.1.css" rel="stylesheet" type="text/css" />
    <!-- Slider Revolution Css Setting -->
    <link href="css/photoswipe.css" rel="stylesheet" type="text/css" />
    <link href="css/default-skin.css" rel="stylesheet" type="text/css" />
    <!-- Photoswipe Popup-->

</head>
<body>

    <!-- Newsletter Popup ---------------------------------------------------->
    <section id="nlpopup" data-expires="30" data-delay="10">
        <!--Close Button-->
        <a href="javascript:void(0)" class="nlpopup_close nlpopup_close_icon">
            <img src="images/close-icon-white.png" alt="Newsletter Close" /></a>
        <!--End Close Button-->

        <h3 class="mb-40">Join Our Mailing List </h3>
        <p class="black mb-20">
            But I must explain to you how all this mistaken<br />
            idea of denouncing pleasure pain.
        </p>
        <form>
            <input class="input-md" name="footeremail" title="Enter Email Address.." placeholder="example@domain.com" type="email">
            <button class="btn btn-md btn-color">Subscribe</button>
        </form>
        <label class="mt-20">
            Sign up For Exclusive Updates, New Arrivals<br />
            And Insider-Only Discount.</label>
        <a class="nlpopup_close nlpopup_close_link mt-40">&#10006; Close</a>
    </section>
    <!-- Overlay -->
    <div id="nlpopup_overlay"></div>
    <!-- End Newsletter Popup ------------------------------------------------>


    <!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
    <section id="sidebar-right" class="sidebar-menu sidebar-right">
        <div class="cart-sidebar-wrap">

            <!-- Cart Headiing -->
            <div class="cart-widget-heading">
                <h4>Shopping Cart</h4>
                <!-- Close Icon -->
                <a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
                <!-- End Close Icon -->
            </div>
            <!-- End Cart Headiing -->

            <!-- Cart Product Content -->
            <div class="cart-widget-content">
                <div class="cart-widget-product ">

                    <!-- Empty Cart -->
                    <div class="cart-empty">
                        <p>You have no items in your shopping cart.</p>
                    </div>
                    <!-- EndEmpty Cart -->

                    <!-- Cart Products -->
                    <ul class="cart-product-item">

                        <!-- Item -->
                        <li>
                            <!--Item Image-->
                            <a href="#" class="product-image">
                                <img src="images/product_12547554.jpg" alt="" /></a>

                            <!--Item Content-->
                            <div class="product-content">
                                <!-- Item Linkcollateral -->
                                <a class="product-link" href="#">Alpha Block Black Polo T-Shirt</a>

                                <!-- Item Cart Totle -->
                                <div class="cart-collateral">
                                    <span class="qty-cart">1</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>399.00</span>
                                </div>

                                <!-- Item Remove Icon -->
                                <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            </div>
                        </li>

                        <!-- Item -->
                        <li>
                            <!--Item Image-->
                            <a href="#" class="product-image">
                                <img src="images/product_12547555.jpg" alt="" /></a>

                            <!--Item Content-->
                            <div class="product-content">
                                <!-- Item Linkcollateral -->
                                <a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>

                                <!-- Item Cart Totle -->
                                <div class="cart-collateral">
                                    <span class="qty-cart">2</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>299.00</span>
                                </div>

                                <!-- Item Remove Icon -->
                                <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            </div>
                        </li>

                    </ul>
                    <!-- End Cart Products -->

                </div>
            </div>
            <!-- End Cart Product Content -->

            <!-- Cart Footer -->
            <div class="cart-widget-footer">
                <div class="cart-footer-inner">

                    <!-- Cart Total -->
                    <h4 class="cart-total-hedding normal"><span>Total :</span><span class="cart-total-price">$698.00</span></h4>
                    <!-- Cart Total -->

                    <!-- Cart Buttons -->
                    <div class="cart-action-buttons">
                        <a href="cart.php" class="view-cart btn btn-md btn-gray">View Cart</a>
                        <a href="checkout.php" class="checkout btn btn-md btn-color">Checkout</a>
                    </div>
                    <!-- End Cart Buttons -->

                </div>
            </div>
            <!-- Cart Footer -->
        </div>
    </section>
    <!--Overlay-->
    <div class="sidebar_overlay"></div>
    <!-- End Sidebar Menu (Cart Menu) -------------------------------------------->

    <!-- Search Overlay Menu ----------------------------------------------------->
    <section class="search-overlay-menu">
        <!-- Close Icon -->
        <a href="javascript:void(0)" class="search-overlay-close"></a>
        <!-- End Close Icon -->
        <div class="container">
            <!-- Search Form -->
            <form role="search" id="searchform" action="/search" method="get">
                <div class="search-icon-lg">
                    <img src="images/search-icon-lg.png" alt="" />
                </div>
                <label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
                <input value="" name="q" type="search" placeholder="Search..." />
                <button type="submit">
                    <img src="images/search-lg-go-icon.png" alt="" />
                </button>
            </form>
            <!-- End Search Form -->

        </div>
    </section>
    <!-- End Search Overlay Menu ------------------------------------------------>

    <!--==========================================-->
    <!-- wrapper -->
    <!--==========================================-->
    <div class="wraper">
        <!-- Header -->
        <header class="header">
           

            <!-- Header Container -->
            <div id="header-sticky" class="header-main">
                <div class="header-main-inner">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/zucca_logo.png" alt="Zucca" />
                        </a>
                    </div>
                    <!-- End Logo -->


                    <!-- Right Sidebar Nav -->
                    <div class="header-rightside-nav">
                        <!-- Login-Register Link -->
                        <div class="header-btn-link hidden-lg-down"><a href="seller_login.php" class="btn btn-sm btn-color">Sellers</a></div>
                        <!-- End Login-Register Link -->

                        <!-- Sidebar Icon -->
                        <div class="sidebar-icon-nav">
                            <ul class="list-none-ib">
                                <!-- Search-->
                                <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                               

                                <!-- Cart-->
                                <li><a id="sidebar_toggle_btn">
                                    <div class="cart-icon">
                                        <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                    </div>

                                    <div class="cart-title">
                                        <span class="cart-count">2</span>
                                        /
                                    <span class="cart-price strong">$698.00</span>
                                    </div>
                                </a></li>
                            </ul>
                        </div>
                        <!-- End Sidebar Icon -->
                    </div>
                    <!-- End Right Sidebar Nav -->


                    <!-- Navigation Menu -->
                    <nav class="navigation-menu">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="shop_list.php">Man</a>
                                <!-- Drodown Menu ------->
                                <ul class="nav-dropdown js-nav-dropdown">
                                    <li class="container">
                                        <ul class="row">
                                            <!--Grid 1-->
                                            <li class="nav-dropdown-grid">
                                                <h6>New In</h6>
                                                <ul>
                                                    <li><a href="#">New In Clothing</a></li>
                                                    <li><a href="#">New In Shoes<span class="new-label">New</span></a></li>
                                                    <li><a href="#">New In Bags</a></li>
                                                    <li><a href="#">New In Watches</a></li>
                                                    <li><a href="#">New In Accesories</a></li>
                                                </ul>
                                            </li>
                                            <!--Grid 2-->
                                            <li class="nav-dropdown-grid">
                                                <h6>Clothing</h6>
                                                <ul>
                                                    <li><a href="#">Polos & Tees</a></li>
                                                    <li><a href="#">Casual Shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Casual Trousers</a></li>
                                                    <li><a href="#">Formal Shirts<span class="sale-label">Sale</span></a></li>
                                                    <li><a href="#">Formal Trousers</a></li>
                                                    <li><a href="#">Suits & Blazers</a></li>
                                                    <li><a href="#">Winter Jackets</a></li>
                                                    <li><a href="#">Track wear</a></li>
                                                </ul>
                                            </li>
                                            <!--Grid 3-->
                                            <li class="nav-dropdown-grid">
                                                <h6>ACCESSORIES</h6>
                                                <ul>
                                                    <li><a href="#">Mens Jewellery</a></li>
                                                    <li><a href="#">Bag</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                    <li><a href="#">Watches</a></li>
                                                    <li><a href="#">Hair Care</a></li>
                                                    <li><a href="#">Ties & Cufflinks</a></li>
                                                    <li><a href="#">Perfume</a></li>
                                                    <li><a href="#">Belt</a></li>
                                                </ul>
                                            </li>
                                            <!--Grid 4-->
                                            <li class="nav-dropdown-grid">
                                                <h6>Brand</h6>
                                                <ul>
                                                    <li><a href="#">Analog</a></li>
                                                    <li><a href="#">Chronograph</a></li>
                                                    <li><a href="#">Digital</a></li>
                                                    <li><a href="#">Watch Cases</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">Hitachi</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                                <!-- End Drodown Menu -->
                            </li>
                            <li>
                                <a href="shop_list.php">Women</a>
                                <!-- Drodown Menu ------->
                                <ul class="nav-dropdown js-nav-dropdown">
                                    <li class="container">
                                        <ul class="row">
                                            <!--Grid 1-->
                                            <li class="nav-dropdown-grid">
                                                <h6>New In</h6>
                                                <ul>
                                                    <li><a href="#">New In Clothing</a></li>
                                                    <li><a href="#">New In Shoes</a></li>
                                                    <li><a href="#">New In Bags</a></li>
                                                    <li><a href="#">New In Watches</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Winter Shrugs</a></li>
                                                </ul>
                                            </li>
                                            <!--Grid 2-->
                                            <li class="nav-dropdown-grid">
                                                <h6>Clothing</h6>
                                                <ul>
                                                    <li><a href="#">Tops , tees & shirts</a></li>
                                                    <li><a href="#">Dresses & Jumpsuits</a></li>
                                                    <li><a href="#">Trousers & Jeans</a></li>
                                                    <li><a href="#">Leggings & Jeggings</a></li>
                                                    <li><a href="#">Capris,Shorts & Skirts</a></li>
                                                    <li><a href="#">Winter Jackets</a></li>
                                                    <li><a href="#">Clothing Accessories</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Winter Shrugs</a></li>
                                                </ul>
                                            </li>
                                            <!--Grid 3-->
                                            <li class="nav-dropdown-grid">
                                                <h6>Brand</h6>
                                                <ul>
                                                    <li><a href="#">A&C Signature</a></li>
                                                    <li><a href="#">Angry Birds</a></li>
                                                    <li><a href="#">Macadamia</a></li>
                                                    <li><a href="#">Miller & Schweizer</a></li>
                                                    <li><a href="#">Stylet</a></li>
                                                    <li><a href="#">Van Heusen</a></li>
                                                    <li><a href="#">Wrangler</a></li>
                                                    <li><a href="#">Wills Lifestyle</a></li>
                                                    <li><a href="#">X'Pose</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-dropdown-grid">
                                                <a href="#" class="sub-banner">
                                                    <img src="images/banner_115145.jpg" alt="" /></a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                                <!-- End Drodown Menu -->
                            </li>
                            <li>
                                <a href="shop_list.php">Kids</a>
                                <!-- Drodown Menu ------->
                                <ul class="nav-dropdown js-nav-dropdown">
                                    <li class="container">
                                        <ul class="row">
                                            <!--Grid 1-->
                                            <li class="nav-dropdown-grid">
                                                <h6>Kid's</h6>
                                                <ul>
                                                    <li><a href="#">Tops & Tunics</a></li>
                                                    <li><a href="#">Shorts & Capris</a></li>
                                                    <li><a href="#">Twin Sets</a></li>
                                                    <li><a href="#">Jeans & Trousers</a></li>
                                                    <li><a href="#">Leggings & Jeggings</a></li>
                                                    <li><a href="#">Skirts</a></li>
                                                    <li><a href="#">Jumpsuits</a></li>
                                                    <li><a href="#">Casual Dresses</a></li>
                                                    <li><a href="#">Ethnic Wear</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                                <!-- End Drodown Menu -->
                            </li>
                            <li>
                                <a href="shop_list.php">Brand</a>
                                <!-- Drodown Menu ------->
                                <ul class="nav-dropdown js-nav-dropdown">
                                    <li class="container">
                                        <ul class="row">
                                            <!--Grid 1-->
                                            <li class="nav-dropdown-grid">
                                                <ul>
                                                    <li><a href="#">A&C Signature</a></li>
                                                    <li><a href="#">Angry Birds</a></li>
                                                    <li><a href="#">Macadamia</a></li>
                                                    <li><a href="#">Miller & Schweizer</a></li>
                                                    <li><a href="#">Stylet</a></li>
                                                    <li><a href="#">Van Heusen</a></li>
                                                    <li><a href="#">Wrangler</a></li>
                                                    <li><a href="#">Wills Lifestyle</a></li>
                                                    <li><a href="#">X'Pose</a></li>
                                                </ul>
                                            </li>
                                            <!--Grid 2-->
                                            <li class="nav-dropdown-grid">
                                                <ul>
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">United State</a></li>
                                                    <li><a href="#">Google</a></li>
                                                    <li><a href="#">Coca-Cola</a></li>
                                                    <li><a href="#">Microsoft</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">Facebook</a></li>
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="#">Instagram</a></li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                                <!-- End Drodown Menu -->
                            </li>
                            
							<li>
                                <a href="login-register.php"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Login</span></a>
                            </li>
                            <li class="dropdown-nav">
                                <a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i><span class="hidden-sm-down">My Account</span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                                <!--Dropdown-->
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="login-register.php">My Account</a></li>
                                        <li><a href="#">Order History</a></li>
                                       
                                        <li><a href="shop_list.php">My Wishlist</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                    </ul>
                                    <span class="divider"></span>
                                    <ul>
                                        <li><a href="login-register.php"><i class="fa fa-lock left" aria-hidden="true"></i>Login</a></li>
                                        <li><a href="login-register.php"><i class="fa fa-user left" aria-hidden="true"></i>Create an Account</a></li>
                                    </ul>
                                </div>
                                <!--End Dropdown-->
                            </li>
                            
                            <li>
                                <a href="about_us.php">About</a>
                            </li>
                            <li>
                                <a href="contact_us.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Navigation Menu -->

                </div>
            </div>
            <!-- End Header Container -->
        </header>
        <!-- End Header -->

</head>