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
    <title>Checkout</title>

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
                    <h3>Checkout</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Cart Section Start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h3 class="mb-3">Billing address</h3>
                    <form class="needs-validation" action="insert-payment.php" enctype="multipart/form-data" name="insert" method="post" onclick="">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input class="form-control" type="text" placeholder="First Name" name="first_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input class="form-control" type="text" placeholder="Last Name" name="last_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Username</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Username" name="username" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email address</label>
                                <input class="form-control" type="email" placeholder="Email" name="email" required>
                            </div>

                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" type="text" placeholder="Address" name="address" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="address2" class="form-label">Address 2</label>
                                <input class="form-control" type="text" placeholder="Address1" name="address1" required>
                            </div>

                            <div class="col-md-5">
                                <label for="validationCustom04" class="form-label">Country</label>
                                <select class="js-example-basic-single w-100" name="country" id="country" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="United States">United States</option>
                                    <option value="India">India</option>
                                    <option value="America">America</option>
                                    <option value="South America">South America</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="China">China</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">State</label>
                                <select class="js-example-basic-single w-100" name="state" id="state" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Bhutan">Karnataka</option>
                                    <option value="Burundi">andra</option>
                                    <option value="Comoros">tamilnadu</option>
                                    <option value="Dilhi">Delhi</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Abu & Ambaji">Abu & Ambaji</option>
                                    <option value="Japan">up</option>
                                    <option value="Cuba">maharastra</option>
                                    <option value="Zambia">telangana</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input class="form-control" type="text" placeholder="Zip" name="zip" required>
                            </div>
                        </div>
                        
                        <hr class="my-lg-5 my-4">

                        <h3 class="mb-3">Payment</h3>

                        <div class="d-block my-3">
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="payment" value="Credit Card" id="credit">
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>

                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="payment" value="Debit Card" id="debit">
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" name="cardname" id="cc-name">
                                <div id="emailHelp" class="form-text">Full name as displayed on card</div>
                            </div>
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Enter Card Number</label>
                                <input type="text" class="form-control" name="cardnumber" id="cc-number" required="" maxlength="16">
                                <div class="invalid-feedback">Credit card number is required</div>
                            </div>
                            <div class="col-md-3">
                                <label for="expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" name="expdate" id="expiration">
                            </div>
                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" name="cvv" id="cc-cvv" maxlength="3">
                            </div>
                        </div>
                        <input type="submit" class="btn listing-content" class="btn btn-danger ml-3"  name="submit" value="Place
                            Order">
                        
                    </form>
                </div>
                <?php
    
    include 'db_connection.php';
    $conn = OpenCon();

       
    $sql = "SELECT Pricetotal,SUM(Pricetotal) As Totalprice
    from cart1";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0)
    {
    // output data of each row
    
    while($row = mysqli_fetch_array($result))
    {
        ?>
                <div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">Your cart<span
                                class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">3</span>
                        </h3>
                            <li class="list-group-item d-flex lh-condensed justify-content-between">
                                <span class="fw-bold">Total (INR)</span>
                                <strong>₹<?php echo $row["Totalprice"]; ?></strong>
                            </li>
                    </div>
                </div>
                <?php
                                }
    

                                echo "</table>";
                                
                            }
                        
                            else
                            {
                                echo "0 results";
                            }
                            
                            mysqli_close($conn);
                            ?>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->

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

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js -->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js -->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- Notify js -->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>

</body>



</html>