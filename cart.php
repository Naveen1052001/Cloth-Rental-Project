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
    <title>Cart Page</title>

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
                <a href="cart.php" class="active">
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
                    <h3>Shopping Cart</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="count-down">
                        <h5>Your cart will be expired in <span class="count-timer theme-color" id="timer"></span>
                            minutes !</h5>
                        <button type="button" onclick="location.href = 'checkout.php';"
                            class="btn btn-solid-default btn-sm fw-bold">Check Out</button>
                    </div>
                </div>

                <div class="col-sm-12 table-responsive mt-4">
                <table class="table table-bordered">  
                <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">days</th>
                                <th scope="col">action</th>
                                <th scope="col">total</th>
                </tr> 
                        <?php
    
                                                    include 'db_connection.php';
                                                        $conn = OpenCon();
                                              
                                                       
$sql = "SELECT productlist.id, Product_Image, productlist.Product_Name, productlist.Price, cart1.Quantity, cart1.id ,cart1.Days , 
productlist.Price,(Quantity * Price * Days) As Total,
cart1.To_Date, cart1.From_Date,(cart1.To_Date - cart1.From_Date) As tpFactor 
from productlist, cart1 where productlist.id = cart1.id";
                                       
                                        $result = mysqli_query($conn, $sql);
                                        
                                         if (mysqli_num_rows($result) > 0)
    {
                             // output data of each row
        
        while($row = mysqli_fetch_array($result))
        {
            
            //$row['index'] the index here is a field name
            
            echo '<tr><td> <img  src="data:image;base64,' .$row[1] . ' " width="100px"</td>';
			echo "<td>" . $row["Product_Name"]."</td>";
            echo "<td>" . $row["Price"]."</td>";
            echo "<td>" . $row["Quantity"]."</td>";
            echo "<td>" . $row["tpFactor"]."</td>";
           
            echo'<td><a href="delete-products.php?id=' .  $row['id'] .  '"> <span class="lnr lnr-trash">Delete</span></a></td>';

            echo "<td>" . $row["Total"]."</td></tr>";
            //echo "<td>" . $totaldays. "</td>";
            
        }
    

        echo "</table>";
        
    }

    else
    {
        echo "0 results";
    }
    
    //mysqli_close($conn);
    ?>                                                                 

      </table>         
				<tfoot>
                <?php
    
   

       
$sql = "SELECT Pricetotal,SUM(Pricetotal) As Totalprice
from cart1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
// output data of each row

while($row = mysqli_fetch_array($result))
{
    ?>
					<tr>
						<center>
						<td colspan="2" class="hidden-xs"></td>
						<td class="hidden-xs text-center"><b class="net_total">Total : <?php echo $row["Totalprice"]; ?></b></td>
                        </center>
                        <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="checkout.php" data-toggle="modal" data-target="#Modal_register" class="btn btn-success">Ready to Checkout</a></td>
								</tr>
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
							</tfoot>

							</table>
                </div>

                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="clear_cart.php"
                                    class="text-decoration-underline theme-color d-block text-capitalize">clear
                                    all items</a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="index.php" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
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

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

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

    <!-- timer js -->
    <script src="assets/js/count-down-timer.js"></script>

    <!-- Notify js -->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>
</body>



</html>