 
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Update Item</title>
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
    	<br><br><br>
    	<center> <h1 style="font-family: Times;font-size: 80px;font-style: italic;"> Update Item </h1> <hr>    
   <br>
   <form id="item_form" action="updateInfo.php" method="get">
    
    <table cellpadding="15" >
    <tr>
        <td><label> Product Name: </label></td>
        <td><input type="text" name="product_name" id="product_name" value="<?php echo $_GET['pn']; ?>"></td>
    </tr>
    <tr>
        <td><label>Product Description:</label></td>
            <td><input type="text" name="product_desc" id="product_name" value="<?php echo $_GET['pd']; ?>"></td>
    </tr>
    
    <tr>
        <td><label>Quantity: </label></td>
        <td><input type="number" name="product_quantity" id="product_quantity" value="<?php echo $_GET['pq']; ?>"></td>
    </tr>
    <tr>
        <td><label>Location: </label></td>
        <td><input type="text" name="product_location" id="product_location" placeholder="All Pakistan" value="<?php echo $_GET['pl']; ?>"></td>
    </tr>
    
    <tr>
        <td><label>Price: </label></td>
        <td><input type="number" name="product_price" id="product_price" value="<?php echo $_GET['pp']; ?>" ></td>
    </tr>
    
    <tr>
        <td><br><br></td>
    </tr>
    <tr>
            <td colspan="2" style="padding-left:110px;" ><button type="submit"  class="btn btn-secondary" name="update">Update</button></td>
        </tr>
</table>
</form>
    </center>
    <?php 
	include "connection.php";
    if (isset($_GET['update'])) {
    	$name = $_GET['product_name'];
    	$description = $_GET['product_desc'];
    	$quantity = $_GET['product_quantity'];
    	$location = $_GET['product_location'];
    	$price = $_GET['product_price'];
    	$query = "UPDATE products SET prod_name = '$name',prod_desc = '$description',prod_quantity = '$quantity',prod_location = '$location',prod_price = '$price' WHERE prod_name = '$name' ";
    	$data = mysqli_query($connect,$query);
    	if ($data) {
        echo "<script> alert('Record Updated'); </script>";
    }else{
        echo "<script> alert('Record Not Updated'); </script>";
    }
    }

    ?>
    <br><br><br>
    <?php include "footer.php"; ?>
    <script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
    $('.mdb-select').material_select();
    }); 
    </script>
    </body>
    </html>
    
    