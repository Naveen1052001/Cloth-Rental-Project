<!DOCTYPE html>
<html lang="en">



<head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="DigiPix" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DigiPix">
    <meta name="keywords" content="DigiPix">
    <meta name="author" content="DigiPix">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <title>Review</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">

</head>

<body class="theme-color2 light ltr">

    <!-- header start -->
    <header class="header-style-2" id="home">
        <?php include('header.php');?>
    </header>
    <!-- header end -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="index.php">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="toggle-category">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="cart.php">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="wishlist.php">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                           
                        </ol>
                    </nav>
                    <h3>Review</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Review Section Start -->
    <section class="review-section section-b-space">
        <div class="container">
            <div class="row g-4 grid">
                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>This was a great experience. I explained to Greg what I was looking for and he brought
                                samples with him that met my criteria exactly as to product quality and price. He was
                                very knowledgeable about the products and very easy to work with. I was able to schedule
                                the work within two weeks of signing the contract and they were able to do the demo and
                                installation in two days.</p>

                            <p>They did a very good job on the installation and they also cleaned up after themselves,
                                including vacuuming the newly laid carpet. I have never had a carpet installer do that!
                                Everyone I spoke with at Tish was very accommodating. I highly recommend them.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/1.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>Tish installed hardwood flooring in our dining room and family room. Greg Hollinden
                                measured, provided reasonable quote and provided outstanding installation. Their
                                installer, Shane did a superior job. Future flooring needs will be addressed by Tish!
                            </p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/2.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>I was very impressed with the service I received from Tish Flooring. They we’re prompt,
                                courteous and professional. It was a fantastic value for my money and they followed up
                                to make sure I was happy with their service. Everyone I came in contact with was
                                wonderful! I would highly recommend Tish Flooring.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/3.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>Tish Flooring has been great from the beginning to the end of this transaction … Very
                                professional, well priced, and extremely customer service oriented.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/4.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>Great. They are a great company to deal with. Came out very timely, always had good
                                follow up, very nice people to deal with and reasonably priced. I would definitely use
                                them again.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/5.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>They were wonderful! Excellent all the way through! We had the carpet picked out and they
                                were so easy to work with. They are highly communicative and respond efficiently! We
                                would use them again in a heartbeat!</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/1.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>They are very professional and their craftsmanship is a testament to the pride in their
                                work.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/2.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>We would like thank Tish Flooring for a great product and to compliment the installers
                                for the excellent service they provided. We were very pleased with the overall quality
                                of service we received. Both installers displayed professionalism and the ability to get
                                the work done in an efficient and timely manner.</p>

                            <p>Most of all, they were knowledgeable about their product and eager to answer all of our
                                questions. We were astonished with the end product and will be sure to mention Tish
                                Flooring to friends and family who are in need of new flooring. Such a commitment to
                                great customer service is to be commended.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/3.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>A very positive experience from start to finish! They were very accommodating of my
                                schedule, reasonably priced, very professional and neat during installation.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/4.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>Tish was very professional. They were also one of the most responsive companies I have
                                ever worked with. I would email or call, and get a response within a couple hours at
                                max. My project manager went above and beyond to find me the carpet color I wanted in
                                the quality I desired. We will definitely use them again when we replace our upstairs
                                carpet.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/5.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>They do great work. They are very fair, very timely, and great to work with.</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/1.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item col-lg-4 col-sm-6">
                    <div class="review-box">
                        <div class="review-name">
                            <p>From the first contact the process was smooth and very professional…</p>
                        </div>
                        <div class="review-image">
                            <div class="review-profile">
                                <img src="assets/images/inner-page/review-image/2.jpg"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <i class="fas fa-quote-right"></i>
                            <div class="image-name">
                                <h3>John wike</h3>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
    <?php include('subscribe.php');?>   
    </section>
    <!-- Subscribe Section End -->

    <!-- footer start -->
    <footer class="footer-sm-space">
    <?php include('footer.php');?> 
    </footer>
    <!-- footer end -->

    

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- Isotope js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- Portfolio Grid js -->
    <script src="assets/js/portfolio-grid.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/home-script.js"></script>

</body>



</html>