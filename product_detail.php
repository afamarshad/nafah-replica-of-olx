<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Detail</title>
    <link rel="shortcut icon" type="image/png" href="images/Project_images/LogoMakr_8nrL4f.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Libraries/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="Libraries/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="Libraries/MDB/css/mdb.minpro.css" rel="stylesheet">

</head>
<body class="hidden-sn mdb-skin">
<?php include "navbar.php"; ?>

<?php
$product_id = $_GET['prod_id'];
$query = "SELECT prod_name,prod_desc,prod_quantity,prod_price,prod_image,prod_location,prod_views, cust_name,cust_contact FROM products,customer WHERE products.cust_id = customer.cust_id AND products.prod_id= ".$product_id;
 

$row = mysqli_fetch_array(mysqli_query($connect,$query));

?>
    

<main>
  <center> <h1 style="font-family: Times;font-size: 80px;font-style: italic;"> Product Details </h1><hr>    
   <br>
   
    <img src="images/<?php echo $row['prod_image'] ?>"  height = 400 width = 600><br>
    <!-- <div class="container"> -->
   <!--    <form id="myForm" method="POST" >
    <input type="image" src="images/like icon.png" alt="like" height="70px" width="80px" name="like">
    <?php
    if(isset($_POST['like']))
    {
    $updateCounts = "UPDATE products set Likes = Likes+1 WHERE prod_id = '".$product_id."'";
    $results = mysqli_query($connect,  $updateCounts) or die("<script>alert('Updation error in likes!!');</script>");
    $counts = "SELECT Likes FROM products WHERE prod_id = '".$product_id."'";
    $result = mysqli_query($connect, $counts) or die("<script>alert('Cannot run query for likes!');</script>");

    $rows = mysqli_fetch_array($result);
     echo $rows['Likes'];
  }  
    ?>
   <img src="images/like icon.png" height="70px" width="80px" name="like" /> -->
     <!-- <img src="images/dislike.png" height="60px" width="60px" name="dislike" />  -->
    <!-- </form> -->
           <!-- </div> -->
    <br><br><br>
      <label style="margin-left: 50px;"> <h2 style="font-style: bold;"> <?php echo $row['prod_name']; ?> </h2> </label>
      <br><br>
      <label style="margin-left: 50px;"> <h2 style="font-style: bold;"> Price: <?php echo $row['prod_price']; ?> /= </h2> </label>
      <br><br>
      <form id="shoppingform" method="post"  >
      <table cellpadding="15">
          <tr> <td> Product Description: </td> <td> <?php echo $row['prod_desc'] ?> </td> </tr>
          <tr> <td> Product Quantity: </td> <td> <?php echo $row['prod_quantity'] ?> </td> </tr>
          <tr> <td> Product Location: </td> <td> <?php echo $row['prod_location'] ?> </td> </tr>
          <tr> <td> Owner Name: </td> <td> <?php echo $row['cust_name'] ?> </td> </tr>
          <tr> <td> Owner Contact: </td> <td> <?php echo $row['cust_contact'] ?> </td> </tr>
          
        
      </table>
      
      </form>        


    <!--Main layout-->
    <label>Views: </label>
  <?php 
$updateCounts = "UPDATE products set prod_views = prod_views+1 WHERE prod_id = '".$product_id."'";
    $results = mysqli_query($connect,  $updateCounts) or die("<script>alert('Updation error in counts!!');</script>");
  $counts = "SELECT prod_views FROM products WHERE prod_id = '".$product_id."'";
 $result = mysqli_query($connect, $counts) or die("<script>alert('Cannot run query for counts!');</script>");

    $rows = mysqli_fetch_array($result);
echo $rows['prod_views'];
 
  ?>                 
        </center> 
    </main> 

<br><br>
<?php include "footer.php"; ?>
</body>
</html>