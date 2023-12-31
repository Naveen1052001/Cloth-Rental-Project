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
    <title>DashBoard</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

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
                <a href="user-dashboard.php" class="active">
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
                    <h3>User Dashboard</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="tab" data-bs-toggle="tab"
                                data-bs-target="#dash" type="button"><i
                                    class="fas fa-angle-right"></i>Dashboard</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order"
                                type="button"><i class="fas fa-angle-right"></i>Orders</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                                data-bs-target="#wishlist" type="button"><i
                                    class="fas fa-angle-right"></i>Wishlist</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save"
                                type="button"><i class="fas fa-angle-right"></i>Saved
                                Address</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="4-tab" data-bs-toggle="tab" data-bs-target="#pay"
                                type="button"><i class="fas fa-angle-right"></i>Payment</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button"><i
                                    class="fas fa-angle-right"></i>Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab"
                                data-bs-target="#security" type="button"><i
                                    class="fas fa-angle-right"></i>Security</button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dash">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="page-title title title1 title-effect">
                                        <h2>My Dashboard</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <h6 class="font-light">Hello, <span>MARK JECNO !</span></h6>
                                        <p class="font-light">From your My Account Dashboard you have the ability to
                                            view a snapshot of your recent account activity and update your account
                                            information. Select a link below to view or edit information.</p>
                                    </div>

                                    <div class="order-box-contain my-4">
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/box.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/box1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">total order</h5>
                                                            <h3>3648</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/sent.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/sent1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">pending orders</h5>
                                                            <h3>215</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/wishlist.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/wishlist1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">wishlist</h5>
                                                            <h3>63874</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-account box-info">
                                        <div class="box-head">
                                            <h3>Account Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Contact Information</h4><a
                                                            href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">MARK JECNO</h6>
                                                        <h6 class="font-light">MARk-JECNO@gmail.com</h6>
                                                        <a href="javascript:void(0)">Change Password</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Newsletters</h4><a href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">You are currently not subscribed to any
                                                            newsletter.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="box address-box">
                                                <div class="box-title">
                                                    <h4>Address Book</h4><a href="javascript:void(0)">Manage
                                                        Addresses</a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="row g-4">
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Billing Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                billing address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Shipping Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                shipping address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="order">
                            <div class="box-head mb-3">
                                <h3>My Order</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="mt-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="success-button btn btn-sm">Shipped</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/2.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="mt-0">#125367</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="danger-button btn btn-sm">Pending</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/3.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125948</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="success-button btn btn-sm">Shipped</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/4.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#127569</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="success-button btn btn-sm">Shipped</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/5.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125753</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="danger-button btn btn-sm">Canceled</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/6.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="danger-button btn btn-sm">Canceled</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="wishlist">
                            <div class="box-head mb-3">
                                <h3>My Wishlish</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/2.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125367</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/3.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125948</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/4.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#127569</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/5.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#127569</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="product-left-sidebar.php">
                                                    <img src="assets/images/fashion/product/front/6.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">₹49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard" id="save">
                            <div class="box-head">
                                <h3>Save Address</h3>
                                <button class="btn btn-solid-default btn-sm fw-bold ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addAddress"><i class="fas fa-plus"></i>
                                    Add New Address</button>
                            </div>
                            <div class="save-details-box">
                                <div class="row g-3">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Mark Jugal</h5>
                                                <div class="save-position">
                                                    <h6>Home</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Method Zaki</h5>
                                                <div class="save-position">
                                                    <h6>Office</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Mark Jugal</h5>
                                                <div class="save-position">
                                                    <h6>Home</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard" id="pay">
                            <div class="box-head">
                                <h3>Card & Payment</h3>
                                <button class="btn btn-solid-default btn-sm fw-bold ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addPayment"><i class="fas fa-plus"></i>
                                    Add New Card</button>
                            </div>

                            <div class="card-details-section">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="payment-card-detail">
                                            <div class="card-details">
                                                <div class="card-number">
                                                    <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                </div>

                                                <div class="valid-detail">
                                                    <div class="title">
                                                        <span>valid</span>
                                                        <span>thru</span>
                                                    </div>
                                                    <div class="date">
                                                        <h3>12/23</h3>
                                                    </div>
                                                    <div class="primary">
                                                        <span class="badge bg-pill badge-light">primary</span>
                                                    </div>
                                                </div>

                                                <div class="name-detail">
                                                    <div class="name">
                                                        <h5>mark jecno</h5>
                                                    </div>
                                                    <div class="card-img">
                                                        <img src="assets/images/payment-icon/1.jpg"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="edit-card">
                                                <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                    href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="edit-card-mobile">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="payment-card-detail">
                                            <div class="card-details card-visa">
                                                <div class="card-number">
                                                    <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                </div>

                                                <div class="valid-detail">
                                                    <div class="title">
                                                        <span>valid</span>
                                                        <span>thru</span>
                                                    </div>
                                                    <div class="date">
                                                        <h3>12/23</h3>
                                                    </div>
                                                    <div class="primary">
                                                        <span class="badge bg-pill badge-light">primary</span>
                                                    </div>
                                                </div>

                                                <div class="name-detail">
                                                    <div class="name">
                                                        <h5>mark jecno</h5>
                                                    </div>
                                                    <div class="card-img">
                                                        <img src="assets/images/payment-icon/2.jpg"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="edit-card">
                                                <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                    href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="edit-card-mobile">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="payment-card-detail">
                                            <div class="card-details dabit-card">
                                                <div class="card-number">
                                                    <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                </div>

                                                <div class="valid-detail">
                                                    <div class="title">
                                                        <span>valid</span>
                                                        <span>thru</span>
                                                    </div>
                                                    <div class="date">
                                                        <h3>12/23</h3>
                                                    </div>
                                                    <div class="primary">
                                                        <span class="badge bg-pill badge-light">primary</span>
                                                    </div>
                                                </div>

                                                <div class="name-detail">
                                                    <div class="name">
                                                        <h5>mark jecno</h5>
                                                    </div>
                                                    <div class="card-img">
                                                        <img src="assets/images/payment-icon/3.jpg"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="edit-card">
                                                <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                    href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="edit-card-mobile">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard-profile dashboard" id="profile">
                            <div class="box-head">
                                <h3>Profile</h3>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#resetEmail">Edit</a>
                            </div>
                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Company Name</h6>
                                    </div>
                                    <div class="right">
                                        <h6>DigiPix Fashion</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Country / Region</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Downers Grove, IL</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Year Established</h6>
                                    </div>
                                    <div class="right">
                                        <h6>2018</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Total Employees</h6>
                                    </div>
                                    <div class="right">
                                        <h6>101 - 200 People</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Category</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Clothing</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Street Address</h6>
                                    </div>
                                    <div class="right">
                                        <h6>549 Sulphur Springs Road</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">City/State</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Downers Grove, IL</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Zip</h6>
                                    </div>
                                    <div class="right">
                                        <h6>60515</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="box-head mt-lg-5 mt-3">
                                <h3>Login Details</h3>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#resetEmail">Edit</a>
                            </div>

                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Email Address</h6>
                                    </div>
                                    <div class="right">
                                        <h6>mark.jugal@gmail.com</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Phone No.</h6>
                                    </div>
                                    <div class="right">
                                        <h6>+1-202-555-0198</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a>
                                </li>

                                <li class="mb-0">
                                    <div class="left">
                                        <h6 class="font-light">Password</h6>
                                    </div>
                                    <div class="right">
                                        <h6>●●●●●●</h6>
                                    </div>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade dashboard-security dashboard" id="security">
                            <div class="box-head">
                                <h3>Delete Your Account</h3>
                            </div>
                            <div class="security-details">
                                <h5 class="font-light mt-3">Hi <span> Mark Enderess,</span>
                                </h5>
                                <p class="font-light mt-1">We Are Sorry To Here You Would Like To Delete Your Account.
                                </p>
                            </div>

                            <div class="security-details-1 mb-0">
                                <div class="page-title">
                                    <h4 class="fw-bold">Note</h4>
                                </div>
                                <p class="font-light">Deleting your account will permanently remove your profile,
                                    personal settings, and all other associated information. Once your account is
                                    deleted, You will be logged out and will be unable to log back in.</p>

                                <p class="font-light mb-4">If you understand and agree to the above statement, and would
                                    still like to delete your account, than click below</p>

                                <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">Delete Your
                                    Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

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

    <!-- Reset Password Modal Start -->
    <div class="modal fade reset-email-modal" id="resetEmail">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Comfirm Email</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pt-3">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label font-light">Email address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="comfirmEmail" class="form-label font-light">Comfirm Email address</label>
                            <input type="email" class="form-control" id="comfirmEmail">
                        </div>
                        <div>
                            <label for="exampleInputPassword1" class="form-label font-light">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0">
                    <button class="btn bg-secondary rounded-1 modal-close-button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-solid-default rounded-1" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset Password Modal End -->

    <!-- Add Address Modal Start -->
    <div class="modal fade add-address-modal" id="addAddress">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label font-light">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="full name">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label font-light">Full Address</label>
                            <input type="text" class="form-control" id="address" placeholder="123, abcd, xyz">
                        </div>
                        <div>
                            <label for="number" class="form-label font-light">Mobile</label>
                            <input type="number" class="form-control" id="number" placeholder="+1-123-456-7890">
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0 text-end d-block">
                    <button type="button" class="btn bg-secondary text-white rounded-1 modal-close-button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-solid-default rounded-1" data-bs-dismiss="modal">Save Address</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Address Modal End -->

    <!-- Add Payment Modal Start -->
    <div class="modal fade payment-modal" id="addPayment">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <label for="name" class="form-label">Card Type</label>
                        <select class="form-select form-select-lg mb-4">
                            <option selected disabled>Choose Your Card</option>
                            <option value="1">Creadit Card</option>
                            <option value="2">Debit Card</option>
                            <option value="3">Debit Card and ATM</option>
                        </select>

                        <div class="mb-4">
                            <label for="card" class="form-label">Name On Card</label>
                            <input type="text" class="form-control" id="card" placeholder="Name card">
                        </div>
                        <div class="mb-4">
                            <label for="cAddress" class="form-label">Card Number</label>
                            <input type="number" class="form-control" id="cAddress" placeholder="XXXX-XXXX-XXXX-XXXX">
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-4">
                                <label for="expiry" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control font-light" id="expiry">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="number" class="form-control" id="cvv" placeholder="XX9">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0 text-end d-block">
                    <button type="button" class="btn bg-secondary text-white rounded-1 modal-close-button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-solid-default rounded-1" data-bs-dismiss="modal">Save Card Details</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Payment Modal End -->

    <!-- Comfirm Delete Modal Start -->
    <div class="modal delete-account-modal fade" id="deleteModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pb-3 text-center mt-4">
                    <h4>Are you sure you want to delete your account?</h4>
                </div>
                <div class="modal-footer d-block text-center mb-4">
                    <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-target="#doneModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes Delete account</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal delete-account-modal fade" id="doneModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pb-3 text-center mt-4">
                    <h4>Done!!! Delete Your Account</h4>
                </div>
                <div class="modal-footer d-block text-center mb-4">
                    <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Comfirm Delete Modal End -->

   

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

    <!-- Filter Hide and show Js -->
    <script src="assets/js/filter.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>

</body>



</html>