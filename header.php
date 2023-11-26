<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login (2).php");
    exit;
}
?>
<h4 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
<div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.php">
                                        <svg class="svg-icon">
                                            <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                        </svg>
                                        <img src="assets/images/logoc.png" class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>   
                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="home-menu">
                                                <a href="index.php" class="nav-link menu-title">home</a>
                                            
                                            </li>
                                            <li class="home-menu">
                                                <a href="shop-list.php" class="nav-link menu-title">Men's Fashion</a>                                                                                                        
                                            </li>
                                            <li class="home-menu">
                                                <a href="shop-list-female.php" class="nav-link menu-title">Women's Fashion</a>
                                                
                                            </li>
                            
                                            <li class="home-menu">
                                                <a href="product-left-sidebar1.php" class="nav-link menu-title">Kid's Fashion</a>
                                                
                                            </li>

                                         
                                            
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">pages</a>
                                                <ul class="nav-submenu menu-content">
                                                   
                                                    <li>
                                                        <a href="log-in.php">Log In</a>
                                                    </li>
                                                    <li>
                                                        <a href="register.php">Register</a>
                                                    </li>
                                                    <li>
                                                        <a href="reset-password.php">Reset Your Password</a>
                                                    </li>
                                                    <li>
                                                        <a href="logout (2).php">Sign Out of Your Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.php">cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.php">checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="coming-soon.php">coming soon<span>trending</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.php">compare</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-us.php">contact us</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.php">faq</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-success.php">order success</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-tracking.php">order tracking</a>
                                                    </li>
                                                    <li>
                                                        <a href="review.php">review</a>
                                                    </li>
                                                    <li>
                                                        <a href="search.php">search</a>
                                                    </li>
                                                    <li>
                                                        <a href="user-dashboard.php">user dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.php">wishlist</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                            <li class="mobile-poster d-flex d-xl-none">
                                                <img src="assets/images/pwa.png" class="img-fluid" alt="">
                                                <div class="mobile-contain">
                                                    <h5>Enjoy app-like experience</h5>
                                                    <p class="font-light">With this Screen option you can use Website
                                                        like an App.</p>
                                                    <a href="javascript:void(0)" id="installApp"
                                                        class="btn btn-solid-default btn-spacing w-100">ADD TO
                                                        HOMESCREEN</a>
                                    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <div class="menu-right">
                                <ul>
                                  
                                    <li>
                                        <div class="search-box">
                                            <i data-feather="search"></i>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                <li>                                                   
                                                    <a href="login (2).php" class="btn btn-danger ml-3" class="d-block">Login</a>                                                    
                                                </li>
                                                <li>                                                   
                                                    <a href="register.php" class="btn btn-danger ml-3" class="d-block">Register</a>
                                                </li>
                                                <li>
                                                <a href="reset-password.php" class="btn btn-danger ml-3">Reset Your Password</a>
                                                    </li>
                                                    <li>
                                                        <a href="logout (2).php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="wishlist.php">
                                                <i data-feather="heart"></i>
                                                <span class="label label-theme rounded-pill">5</span>
                                            </a>
                                        </div>
                                        <div class="onhover-div">
                                            <a href="wishlist.php">
                                                <div class="wislist-empty">
                                                    <i class="fab fa-gratipay"></i>
                                                    <h6 class="mb-1">Your wislist empty !!</h6>
                                                    <p class="font-light mb-0">explore more and shortlist items.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown cart-dropdown">
                                        <button type="button" class="btn btn-solid-default btn-spacing">
                                            <i data-feather="shopping-cart" class="pe-2"></i>
                                        
                                        </button>
                                        <div class="onhover-div">
                                            <div class="cart-menu">
                                                <div class="cart-title">
                                                    <h6>
                                                        <i data-feather="shopping-bag"></i>
                                                        <span class="label label-theme rounded-pill">5</span>
                                                    </h6>
                                                    <span class="d-md-none d-block">
                                                        <i class="fas fa-arrow-right back-cart"></i>
                                                    </span>
                                                </div>
                                                <ul class="custom-scroll">
                                                    <li>
                                                        <div class="media">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                            <div class="media-body">
                                                                <h6>Slim Fit Plastic Coat</h6>
                                                                <div class="qty-with-price">
                                                                    <span>₹1500.00</span>
                                                                    <span>
                                                                        <input type="number" class="form-control"
                                                                            value="1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn-close d-block d-md-none"
                                                                aria-label="Close">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <img src="assets/images/fashion/product/front/7.jpg"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                            <div class="media-body">
                                                                <h6>Womens Stylish Jacket</h6>
                                                                <div class="qty-with-price">
                                                                    <span>₹1250.00</span>
                                                                    <span>
                                                                        <input type="number" class="form-control"
                                                                            value="1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn-close d-block d-md-none"
                                                                aria-label="Close">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-btn">
                                                <h6 class="cart-total"><span class="font-light">Total:</span> ₹
                                                    542.00</h6>
                                                <button onclick="location.href = 'cart.php';" type="button"
                                                    class="btn btn-solid-default btn-block">
                                                    Proceed to payment
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                                <div class="search-suggestion">
                                    <ul class="custom-scroll">
                                        <li>
                                            <div class="product-cart media">
                                                <img src="assets/images/electronics/product/1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">New Smart Watch 4 ERT2</h6>
                                                    </a>
                                                    <ul class="rating p-0">
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
                                                    </ul>
                                                    <p class="mb-0 mt-1">₹28.00</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-cart media">
                                                <img src="assets/images/electronics/product/5.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">Powermatic 900 W Juicer</h6>
                                                    </a>
                                                    <ul class="rating m-0 p-0">
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
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">₹35.00</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
