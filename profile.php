<?php 

include "connection.php"; 

session_start();
$loged_user_id = $_SESSION['loged_user'];

    $query = "SELECT * FROM customer WHERE cust_id = '".$loged_user_id."'";                        
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result);
    
    $name = $row['cust_name'];
    $email = $row['cust_email'];
    $phone = $row['cust_contact'];
    $password = $row['cust_password'];

?>


<!DOCTYPE html >
<html lang="en">
<head>
	<title>Profile</title>
	<!-- Required meta tags always come first -->
    <?php include "links.php"; ?>
    <link rel="shortcut icon" type="image/png" href="images/Project_images/LogoMakr_8nrL4f.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Libraries/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="Libraries/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="Libraries/MDB/css/mdb.minpro.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"   href="Libraries/home-index-style.css">
     
    <style type="text/css">
        label {
    width:180px;
    clear:left;
    text-align:right;
    padding-right:50px;
        }

    div input{
    float:left;
     }
    </style>

</head>


<body class="hidden-sn mdb-skin">

   <!--Double navigation-->
    
    
    
    <?php include "customerNavbar.php" ?>
    
    
    
<br><br>
   <!-- Main Layout -->
    <main action="profile.php">
        
        
        

        <hr style="margin-left: 100px;margin-right: 100px;border-width: 2px;border-color: black;">

               <div style="border-style: solid;margin-left:100px;margin-right:100px;padding: 50px;border-color: silver;">
               <h3>Your Account Information:</h3>
<!--               <h6>Hint: Click on the text you want to update and then click update.</h6><br>-->
               
               <label>Name:</label>
               <span id="NFDatabase">
               <?php 
               echo  $name;
               ?></span>
               <br><br>

               <label>E-mail:</label>
               <span id="CEDatabase">
               <?php 
             
               echo $email;
               ?></span>
               <br><br>

               <label>Phone Number:</label>
               <span id="CPNDatabase">
               <?php 
               
               echo  $phone;
               ?></span>
               <br><br>

               <label>Password:</label>
               <span id="CPNDatabase">
               <?php 
               
               echo  $password;
               ?></span>
               <br><br>




<!-- <a href="http://localhost/internship/profileUpdate.php?$cn=<?php echo $name?>&$ce=<?php echo $email?>&$cc=<?php echo $phone?>&$cp=<?php echo $password?>" class="btn btn-secondary pull-right">UPDATE</a> -->

<a href="http://localhost/internship/profileUpdate.php?$cn=<?php echo $name ?>&$ce=<?php echo $email?>&$cc=<?php echo $phone?>&$cp=<?php echo $password?>" class="btn btn-secondary pull-right">UPDATE</a>
                

               <br><br> 
                
               </div><br>

    </main>


<br><br><br><br>

    <?php include "footer.php" ?>
    
    <!--/.Footer-->
    
   
    
    
   
    <!-- JQuery -->
    
</body>
</html>