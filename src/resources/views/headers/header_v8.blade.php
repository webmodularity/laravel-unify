<!--=== Header v8 ===-->
<div class="header-v8 header-sticky">
    <!-- Topbar blog -->
    <div class="blog-topbar">
        <div class="topbar-search-block">
            <div class="container">
                <form action="">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="search-close"><i class="icon-close"></i></div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-8">
                    <div class="topbar-time">{{ \Carbon\Carbon::now()->format('l, M jS Y') }}</div>
                    <div class="topbar-toggler"><span class="fa fa-angle-down"></span></div>
                    <ul class="topbar-list topbar-menu">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Forums</a></li>
                        <li>
                            <a href="javascript:void(0);">Dropdown</a>
                            <ul class="topbar-dropdown">
                                <li><a href="#">Dropdown</a></li>
                                <li><a href="#">Dropdown</a></li>
                                <li class="topbar-submenu">
                                    <a href="javascript:void(0);">Submenu</a>
                                    <ul class="topbar-submenu-in">
                                        <li><a href="#">Submenu</a></li>
                                        <li><a href="#">Submenu</a></li>
                                        <li class="topbar-submenu">
                                            <a href="javascript:void(0);">Submenu</a>
                                            <ul class="topbar-submenu-in">
                                                <li><a href="#">Submenu</a></li>
                                                <li><a href="#">Submenu</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cd-log_reg hidden-sm hidden-md hidden-lg"><strong><a class="cd-signin" href="javascript:void(0);">Login</a></strong></li>
                        <li class="cd-log_reg hidden-sm hidden-md hidden-lg"><strong><a class="cd-signup" href="javascript:void(0);">Register</a></strong></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-4 clearfix">
                    <i class="fa fa-search search-btn pull-right"></i>
                    <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
                        <li class="cd-log_reg home"><a class="cd-signin" href="javascript:void(0);">Login</a></li>
                        <li class="cd-log_reg"><a class="cd-signup" href="javascript:void(0);">Register</a></li>
                    </ul>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!-- End Topbar blog -->

    <!-- Navbar -->
    <div class="navbar mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="res-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-brand">
                    <a href="index.html">
                        <img src="vendor/unify/img/logo1-default.png" alt="Logo">
                    </a>
                </div>
            </div><!--/end responsive container-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <div class="res-container">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Option 1: Default Page</a></li>

                                <!-- One Page -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 2: One Page</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="One-Pages/Classic/index.html">- One Page Template</a></li>
                                        <li><a target="_blank" href="One-Pages/Classic/one_page_dark.html">- One Page Dark Option</a></li>
                                        <li><a target="_blank" href="One-Pages/Classic/one_page_home1.html">- One Page Option 1</a></li>
                                        <li><a target="_blank" href="One-Pages/Classic/one_page_home2.html">- One Page Option 2</a></li>
                                        <li><a target="_blank" href="One-Pages/Classic/one_page_home3.html">- One Page Option 3</a></li>
                                    </ul>
                                </li>
                                <!-- End One Page -->

                                <!-- Shop UI Page -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 3: Shop UI</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="E-Commerce/index.html">- Home Page</a></li>
                                        <li><a target="_blank" href="E-Commerce/shop-ui-inner.html">- Product Page</a></li>
                                        <li><a target="_blank" href="E-Commerce/shop-ui-filter-grid.html">- Filter Grid Page</a></li>
                                        <li><a target="_blank" href="E-Commerce/shop-ui-filter-list.html">- Filter List Page</a></li>
                                        <li><a target="_blank" href="E-Commerce/shop-ui-add-to-cart.html">- Checkout Page</a></li>
                                        <li><a target="_blank" href="E-Commerce/shop-ui-login.html">- Login Page</a></li>
                                        <li><a target="_blank" href="E-Commerce/shop-ui-register.html">- Registration Page</a></li>
                                    </ul>
                                </li>
                                <!-- End Shop UI -->

                                <!-- Blog Template -->
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 4: Blog Template</a>
                                    <ul class="dropdown-menu">
                                        <li><a target="_blank" href="Blog-Magazine/index.html">- Home Page</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">- Blog Page Layouts</a>
                                            <ul class="dropdown-menu">
                                                <li><a target="_blank" href="Blog-Magazine/blog_page_layouts1.html">Page Layouts v1</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_page_layouts2.html">Page Layouts v2</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_page_layouts3.html">Page Layouts v3</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_page_layouts4.html">Page Layouts v4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">- Blog Post Layouts</a>
                                            <ul class="dropdown-menu">
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts1.html">Post Layout v1</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts2.html">Post Layout v2</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts3.html">Post Layout v3</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts4.html">Post Layout v4</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts5.html">Post Layout v5</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts6.html">Post Layout v6</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts7.html">Post Layout v7</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts8.html">Post Layout v8</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts9.html">Post Layout v9</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts_ls.html">Left Sidebar Example</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_post_layouts_fw.html">Full Width Example</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:void(0);">- Grid Layouts</a>
                                            <ul class="dropdown-menu">
                                                <li><a target="_blank" href="Blog-Magazine/blog_grid_1.html">Grid: 1 Col</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_grid_2.html">Grid: 2 Col</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_grid_3.html">Grid: 3 Col</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_grid_4.html">Grid: 4 Col</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_grid_4_fw.html">Grid: Full Width (4 Col)</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_grid_2_rs.html">Grid: Right Sidebar (2 Col)</a></li>
                                                <li><a target="_blank" href="Blog-Magazine/blog_grid_2_ls.html">Grid: Left Sidebar (2 Col)</a></li>
                                            </ul>
                                        </li>
                                        <li><a target="_blank" href="Blog-Magazine/blog_single.html">- Single Page</a></li>
                                        <li><a target="_blank" href="Blog-Magazine/blog_home_boxed.html">- Home Boxed Page</a></li>
                                        <li><a target="_blank" href="Blog-Magazine/blog_home_boxed_space.html">- Home Boxed Space Page</a></li>
                                    </ul>
                                </li>
                                <!-- End Blog Template -->

                                <li><a href="page_home8.html">Option 5: Home Discover</a></li>
                                <li><a href="page_home14.html">Option 6: Home Incredible</a></li>
                                <li><a href="page_home9.html">Option 7: Home Creative</a></li>
                                <li><a href="page_home10.html">Option 8: Home Inspire</a></li>
                                <li><a href="page_home15.html">Option 9: Home Aspire</a></li>
                                <li><a href="page_home11.html">Option 10: Home Desire</a></li>
                                <li><a href="page_home17.html">Option 11: Home Allure</a></li>
                                <li><a href="page_jobs.html">Option 12: Home Jobs</a></li>
                                <li><a href="page_home3.html">Option 13: Amazing Content</a></li>
                                <li><a href="page_home6.html">Option 14: Home Magazine</a></li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Option 15: Home Sidebar</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="page_home12.html">- Home Left Sidebar</a></li>
                                        <li><a href="page_home13.html">- Home Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="page_home1.html">Option 16: Home Basic v1</a></li>
                                <li><a href="page_home2.html">Option 17: Home Basic v2</a></li>
                                <li><a href="page_home5.html">Option 18: Home Basic v3</a></li>
                                <li><a href="page_home4.html">Option 19: Home Basic v4</a></li>
                                <li><a href="page_home7.html">Option 20: Home Basic v5</a></li>
                                <li><a href="page_home16.html">Option 21: Home Basic v6</a></li>
                                <li><a href="page_home18.html">Option 22: Home Basic v7</a></li>
                            </ul>
                        </li>
                        <!-- End Home -->

                        <!-- World -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                World
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 md-margin-bottom-30">
                                                    <ul class="dropdown-link-list">
                                                        <li><a href="#">World</a></li>
                                                        <li><a href="#">Economy</a></li>
                                                        <li><a href="#">Sport</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                        <li><a href="#">Hi-Tech</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5 md-margin-bottom-30">
                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img16.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-video-camera"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">You CAN be sensitive to gluten without having coeliac disease, study finds</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img12.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Starbucks is introducing new coffee</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img15.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-volume-up"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">The benefits of tea</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->
                                                </div>
                                                <div class="col-md-5">
                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img26.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-volume-up"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Salted dessert recipes that walk the fine line of...</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img23.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Why your next glass of orange juice will cost you more</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-30">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img24.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Why your next glass of orange juice will cost you more</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- End World -->

                        <!-- Fashion -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Fashion
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 md-margin-bottom-30">
                                                    <ul class="dropdown-link-list">
                                                        <li><a href="#">World</a></li>
                                                        <li><a href="#">Economy</a></li>
                                                        <li><a href="#">Sport</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Hi-Tech</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5 md-margin-bottom-30">
                                                    <!-- Blog Grid -->
                                                    <div class="blog-grid">
                                                        <img class="img-responsive" src="assets/img/main/img9.jpg" alt="">
                                                        <h3 class="blog-grid-title-sm"><a href="blog_single.html">Is this the end for fashion police?</a></h3>
                                                    </div>
                                                    <!-- End Blog Grid -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img16.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-video-camera"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Nadège Vanhee-Cybulski makes Hermès debut</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="blog_single.html"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img15.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Minimalism gives way to embroidery and crystals as Paris shows draw to a close</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="blog_single.html"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-30">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img17.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">In bed with Cara Delevingne as she talks bags, boys and bunnies</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="blog_single.html"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- End Fashion -->

                        <!-- Archives -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Archives
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 md-margin-bottom-30">
                                                    <h2>Title goes here</h2>
                                                    <ul class="dropdown-link-list">
                                                        <li><a href="#">World</a></li>
                                                        <li><a href="#">Economy</a></li>
                                                        <li><a href="#">Sport</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Hi-Tech</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 md-margin-bottom-30">
                                                    <h2>Title goes here</h2>
                                                    <ul class="dropdown-link-list">
                                                        <li><a href="#">World</a></li>
                                                        <li><a href="#">Economy</a></li>
                                                        <li><a href="#">Sport</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Hi-Tech</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 md-margin-bottom-30">
                                                    <h2>Title goes here</h2>
                                                    <ul class="dropdown-link-list">
                                                        <li><a href="#">World</a></li>
                                                        <li><a href="#">Economy</a></li>
                                                        <li><a href="#">Sport</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Hi-Tech</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 md-margin-bottom-30">
                                                    <h2>Title goes here</h2>
                                                    <ul class="dropdown-link-list">
                                                        <li><a href="#">World</a></li>
                                                        <li><a href="#">Economy</a></li>
                                                        <li><a href="#">Sport</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                        <li><a href="#">Hi-Tech</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- End Archives -->

                        <!-- Lifestyle -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Lifestyle
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 md-margin-bottom-30">
                                                    <div class="blog-grid">
                                                        <img class="img-responsive" src="assets/img/main/img6.jpg" alt="">
                                                        <h3 class="blog-grid-title-sm"><a href="blog_single.html">Malaika Firth tells all: 'I met my boyfriend through Twitter'</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 md-margin-bottom-30">
                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img3.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-video-camera"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">You CAN be sensitive to gluten without having coeliac disease, study finds</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img17.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Starbucks is introducing new coffee</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb md-margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img25.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-volume-up"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">The benefits of tea</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->
                                                </div>
                                                <div class="col-md-4">
                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img26.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-volume-up"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Salted dessert recipes that walk the fine line of...</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb margin-bottom-20">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img18.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Why your next glass of orange juice will cost you more</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->

                                                    <!-- Blog Thumb -->
                                                    <div class="blog-thumb md-margin-bottom-30">
                                                        <div class="blog-thumb-hover">
                                                            <img src="assets/img/main/img8.jpg" alt="">
                                                            <a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
                                                        </div>
                                                        <div class="blog-thumb-desc">
                                                            <h3><a href="blog_single.html">Why your next glass of orange juice will cost you more</a></h3>
                                                            <ul class="blog-thumb-info">
                                                                <li>Mar 6, 2015</li>
                                                                <li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- End Blog Thumb -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- End Lifestyle -->

                        <!-- Life -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Life
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3 md-margin-bottom-30">
                                                    <div class="blog-grid">
                                                        <img class="img-responsive" src="assets/img/main/img1.jpg" alt="">
                                                        <h3 class="blog-grid-title-sm"><a href="#">Learning as you're earning: The alternative to a degree</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 md-margin-bottom-30">
                                                    <div class="blog-grid">
                                                        <img class="img-responsive" src="assets/img/main/img11.jpg" alt="">
                                                        <h3 class="blog-grid-title-sm"><a href="#">Universities found to offer ‘unlawful’ terms to students</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 md-margin-bottom-30">
                                                    <div class="blog-grid">
                                                        <img class="img-responsive" src="assets/img/main/img10.jpg" alt="">
                                                        <h3 class="blog-grid-title-sm"><a href="#">Harvard tops list of world university rankings again</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 sm-margin-bottom-30">
                                                    <div class="blog-grid">
                                                        <img class="img-responsive" src="assets/img/main/img21.jpg" alt="">
                                                        <h3 class="blog-grid-title-sm"><a href="#">New 5 star hotel in Sydney</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- End Life -->

                        <!-- Main Demo -->
                        <li><a href="index.html">Main Demo</a></li>
                        <!-- Main Demo -->
                    </ul>
                </div><!--/responsive container-->
            </div><!--/navbar-collapse-->
        </div><!--/end contaoner-->
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header v8 ===-->