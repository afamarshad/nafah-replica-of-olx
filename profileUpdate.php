 
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Update Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/Project_images/LogoMakr_8nrL4f.png">

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
    	<br><br><br><br>
    	<center> <h1 style="font-family: Times;font-size: 80px;font-style: italic;"> Update Profile </h1> <hr>    
   <br>
   <form id="item_form" action="http://localhost/internship/profileUpdate.php?$cn&$ce&$cc&$cp" method="get">
    
    <table cellpadding="15" >
    <tr>
        <td><label> Name: </label></td>
        <td><input type="text" name="customer_name" value="<?php echo $_GET['$cn']; ?>"></td>

    </tr>
    
    <tr>
        <td><label>Contact: </label></td>
        <td><input type="text" name="customer_contact" value="<?php echo $_GET['$cc']; ?>"></td>
    </tr>
     <tr>
        <td><label>Password: </label></td>
        <td><input type="text" name="customer_password" value="<?php echo $_GET['$cp']; ?>"></td>
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
    	$name = $_GET['customer_name'];
    	$contact = $_GET['customer_contact'];
        $password = $_GET['customer_password'];
    	



    	$query = "UPDATE customer SET cust_name = '$name',cust_contact = '$contact',cust_password = '$password' WHERE cust_id = '".$loged_user_id."'";

        
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
    
    