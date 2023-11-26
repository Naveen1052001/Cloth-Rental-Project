<!DOCTYPE php>
<php lang="en">
<head>
    
    <title>Insert a record</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
      .homepage{
        margin-top: 25px;
        font-size: 1.2em;
        text-align: center;
      }
    </style>
  </head>
    <body>
	<center>
    

  <?php

include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";


    if(isset($_POST['submit'])){

       
        $FromDate = $_POST['fromdate'];
        $ToDate = $_POST['todate'];
        $Size = $_POST['size'];
        $qty = $_POST['quantity'];
        $id = $_POST['id'];
        $Price = $_POST['Price'];
        function dateDiff($FromDate, $ToDate)
{
    $date1_ts = strtotime($FromDate);
    $date2_ts = strtotime($ToDate);
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400);
}

$Days = dateDiff($FromDate, $ToDate);
$Price1 = $Days * $Price * $qty;
        
       // $days = ceil(abs($FromDate - $ToDate) / 86400);
       // $days = $FromDate->diff($ToDate)->format("%a");
        //$days=date_diff($FromDate,$ToDate);
        //$sql = "INSERT INTO cart1 (From_Date, To_Date, Size, Quantity, Days, id) VALUES ('$FromDate','$ToDate','$Size','$qty','$days','$id') ";
        $sql = "INSERT INTO cart1 (From_Date, To_Date, Size, Quantity, id, Days, Pricetotal) VALUES ('$FromDate','$ToDate','$Size','$qty','$id','$Days','$Price1') ";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>New Record inserted successfully ! </p>"; 
            echo '<script>window.location.href = "cart.php";</script>';  
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }

		$sql = "SELECT orderid,From_Date, To_Date, Size, Quantity, id FROM cart1 ORDER BY id DESC LIMIT 1";
		
        $result = $conn->query($sql);

        mysqli_close($conn);
    }
    else{
      echo "Error";
    }

    ?>

<br>
<br>	
<a href="cart.php">
<button>see the cart</button>
</a>

</center>
</body>
</html>