


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
    <title>Shop List</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="assets/css/vendors/ion.rangeSlider.min.css" />

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
                    <h3>Welcome to Men's Fashion</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Shop Section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="category-option">
                        <div class="button-close mb-3">
                            <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                        </div>
                        <div class="accordion category-name" id="accordionExample">

                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        Men's Category
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault10">Shirts</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">T-shirts
                                                        Solly</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault12">Kurtas</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault13">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault13">Sweatshirts</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault14">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault14">Jackets</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault15">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault15">Blazers</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault16">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault16">Suits</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault17">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault17">Tuxedous</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault18">
                                                    <label class="form-check-label" for="flexCheckDefault18">Sherwani</label>
                                                    <p class="font-light">(25)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-color">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        Color
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item category-price">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">Price</button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="range-slider category-list">
                                            <input type="text" class="js-range-slider" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">
                                        Discount Range
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault19">
                                                    <label class="form-check-label" for="flexCheckDefault19">5% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault20">
                                                    <label class="form-check-label" for="flexCheckDefault20">10% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault21">
                                                    <label class="form-check-label" for="flexCheckDefault21">20% and
                                                        above</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider section start -->
                            <div class="most-popular">
                                <div class="title title-2 text-lg-start">
                                    <h3>Most Popular</h3>
                                </div>

                                <div class="product-slider border-top round-arrow1">
                                    <div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/1.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Black Sherwani</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₹49.00</del> <span
                                                                class="theme-color">₹35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/2.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₹49.00</del> <span
                                                                class="theme-color">₹35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/3.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₹49.00</del> <span
                                                                class="theme-color">₹35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/6.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₹49.00</del> <span
                                                                class="theme-color">₹35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/7.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₹49.00</del> <span
                                                                class="theme-color">₹35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="product-image">
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/fashion/product/front/8.jpg"
                                                            class="blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="product-details">
                                                        <h6 class="font-light">Regular Fit</h6>
                                                        <a href="javascript:void(0)" class="">
                                                            <h3>Slim Fit Plastic Coat</h3>
                                                        </a>
                                                        <h4 class="font-light mt-1"><del>₹49.00</del> <span
                                                                class="theme-color">₹35.50</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Section End -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-12 ratio_30">
                    <div class="banner-deatils">
                        <div class="banner-image">
                            <img src="assets/images/fashion/banner.jpg" class="img-fluid bg-img blur-up lazyload"
                                alt="">
                            <div class="banner-content">
                                <div>
                                    <h3>Shop The Latest Trends</h3>
                                    <p>Shop the latest clothing trends with our weekly edit of what's new in online at
                                        DigiPix. From out latest woman collection.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div><br><br>
                    
                    <div class="main-price">
                        <!-- filter button -->
                        <div class="filter-button">
                            <button class="danger-button danger-center btn btn-sm filter-btn"><i
                                    data-feather="align-left"></i> Filter</button>
                        </div>
                        <!-- filter button -->


                        <div class="main-price">
                        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

                        <div class="row g-sm-4 g-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section list-style">
<div class="product-box">
<div class="main-price">

<table >
                                               
    <?php
    
     include 'db_connection.php';
    $conn = OpenCon();
                                          
    $sql = "SELECT id, Product_Image, Product_Name,Category,Brand,Price FROM productlist where Category='Men Fashion'" ;	   	
                                                                       		
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
                             // output data of each row
        
        while($row = mysqli_fetch_array($result))
        {
            //$row['index'] the index here is a field name
         
        
            echo '<tr><td>&emsp;&emsp;&emsp;&emsp;&emsp;<a href="product-left-sidebar11.php"><img  src="data:image;base64,' .$row[1] . ' " width="300px"</a></td>';        
            echo "<td><h2>&emsp;&emsp;" . $row["Product_Name"]."</h2><br>";
            echo "<h2><span style='font-weight:normal;''>&emsp;&emsp;" . $row["Brand"]."</span><h2><br>";
            echo "<h2><span style='font-weight:normal;''>&emsp;&emsp;₹" . $row["Price"]."/per day</span><h2><br>";
            echo '&emsp;&emsp;<a href="product-left-sidebar11.php?id='. $row['id'].'&Price='.$row["Price"].'"><button class="btn listing-content"> rent now</button></a></td></tr><br><br>';                        
        }
            echo "</table>";
    }

    else
    {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>                  
     
              
                 </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section end -->
    
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

    <!-- Quick view modal start -->
    <div class="modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="quick-view-image">
                                <div class="quick-view-slider">
                                    <div>
                                        <img src="assets/images/fashion/product/front/4.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/fashion/product/front/5.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/fashion/product/front/6.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/fashion/product/front/7.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                </div>
                                <div class="quick-nav">
                                    <div>
                                        <img src="assets/images/fashion/product/front/4.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/fashion/product/front/5.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/fashion/product/front/6.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/fashion/product/front/7.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-right">
                                <h2 class="mb-2">Men's Hoodie t-shirt</h2>
                                <ul class="rating mt-1">
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
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li class="font-light">(In stock)</li>
                                </ul>
                                <div class="price mt-3">
                                    <h3>₹20.00</h3>
                                </div>
                                <div class="color-types">
                                    <h4>colors</h4>
                                    <ul class="color-variant mb-0">
                                        <li class="bg-half-light selected"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-blue1"></li>
                                        <li class="bg-black1"></li>
                                    </ul>
                                </div>
                                <div class="size-detail">
                                    <h4>size</h4>
                                    <ul class="">
                                        <li class="selected">S</li>
                                        <li>M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                    </ul>
                                </div>
                                <div class="product-details">
                                    <h4>product details</h4>
                                    <ul>
                                        <li>
                                            <span class="font-light">Style :</span> Hoodie
                                        </li>
                                        <li>
                                            <span class="font-light">Catgory :</span> T-shirt
                                        </li>
                                        <li>
                                            <span class="font-light">Tags:</span> summer, organic
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-btns">
                                    <button onclick="location.href = 'cart.php';" type="button"
                                        class="btn btn-solid-default btn-sm" data-bs-dismiss="modal">Add to
                                        cart</button>
                                    <button type="button" class="btn btn-solid-default btn-sm"
                                        data-bs-dismiss="modal">View details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Cart Successful Start -->
    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>₹1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.php">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">₹78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.php">
                                                            <img src="assets/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">₹78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.php">
                                                            <img src="assets/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">₹78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.php">
                                                            <img src="assets/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">₹78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Successful End -->

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

    <!-- Price Filter js -->
    <script src="assets/js/price-filter.js"></script>

    <!--Plugin JavaScript file-->
    <script src="assets/js/ion.rangeSlider.min.js"></script>

    <!-- Filter Hide and show Js -->
    <script src="assets/js/filter.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>