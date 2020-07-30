<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags always come first -->
        <title>Upload Item</title>
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
    
    <!--Double navigation-->
<?php include "customerNavbar.php"; ?>
    <!--/.Double navigation-->
    <!--Main layout-->
    <main>
      
  <center> <h1 style="font-family: Times;font-size: 80px;font-style: italic;"> Upload Item </h1> <hr>    
   <br>
   <form id="item_form" action="UploadItem.php" method="post" enctype="multipart/form-data">
    
    <table cellpadding="15" >
    <tr>
        <td><label> Product Name: </label></td>
        <td><input type="text" name="product_name" id="product_name"></td>
    </tr>
    <tr>
        <td><label>Product Description:</label></td>
           <td><textarea name="product_description"></textarea></td>
    </tr>
    <tr>
        <td><label>Category:</label></td>
        <td>
            <select class="mdb-select" id="product_category" name="product_category">
            <option value="0">Select Category</option>
            <option value="1">dress</option>
            <option value="2">jewellery</option>
            <option value="3">watch</option>
            <option value="4">mobile</option>
            <option value="5">laptop</option>
            <option value="6">home appliances</option>
            </select>
        </td>
    </tr>  
    <tr>
        <td><label>Quantity: </label></td>
        <td><input type="number" name="product_quantity" id="product_quantity"></td>
    </tr>
    <tr>
        <td><label>Location: </label></td>
        <td><input type="text" name="product_location" id="product_location" placeholder="All Pakistan"></td>
    </tr>
    <tr>
        <td><label>Product Image: </label></td>
        <td><input type="file" name="userfile" id="userfile" accept="image/*"></td>
    </tr>
    <tr>
        <td><label>Price: </label></td>
        <td><input type="number" name="product_price" id="product_price" ></td>
    </tr>
    
    <tr>
        <td><br><br></td>
    </tr>
    <tr>
            <td colspan="2" style="padding-left:110px;" ><button type="submit"  class="btn btn-secondary" name="upload">Submit Ad</button></td>
        </tr>
</table>
</form>
    </center>  
</main>


<br><br><br><br><br>

<!--Footer-->
   <?php include "footer.php"; ?>
    <!--/.Footer-->
    <script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
    $('.mdb-select').material_select();
    }); 
    </script>

    <?php 
    include "connection.php";
    session_start();
    $logedin_user = $_SESSION['loged_user'];
    if(isset($_POST['upload'])){
     $prodName = $_POST['product_name'];
     $prodDesc = $_POST['product_description'];
     $cat = $_POST['product_category'];
     $prodQty = $_POST['product_quantity'];
     $prodLoc = $_POST['product_location'];
     $prodPrice = $_POST['product_price'];
   
    $image = $_FILES['userfile']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($connect, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO products(prod_name, prod_desc, prod_price, prod_image, prod_quantity,prod_location,cat_id, cust_id) VALUES('$prodName','$prodDesc','$prodPrice','$image','$prodQty','$prodLoc','$cat', '$logedin_user')";
    // execute query
    mysqli_query($connect, $sql);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $target)) {
        echo "<script> alert('Inserted To products and image uploaded'); </script>";
    }else{
        echo "<script> alert('Error in image upload'); </script>";
    }

     }

    ?>
</body>
</html>