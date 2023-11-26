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
//echo "Connected Successfully";

    if(isset($_POST['submit'])){

        $First_name = $_POST['first_name'];
        $Last_name= $_POST['last_name'];
        $Username = $_POST['username'];
        $Email = $_POST['email'];
        $Address = $_POST['address'];
        $Address1 = $_POST['address1'];
        $Country = $_POST['country'];
        $State = $_POST['state'];
        $Zip = $_POST['zip'];
        $Payment= $_POST['payment'];
        $Cardname = $_POST['cardname'];
        $Cardnumber = $_POST['cardnumber'];
        $Expdate = $_POST['expdate'];
        $Cvv= $_POST['cvv'];
       
        $sql = "INSERT INTO payment_details (first_name,	last_name,	username,	email,	address,	address1,	country,	state,	zip,	payment,	cardname,	cardnumber,	expdate,	cvv) 
        VALUES ('$First_name',' $Last_name','$Username','$Email','$Address','$Address1',' $Country',' $State',' $Zip','$Payment',' $Cardname',' $Cardnumber',' $Expdate','$Cvv') ";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Thank You Order Placed Successfully")</script>';
            echo '<script>window.location.href = "index.php";</script>';   
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }

		$sql = "SELECT paymentid	first_name	last_name	username	email	address	address1	country	state	zip	payment	cardname	cardnumber	expdate	cvv	 FROM payment_details ORDER BY id DESC LIMIT 1";
		
        $result = $conn->query($sql);

        mysqli_close($conn);
    }
    else{
      echo "Error";
    }

    ?>

<br>
<br>	
<a href="insert-order.php">
<button>Back</button>
</a>

</center>
</body>
</html>