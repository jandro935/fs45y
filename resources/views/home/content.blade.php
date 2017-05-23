@extends ('layout')

@section ('content')
    <!--header start-->
    <header>
        <!-- Start Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed white bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="fa fa-shopping-cart"></i>
                                <span class="badge">3</span>
                            </a>
                            <ul class="dropdown-menu cart-list">
                                <li>
                                    <a href="#" class="photo"><img src="/assets/imgs/cart-1.jpg" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Branded Frog</a></h6>
                                    <p>2x - <span class="price">$99.99</span></p>
                                </li>
                                <li>
                                    <a href="#" class="photo"><img src="/assets/imgs/cart-2.jpg" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Omnes Jeans</a></h6>
                                    <p>1x - <span class="price">$33.33</span></p>
                                </li>
                                <li>
                                    <a href="#" class="photo"><img src="/assets/imgs/cart-3.jpg" class="cart-thumb" alt="" /></a>
                                    <h6><a href="#">Man's T-shirt</a></h6>
                                    <p>2x - <span class="price">$109.99</span></p>
                                </li>
                                <li class="total">
                                    <span class="pull-right"><strong>Total</strong>: $242.00</span>
                                    <a href="#" class="btn btn-default btn-cart">Cart</a>
                                </li>
                            </ul>
                        </li>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./index.html">
                        <img src="/assets/imgs/logo-light.png" class="logo logo-display" alt="">
                        <img src="/assets/imgs/logo.png" class="logo logo-scrolled" alt="">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="" data-out="">
                        <li class="dropdown">
                            <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Agency</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="mp-agency1.html">Agency 1</a></li>
                                        <li><a href="mp-agency2.html">Agency 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Specialized</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="mp-fashion.html">Fashion</a></li>
                                        <li><a href="mp-education.html">Education</a></li>
                                        <li><a href="mp-interior.html">Interior</a></li>
                                        <li><a href="mp-car.html">Car Dealer</a></li>
                                        <li><a href="mp-resume.html">Resume/CV</a></li>
                                        <li><a href="mp-restaurant.html">Restaurant</a></li>
                                        <li><a href="mp-startup2.html">Startup</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Business</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="mp-business1.html">Business 1</a></li>
                                        <li><a href="mp-business2.html">Business 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >General</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="mp-general.html">General 1</a></li>
                                        <li><a href="mp-general2.html">General 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="mp-corporate1.html">Corporate</a></li>
                                <li><a href="mp-creative2.html">Creative</a></li>
                                <li><a href="shop-3.html">E-Commerce</a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Portfolio</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="mp-portfolio1.html">Portfolio 1</a></li>
                                        <li><a href="mp-portfolio2.html">Portfolio 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Photography</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="mp-photography1.html">Photography 1</a></li>
                                        <li><a href="mp-photography2.html">Photography 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                        <li><a href="blog-classic-2.html">Blog Classic 2</a></li>
                                        <li><a href="blog-single.html">Blog Standard</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="mp-parallax.html">Parallax</a></li>
                                <li><a href="mp-app-landing.html">App Landing</a></li>
                                <li><a href="index.html#onepage">One Pages Demo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Title Menu One</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="about-me.html">About Me</a></li>
                                                    <li><a href="about-us-1.html">About Us 1</a></li>
                                                    <li><a href="about-us-2.html">About Us 2</a></li>
                                                    <li><a href="service-1.html">Services 1</a></li>
                                                    <li><a href="service-2.html">Services 2</a></li>
                                                    <li><a href="career.html">Career</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Title Menu Two</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="team-1.html">Our Team 1</a></li>
                                                    <li><a href="team-2.html">Our Team 2</a></li>
                                                    <li><a href="faq-1.html">FAQ 1</a></li>
                                                    <li><a href="faq-2.html">FAQ 2</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                    <li><a href="rs-demo-404-ErrorPage.html">404 Error Alt</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Title Menu Three</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="pricing-table-1.html">Pricing Table 1</a></li>
                                                    <li><a href="pricing-table-2.html">Pricing Table 2</a></li>
                                                    <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                                    <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                                    <li><a href="contact-us-3.html">Contact Us 3</a></li>
                                                    <li><a href="rs-demo-coming-soon.html">Coming Soon</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Title Menu Four</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="rs-demo-ComingSoon2.html">Coming Soon Alt</a></li>
                                                    <li><a href="maintenance.html">Maintenance</a></li>
                                                    <li><a href="login-1.html">Login 1</a></li>
                                                    <li><a href="login-2.html">Login/Registration 2</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Features</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Navbar</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="nav-default.html">Nav Befault</a></li>
                                        <li><a href="nav-brand-center.html">Nav Brand Center</a></li>
                                        <li><a href="nav-brand-center-alt.html">Nav Brand Center alt</a></li>
                                        <li><a href="nav-brand-top.html">Nav Brand Top</a></li>
                                        <li><a href="nav-menu-left.html">Nav Left Align</a></li>
                                        <li><a href="nav-menu-attr.html">Nav Attr</a></li>
                                        <li><a href="nav-full.html">Nav Fullscreen </a></li>
                                        <li><a href="nav-sidebar.html">Nav Sidebar </a></li>
                                        <li><a href="nav-bottom.html">Nav Bottom</a></li>
                                        <li><a href="nav-scrollspy.html">Nav Scrollspy</a></li>
                                        <li><a href="nav-scrollspy-sidebar.html">Nav Scrollspy Sidebar</a></li>
                                        <li><a href="nav-transparent-with-white-border.html">Nav Trans..Border</a></li>
                                        <li><a href="nav-transparent-dark-link.html">Nav Trans.. Dark Link</a></li>
                                        <li><a href="nav-semi-transparent-light.html">Nav Semi Trans.. Light</a></li>
                                        <li><a href="nav-semi-transparent-dark.html">Nav Semi Trans.. Dark</a></li>
                                        <li><a href="nav-black.html">Navbar Black</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sliders Banner</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="sc-slider_full_screen.html">Slider Full Screen</a></li>
                                        <li><a href="sc-slider_full_width.html">Slider Full Width</a></li>
                                    </ul>
                                </li>
                                <li><a href="rs-demo-home.html">Slider Revolution</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Parallax Banner</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="sc-banner_1.html">Banner 1</a></li>
                                        <li><a href="sc-banner_2.html">Banner 2</a></li>
                                        <li><a href="sc-banner_3.html">Banner 3</a></li>
                                        <li><a href="sc-banner_4.html">Banner 4</a></li>
                                        <li><a href="sc-banner_5.html">Banner 5</a></li>
                                        <li><a href="sc-banner_6.html">Banner 6</a></li>
                                        <li><a href="sc-banner_7.html">Banner 7</a></li>
                                        <li><a href="sc-banner_8.html">Banner 8</a></li>
                                        <li><a href="sc-banner_9.html">Banner 9</a></li>
                                        <li><a href="sc-banner_10.html">Banner 10</a></li>
                                        <li><a href="sc-banner_11.html">Banner 11</a></li>
                                        <li><a href="sc-banner_12.html">Banner 12</a></li>
                                    </ul>
                                </li>

                                <li><a href="sc-page_title.html">Page Title Variations</a></li>
                                <li><a href="sc-footers.html">Footer Variations</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Portfolio</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Grid Portfolio</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="portfolio-grid-2.html">Grid 2</a></li>
                                        <li><a href="portfolio-grid-3.html">Grid 3</a></li>
                                        <li><a href="portfolio-grid-4.html">Grid 4</a></li>
                                        <li><a href="portfolio-grid-5.html">Grid 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Grid with Title</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="portfolio-grid-title-1.html">Grid 1</a></li>
                                        <li><a href="portfolio-grid-title-2.html">Grid 2</a></li>
                                        <li><a href="portfolio-grid-title-3.html">Grid 3</a></li>
                                        <li><a href="portfolio-grid-title-4.html">Grid 4</a></li>
                                        <li><a href="portfolio-grid-title-5.html">Grid 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Masonry Portfolio</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="portfolio-masonry-2.html">Masonry 2</a></li>
                                        <li><a href="portfolio-masonry-3.html">Masonry 3</a></li>
                                        <li><a href="portfolio-masonry-4.html">Masonry 4</a></li>
                                        <li><a href="portfolio-masonry-5.html">Masonry 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Masonry with Title</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="portfolio-masonry-title-2.html">Masonry 2</a></li>
                                        <li><a href="portfolio-masonry-title-3.html">Masonry 3</a></li>
                                        <li><a href="portfolio-masonry-title-4.html">Masonry 4</a></li>
                                        <li><a href="portfolio-masonry-title-5.html">Masonry 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-masonry-special.html">Masonry Special</a></li>
                                <li><a href="portfolio-masonry-special-alt.html">Masonry Special Alt</a></li>
                                <li><a href="portfolio-details-1.html">Portfolio Details 1</a></li>
                                <li><a href="portfolio-details-2.html">Portfolio Details 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shortcodes</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="sc-accordion.html">Accordion/Toggle</a></li>
                                                    <li><a href="sc-alerts.html">Alerts</a></li>
                                                    <li><a href="sc-blurb.html">Blurb</a></li>
                                                    <li><a href="sc-buttons.html">Buttons</a></li>
                                                    <li><a href="sc-bullets.html">Bullets</a></li>
                                                    <li><a href="sc-blogs.html">Blog Post</a></li>
                                                    <li><a href="sc-carousel.html">Carousel</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="sc-clients.html">Clients</a></li>
                                                    <li><a href="sc-custom_line_icons.html">Custom Line Icons</a></li>
                                                    <li><a href="sc-form.html">Forms</a></li>
                                                    <li><a href="sc-fun_factors.html">Fun Factors</a></li>
                                                    <li><a href="sc-heading.html">Heading</a></li>
                                                    <li><a href="sc-image_post.html">Image Post</a></li>
                                                    <li><a href="sc-parallax.html">Parallax</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="sc-price_tables.html">Price Tables</a></li>
                                                    <li><a href="sc-progress_bar.html">Progress Bar</a></li>
                                                    <li><a href="sc-promo.html">Promotional</a></li>
                                                    <li><a href="sc-social-links.html">Social Links</a></li>
                                                    <li><a href="sc-steps.html">Steps</a></li>
                                                    <li><a href="sc-subscribe.html">Subscriptions</a></li>
                                                    <li><a href="sc-tabs.html">Tabs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="sc-team.html">Team Members</a></li>
                                                    <li><a href="sc-testimonials.html">Testimonials</a></li>
                                                    <li><a href="sc-timeline.html">Timeline</a></li>
                                                    <li><a href="http://bicon.lab.themebucket.net/" target=“_blank”>Line Icon Pack <small class="label label-primary"> Free</small> </a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop-2.html">Shop Grid 2</a></li>
                                <li><a href="shop-3.html">Shop Grid 3</a></li>
                                <li><a href="shop-4.html">Shop Grid 4</a></li>
                                <li><a href="shop-single.html">Product Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-classic.html">Blog Classic 1</a></li>
                                <li><a href="blog-classic-2.html">Blog Classic 2</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog Standard</a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-single.html">Blog Centered</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog Details </a>
                                    <ul class="dropdown-menu right">
                                        <li><a href="blog-details-left-sidebar.html">Details Left Sidebar</a></li>
                                        <li><a href="blog-details-right-sidebar.html">Details Right Sidebar</a></li>
                                        <li><a href="blog-details-centered.html">Details Centered</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h5 class="title">Custom Pages</h5>
                    <ul class="link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="title">About Us</h5>
                    <p class="light-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque beatae dicta nulla odit, pariatur
                        quas saepe similique. Accusantium, ad consectetur eius ex facere neque nobis numquam, placeat
                        quibusdam repellendus tempora?</p>
                </div>
                <div class="widget">
                    <h5 class="title">Social Links</h5>
                    <div class="social-links sl-default border-link round-link colored-link">
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="g-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="#" class="dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#" class="behance">
                            <i class="fa fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

    <!--banner start-->
    <section class="ImageBackground ImageBackground--overlay ImageBackground--overlay--gradient js-FullHeight js-Parallax" data-overlay="8">
        <div class="ImageBackground__holder">
            <img src="/assets/imgs/banner/general-banner.jpg" alt="...">
        </div>
        <div class="container u-vCenter">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="u-MarginBottom30"><img class="retina" src="/assets/imgs/banner-logo.png" alt=""/></div>

                    <div class="u-Block u-MarginBottom30">
                        <span class="u-BorderRadius4 text-uppercase u-InlineBlock u-FontSize40 bg-dark text-lg u-Padding20 u-xs-FontSize12 u-LetterSpacing10">the ultimate template</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner end-->

    <!--welcome start-->
    <section class="u-PaddingTop150 u-PaddingBottom150 u-xs-PaddingTop70 u-xs-PaddingBottom70">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <small class="text-uppercase u-LetterSpacing1">welcome to our planet</small>
                    <h1 class="u-MarginTop5 u-MarginBottom10">We Are Alien</h1>
                    <div class="Split Split--height2"></div>
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <p class="u-MarginTop35">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima.</p>
                </div>
            </div>

            <div class="row u-MarginTop100 u-xs-MarginTop40">
                <div class="col-md-4 col-sm-6 text-center u-MarginBottom35">
                    <div class="u-BoxShadow100">
                        <div class="Blurb Blurb--wrapper Blurb--hoverBg Blurb--hoverBg--gradient u-BorderRadius6">
                            <div class="Blurb__hoverBg Thumb Thumb--92px Thumb--black u-Rounded">
                                <i class="Thumb__iconCenter Icon Icon-mobile Icon--32px"></i>
                            </div>
                            <h3 class="Blurb__hoverText">Fully Responsive</h3>
                            <p class="Blurb__hoverText u-LineHeight2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center u-MarginBottom35">
                    <div class="u-BoxShadow100">
                        <div class="Blurb Blurb--wrapper Blurb--hoverBg Blurb--hoverBg--gradient u-BorderRadius6">
                            <div class="Blurb__hoverBg Thumb Thumb--92px Thumb--black u-Rounded">
                                <i class="Thumb__iconCenter Icon Icon-layers Icon--32px"></i>
                            </div>
                            <h3 class="Blurb__hoverText">Highly Customizable</h3>
                            <p class="Blurb__hoverText u-LineHeight2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 text-center">
                    <div class="u-BoxShadow100">
                        <div class="Blurb Blurb--wrapper Blurb--hoverBg Blurb--hoverBg--gradient u-BorderRadius6">
                            <div class="Blurb__hoverBg Blurb__hoverBg--gradient Thumb Thumb--92px Thumb--black u-Rounded">
                                <i class="Thumb__iconCenter Icon Icon-download Icon--32px"></i>
                            </div>
                            <h3 class="Blurb__hoverText">Free Updates</h3>
                            <p class="Blurb__hoverText u-LineHeight2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--welcome end-->

    <!--accordion start-->
    <section class="u-PaddingBottom150 u-xs-PaddingTop50 u-xs-PaddingBottom70">
        <div class="container">
            <div class="row u-MarginBottom100 u-xs-MarginBottom50 text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <small class="text-uppercase u-LetterSpacing1">mobile friendly</small>
                    <h1 class="u-MarginTop5 u-MarginBottom10">Full Compatible with Mobile</h1>
                    <div class="Split Split--height2"></div>
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <p class="u-MarginTop35">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima.</p>
                </div>
            </div>
            <div class="row u-FlexCenter u-sm-Block">
                <div class="col-md-4 col-md-push-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 u-sm-MarginBottom30 u-xs-MarginBottom0">
                    <img class="img-responsive" src="/assets/imgs/mobile-parallal-600.png" alt="...">
                </div>
                <div class="col-md-4 col-md-pull-4 col-sm-6 col-xs-12">
                    <div class="panel-group u-PaddingRight20 u-sm-PaddingRight0 text-right text-left--xs u-MarginTop50" id="accordion7">
                        <div class="panel panel-shadow">
                            <div class="panel-heading" id="heading7-1">
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion7" href="#collapse7-1" aria-expanded="true" aria-controls="collapse7-1">
                                        Perfect Responsive
                                    </a>
                                </div>
                            </div>
                            <div id="collapse7-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading7-1">
                                <div class="panel-body">
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-shadow">
                            <div class="panel-heading" role="tab" id="heading7-2">
                                <div class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion7" href="#collapse7-2" aria-expanded="false" aria-controls="collapse7-2">
                                        Quick Loading
                                    </a>
                                </div>
                            </div>
                            <div id="collapse7-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7-2">
                                <div class="panel-body">
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-shadow">
                            <div class="panel-heading" role="tab" id="heading7">
                                <div class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion7" href="#collapse7-3" aria-expanded="false" aria-controls="collapse7-3">
                                        Mobile Navigation
                                    </a>
                                </div>
                            </div>
                            <div id="collapse7-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7-3">
                                <div class="panel-body">
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel-group u-PaddingRight20 u-sm-PaddingRight0 text-left u-MarginTop50" id="accordion8">
                        <div class="panel panel-shadow">
                            <div class="panel-heading" id="heading8-1">
                                <div class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapse8-1" aria-expanded="false" aria-controls="collapse8-1">
                                        Exact Animation
                                    </a>
                                </div>
                            </div>
                            <div id="collapse8-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8-1">
                                <div class="panel-body">
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-shadow">
                            <div class="panel-heading" role="tab" id="heading8-2">
                                <div class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapse8-2" aria-expanded="false" aria-controls="collapse8-2">
                                        Complele Contents
                                    </a>
                                </div>
                            </div>
                            <div id="collapse8-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8-2">
                                <div class="panel-body">
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-shadow">
                            <div class="panel-heading" role="tab" id="heading8">
                                <div class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapse8-3" aria-expanded="false" aria-controls="collapse8-3">
                                        No Broken View
                                    </a>
                                </div>
                            </div>
                            <div id="collapse8-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8-3">
                                <div class="panel-body">
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--accordion end-->

    <!-- image block start-->
    <section class="bg-darker u-xs-PaddingBottom30">
        <div class="ImageBlock ImageBlock--switch">
            <div class="ImageBlock__image col-md-6 col-sm-4">
                <div class="ImageBackground ImageBackground--overlay" data-overlay="0">
                    <div class="ImageBackground__holder">
                        <img src="/assets/imgs/b13-1200.jpg" alt="..."/>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-7">
                        <h4 class="u-MarginTop0 u-MarginBottom0 default-color">about us</h4>
                        <h1 class="u-MarginTop5 u-MarginBottom30">Who We Are</h1>
                        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                        <br/>
                        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--image block end-->

    <!--work start-->
    <section class="u-PaddingTop150 u-xs-PaddingTop70">
        <div class="container">
            <div class="row u-MarginBottom100 u-xs-MarginBottom50 text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <small class="text-uppercase u-LetterSpacing1">what we do</small>
                    <h1 class="u-MarginTop5 u-MarginBottom10">Our Latest Work</h1>
                    <div class="Split Split--height2"></div>
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <p class="u-MarginTop35">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima.</p>
                </div>
            </div>
        </div>
        <div class="js-Portfolio portfolio-grid portfolio-gallery grid-4">
            <div class="portfolio-item cat1 cat3 cat5">
                <a href="/assets/imgs/portfolio/01.jpg" class="portfolio-image popup-gallery" title="We are creative">
                    <img src="/assets/imgs/portfolio/01.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>We are creative</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item cat2 cat3 cat4">
                <a href="/assets/imgs/portfolio/02.jpg" class="portfolio-image popup-gallery" title="Branding">
                    <img src="/assets/imgs/portfolio/02.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>Branding</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item cat1 cat2 cat3">
                <a href="/assets/imgs/portfolio/03.jpg" class="portfolio-image popup-gallery" title="Design">
                    <img src="/assets/imgs/portfolio/03.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>Design</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item cat1 cat4">
                <a href="/assets/imgs/portfolio/04.jpg" class="portfolio-image popup-gallery" title="Photography">
                    <img src="/assets/imgs/portfolio/04.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>Photography</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item cat3 cat5">
                <a href="/assets/imgs/portfolio/05.jpg" class="portfolio-image popup-gallery" title="Marketing">
                    <img src="/assets/imgs/portfolio/05.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>Marketing</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item cat4 cat5">
                <a href="/assets/imgs/portfolio/06.jpg" class="portfolio-image popup-gallery" title="Web Desgin">
                    <img src="/assets/imgs/portfolio/06.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>Web Design</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item cat2 cat3">
                <a href="/assets/imgs/portfolio/07.jpg" class="portfolio-image popup-gallery" title="Media">
                    <img src="/assets/imgs/portfolio/07.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>Media</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item cat3 cat4 cat5">
                <a href="/assets/imgs/portfolio/08.jpg" class="portfolio-image popup-gallery" title="Portfolio">
                    <img src="/assets/imgs/portfolio/08.jpg" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content">
                            <h4>Portfolio</h4>
                            <div class="portfolio-category">
                                <span>Cat 1</span>
                                <span>Cat 2</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--work end-->

    <!--team start-->
    <section class="u-PaddingTop150 u-PaddingBottom150 u-xs-PaddingTop70 u-xs-PaddingBottom70">
        <div class="container">
            <div class="row u-MarginBottom100 u-xs-MarginBottom50 text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <small class="text-uppercase u-LetterSpacing1">we are genious</small>
                    <h1 class="u-MarginTop5 u-MarginBottom10">Meet the Team</h1>
                    <div class="Split Split--height2"></div>
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <p class="u-MarginTop35">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 u-MarginBottom35">
                    <div class="u-BoxShadow100">
                        <div class="Blurb Blurb--wrapper20">
                            <img class="img-responsive" src="/assets/imgs/t3.jpg" alt="...">
                            <h4 class="u-MarginTop25 u-MarginBottom0">Jonathan Smith</h4>
                            <p class="text-muted">Chief Operating Officer</p>
                            <p class="u-MarginTop20 Anchors">
                                <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 u-MarginBottom35">
                    <div class="u-BoxShadow100">
                        <div class="Blurb Blurb--wrapper20">
                            <img class="img-responsive" src="/assets/imgs/t4.jpg" alt="...">
                            <h4 class="u-MarginTop25 u-MarginBottom0">Abrahamitry Mak</h4>
                            <p class="text-muted">Creative Director</p>
                            <p class="u-MarginTop20 Anchors">
                                <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 u-MarginBottom35">
                    <div class="u-BoxShadow100">
                        <div class="Blurb Blurb--wrapper20">
                            <img class="img-responsive" src="/assets/imgs/t5.jpg" alt="...">
                            <h4 class="u-MarginTop25 u-MarginBottom0">Cristiana Lisopa</h4>
                            <p class="text-muted">Promotion Designer</p>
                            <p class="u-MarginTop20 Anchors">
                                <a class="text-muted" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a class="text-muted" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="text-muted" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Blockquote Blockquote--borderLeft5 u-BoxShadow40 u-BorderRadius4 u-MarginTop100 u-xs-MarginTop50">
                <div class="row u-FlexCenter u-xs-Block">
                    <div class="col-sm-9">
                        <h3 class="u-MarginTop0 u-MarginBottom10 u-Weight300">Be part of our team</h3>
                        <p class="u-Margin0">This one is a big one that has been haunting me since teenage years.</p>
                    </div>
                    <div class="col-sm-3 text-right text-left--xs u-xs-MarginTop20">
                        <a class="btn btn-primary" href="#">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team end-->

    <!--blog start-->
    <section class="bg-lighter u-PaddingTop150 u-PaddingBottom90 u-xs-PaddingTop70 u-xs-PaddingBottom20">
        <div class="container">
            <div class="row u-MarginBottom100 u-xs-MarginBottom30">
                <div class="col-md-12 text-center ">
                    <small class="text-uppercase u-LetterSpacing1">get our thoughts</small>
                    <h1 class="u-MarginTop5 u-MarginBottom10">Latest From Blog</h1>
                    <div class="Split Split--height2"></div>
                    <!--<p class="u-MarginTop35">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo </p>-->
                </div>
            </div>
            <div class="row u-MarginTop60">
                <div class="col-md-4 col-sm-6 u-MarginBottom60">
                    <div class="u-PaddingRight40 u-md-Padding0 u-sm-PaddingRight20 u-xs-PaddingLeft20">
                        <div class="u-BoxShadow100">
                            <div class="Blurb">
                                <a href="#"><img class="img-responsive" src="/assets/imgs/b1.jpg" alt="..."></a>
                                <div class="u-Padding30 text-center">
                                    <h4 class="text-uppercase u-MarginTop10 u-MarginBottom10"><a class="Blurb__hoverText link-normal" href="#">Ultra modern design</a></h4>
                                    <p class="small u-MarginBottom25"><a class="btn-go" href="#">MARTIN SMITH</a> | <a class="btn-go" href="#">9 DEC 2015</a></p>
                                    <p class="u-LineHeight2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 u-MarginBottom60">
                    <div class="u-PaddingLeft20 u-PaddingRight20 u-md-Padding0 u-sm-PaddingLeft20 u-xs-PaddingRight20">
                        <div class="u-BoxShadow100">
                            <div class="Blurb">
                                <a href="#"><img class="img-responsive" src="/assets/imgs/b2.jpg" alt="..."></a>
                                <div class="u-Padding30 text-center">
                                    <h4 class="text-uppercase u-MarginTop10 u-MarginBottom10"><a class="Blurb__hoverText link-normal" href="#">Fun! Work together</a></h4>
                                    <p class="small u-MarginBottom25"><a class="btn-go" href="#">MARTIN SMITH</a> | <a class="btn-go" href="#">9 DEC 2015</a></p>
                                    <p class="u-LineHeight2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 u-MarginBottom60">
                    <div class="u-PaddingLeft40 u-md-Padding0 u-sm-PaddingLeft10 u-sm-PaddingRight10 u-xs-PaddingLeft20 u-xs-PaddingRight20">
                        <div class="u-BoxShadow100">
                            <div class="Blurb">
                                <a href="#"><img class="img-responsive" src="/assets/imgs/b3.jpg" alt="..."></a>
                                <div class="u-Padding30 text-center">
                                    <h4 class="text-uppercase u-MarginTop10 u-MarginBottom10"><a class="Blurb__hoverText link-normal" href="#">Never miss a bit</a></h4>
                                    <p class="small u-MarginBottom25"><a class="btn-go" href="#">MARTIN SMITH</a> | <a class="btn-go" href="#">9 DEC 2015</a></p>
                                    <p class="u-LineHeight2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row u-MarginTop20">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn btn-shadow">Read All Blogs</a>
                </div>
            </div>
        </div>
    </section>
    <!--blog end-->

    <!--testimonials start-->
    <section class="u-PaddingTop150 u-PaddingBottom150 u-xs-PaddingTop70 u-xs-PaddingBottom70">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ">
                    <small class="text-uppercase u-LetterSpacing1">our client always</small>
                    <h1 class="u-MarginTop5 u-MarginBottom10">Speak for Us</h1>
                    <div class="Split Split--height2"></div>
                </div>
            </div>
            <div class="row u-MarginTop100 u-xs-MarginTop50">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                    <div class="js-OwlCarousel owl-carousel owl-theme OwlDots">
                        <div class="owl-item">
                            <div class="Thumb Thumb--116px Thumb--image Thumb--rounded">
                                <img class="img-responsive" src="/assets/imgs/a0.jpg" alt="...">
                            </div>
                            <p class="h4 u-LineHeight3 text-italic u-MarginTop45">Nam nec dui dolor. Curabitur in laoreet erat. Nam nec dui dolor. Aliquam varius dolor nunc, interdum commodo justoporttitor vitae. Quisque fermentum purus.</p>
                            <h5 class="text-primary text-uppercase u-MarginTop60 u-MarginBottom5 u-Weight700">- Kevin Paige -</h5>
                            <p class="small">CEO - Microsot</p>
                        </div>
                        <div class="owl-item">
                            <div class="Thumb Thumb--116px Thumb--image Thumb--rounded">
                                <img class="img-responsive" src="/assets/imgs/a0.jpg" alt="...">
                            </div>
                            <p class="h4 u-LineHeight3 text-italic u-MarginTop45">Nam nec dui dolor. Curabitur in laoreet erat. Nam nec dui dolor. Aliquam varius dolor nunc, interdum commodo justoporttitor vitae. Quisque fermentum purus.</p>
                            <h5 class="text-primary text-uppercase u-MarginTop60 u-MarginBottom5 u-Weight700">- Piter Paul -</h5>
                            <p class="small">CTO - Apple</p>
                        </div>
                        <div class="owl-item">
                            <div class="Thumb Thumb--116px Thumb--image Thumb--rounded">
                                <img class="img-responsive" src="/assets/imgs/a0.jpg" alt="...">
                            </div>
                            <p class="h4 u-LineHeight3 text-italic u-MarginTop45">Nam nec dui dolor. Curabitur in laoreet erat. Nam nec dui dolor. Aliquam varius dolor nunc, interdum commodo justoporttitor vitae. Quisque fermentum purus.</p>
                            <h5 class="text-primary text-uppercase u-MarginTop60 u-MarginBottom5 u-Weight700">- Piter Paul -</h5>
                            <p class="small">CTO - Apple</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonials end-->

    <!--services start-->
    <section class="u-BoxShadow40 u-PaddingTop150 u-PaddingBottom50 u-xs-PaddingTop70 u-xs-PaddingBottom0">
        <div class="container u-MarginTop70">
            <div class="row">
                <div class="col-md-4 col-sm-6 u-MarginBottom95">
                    <h2 class="u-MarginTop0">Our mission is very simple we just wanna dominate our spaces.</h2>
                    <p class="u-LineHeight2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                    <br>
                    <br>
                    <p>
                        <a href="#" class="btn btn-shadow u-Weight300">Explore More</a>
                    </p>
                </div>
                <div class="col-md-7 col-md-offset-1">
                    <div class="row u-MarginTop15">
                        <div class="col-sm-6 u-MarginBottom70">
                            <div class="Blurb u-PaddingLeft15 u-PaddingRight15">
                                <div class="media u-OverflowVisible">
                                    <div class="media-left media-middle-- u-PaddingRight25">
                                        <div class="Blurb__hoverBg Blurb__hoverBg--gradient Thumb Thumb--rotate Thumb--black u-BorderRadius4">
                                            <i class="Thumb__iconCenter Thumb__iconCenter--rotate- Icon Icon-mobile Icon--18px" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="Blurb__hoverText u-MarginTop0">Clean Code</h4>
                                        <p class="u-LineHeight2">This one is a big one that has been haunting me since teenage years. When I was in highschool and beginning of University.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 u-MarginBottom70">
                            <div class="Blurb u-PaddingLeft15 u-PaddingRight15">
                                <div class="media u-OverflowVisible">
                                    <div class="media-left media-middle-- u-PaddingRight25">
                                        <div class="Blurb__hoverBg Blurb__hoverBg--gradient Thumb Thumb--rotate Thumb--black u-BorderRadius4">
                                            <i class="Thumb__iconCenter Thumb__iconCenter--rotate- Icon Icon-layers Icon--18px" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="Blurb__hoverText u-MarginTop0">Layout Variations</h4>
                                        <p class="u-LineHeight2">This one is a big one that has been haunting me since teenage years. When I was in highschool and beginning of University.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 u-MarginBottom70">
                            <div class="Blurb u-PaddingLeft15 u-PaddingRight15">
                                <div class="media u-OverflowVisible">
                                    <div class="media-left media-middle-- u-PaddingRight25">
                                        <div class="Blurb__hoverBg Blurb__hoverBg--gradient Thumb Thumb--rotate Thumb--black u-BorderRadius4">
                                            <i class="Thumb__iconCenter Thumb__iconCenter--rotate- Icon Icon-support Icon--18px" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="Blurb__hoverText u-MarginTop0">Amazing Support</h4>
                                        <p class="u-LineHeight2">This one is a big one that has been haunting me since teenage years. When I was in highschool and beginning of University.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 u-MarginBottom70">
                            <div class="Blurb u-PaddingLeft15 u-PaddingRight15">
                                <div class="media u-OverflowVisible">
                                    <div class="media-left media-middle-- u-PaddingRight25">
                                        <div class="Blurb__hoverBg Blurb__hoverBg--gradient Thumb Thumb--rotate Thumb--black u-BorderRadius4">
                                            <i class="Thumb__iconCenter Thumb__iconCenter--rotate- Icon Icon-paintbrush Icon--18px" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="Blurb__hoverText u-MarginTop0">Impressive Design</h4>
                                        <p class="u-LineHeight2">This one is a big one that has been haunting me since teenage years. When I was in highschool and beginning of University.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services end-->

    <!--client start-->
    <section class="u-PaddingTop50 u-PaddingBottom50">
        <div class="container">
            <div class="row">
                <div class="Clients col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1 text-center">
                    <img src="/assets/imgs/br0.jpg" alt="..." height="95">
                    <img src="/assets/imgs/br1.jpg" alt="..." height="95">
                    <img src="/assets/imgs/br3.jpg" alt="..." height="95">
                    <img src="/assets/imgs/br4.jpg" alt="..." height="95">
                    <img src="/assets/imgs/br2.jpg" alt="..." height="95">
                </div>
            </div>
        </div>
    </section>
    <!--client end-->

    <!--footer start-->
    <footer class="bg-darker u-PaddingTop100 u-xs-PaddingTop70">
        <div class="container text-sm">
            <div class="row">
                <div class="col-md-3 u-xs-MarginBottom30">
                    <div class="logo u-MarginBottom25">
                        <img src="/assets/imgs/logo-light.png" alt="">
                    </div>
                    <p>Alien is  fully responsible, performance oriented and SEO optimized, retina ready HTML template.</p>
                    <h5 class="u-Weight700">Alien LLC</h5>
                    <p>Street nr 100, 4536534, Chicago, US</p>

                    <p>T (212) 555 55 00 <br>
                        Email: mail@example.com
                    </p>
                </div>
                <div class="col-md-3 u-xs-MarginBottom30">
                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Follow Us</h5>
                    <ul class="light-gray-link border-bottom-link list-unstyled u-LineHeight2 u-PaddingRight40 u-xs-PaddingRight0">
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>About Us</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Career</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Terms &amp; Condition</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Privacy Policy</a></li>
                        <li> <a href="#"><i class="fa fa-angle-right u-MarginRight10" aria-hidden="true"></i>Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 u-xs-MarginBottom30">
                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Recent Post</h5>
                    <ul class="light-gray-link list-unstyled u-MarginBottom0">
                        <li class="u-MarginBottom15">
                            <a class="" href="#">
                                The ultimate guide to freelancing as a creative...
                            </a>
                            <p class="">24 February 2017</p>
                        </li>
                        <li class="u-MarginBottom15">
                            <a class="" href="#">
                                Searching for the best UX: search forms and boxes in web design
                            </a>
                            <p>19 January 2017</p>
                        </li>
                        <li class="u-MarginBottom15">
                            <a class="" href="#">
                                Top 10 free tools for frontend web development
                            </a>
                            <p>2 January 2017</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop0">Subscribe</h5>

                    <form action="">
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </form>

                    <h5 class="text-uppercase u-Weight800 u-LetterSpacing2 u-MarginTop50">We are Social</h5>
                    <div class="social-links sl-default gray-border-links border-link circle-link colored-hover">
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="g-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="#" class="dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center u-MarginTop30">
            <div class="footer-separator"></div>
            <p class="u-MarginBottom0 u-PaddingTop30 u-PaddingBottom30">Copyright 2017 @ Alien Template.</p>
        </div>
    </footer>
    <!--footer end-->
@endsection