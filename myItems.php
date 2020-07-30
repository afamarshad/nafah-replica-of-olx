<?php

session_start();
include "connection.php";
$logedin_user = $_SESSION['loged_user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>My Items</title>
    <link rel="shortcut icon" type="image/png" href="images/Project_images/LogoMakr_8nrL4f.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Libraries/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="Libraries/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="Libraries/MDB/css/mdb.minpro.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"   href="Libraries/home-index-style.css">
    
</head>

<body class="hidden-sn mdb-skin">
	<?php include "customerNavbar.php"; ?>

	<main>
      



        	<?php 

            $products = (mysqli_query($connect,"select * from products where cust_id = ".$logedin_user));
    
        	$category =  mysqli_fetch_array((mysqli_query($connect,"select * from category")));

            echo "<center> <h1 style=\"font-family: Times;font-size: 80px;font-style: italic;\"> Your Items </h1> <hr> </center><br>";

            ?>
            

            <table>
      	<tr>
      		<strong>
      	<th style="padding-left:100px;font-size: 20px;"> Product Name </th>
      	<th style="padding-left: 40px;font-size: 20px;"> Product Description </th>
      	<th style="padding-left: 40px;font-size: 20px;"> Product Price </th>
      	<th style="padding-left: 40px;font-size: 20px;"> Product Quantity </th>
      	<th style="padding-left: 40px;font-size: 20px;"> Product Location </th>
      	</strong>
      	</tr>
      </table>
      

            <?php

            if(mysqli_num_rows($products)>=1)
        {
            while($row = mysqli_fetch_array($products)){ 
				

                echo "<tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>".$row['prod_name']."</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>".$row['prod_desc']."</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>".$row['prod_price']."</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>".$row['prod_quantity']."</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>".$row['prod_location']."</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            	<td><a href = 'http://localhost/internship/updateInfo.php?pn=$row[prod_name]&pd=$row[prod_desc]&pp=$row[prod_price]&pq=$row[prod_quantity]&pl=$row[prod_location]'><strong>EDIT</strong></a></td>
            	</tr><br><br>";
            	
             
         }
            }
        else{
            
            echo "<center> <h1 style=\"font-family: Times;font-size: 50px;font-style: italic;\"> No Product Found </h1> <hr> </center><br>";
        }
        ?>

    <!--Main layout-->

    </main>
    <!--/Main layout-->
    <br><br><br><br>

            <?php include "footer.php" ?>
</body>
</html>