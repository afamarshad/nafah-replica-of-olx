<?php

  include ('connection.php');
  session_start();
    

    if(isset($_POST['signup']))
{
        $name = $_POST['reg_name'];
        $contact = $_POST['reg_contact'];
        $password = $_POST['reg_password'];
        $email = $_POST['reg_email'];
       
            $query = "INSERT INTO customer(cust_name,cust_email,cust_password,cust_contact) 
                        VALUES ('$name','$email','$password','$contact')";
            
            $status = mysqli_query($connect,$query);

            if($status)
            {
                echo "<script> alert('You Are Successfully Registered!'); </script>";
                  
            }
            else
            {
                echo "<script> alert('Problem to insert into the database!, may be there is some duplicate values...!'); </script>";
            }
        
}
else if(isset($_POST['login_customer']))
{
    
    
        $username = $_POST['login_email'];
        $password = $_POST['login_password'];

        // echo "<br><br><br><br>". $username;
        // echo $password;
         
         $query = "SELECT * FROM customer WHERE cust_email = '$username' AND cust_password = '$password'";
          
            $result = mysqli_query($connect,$query);
            $row = mysqli_fetch_array($result);
           
            //echo "<script> alert('Logged in Successfully!'); </script>";
            
            if(($result))
         {
          if($row['cust_email']==$username && $row['cust_password']==$password){
             $_SESSION['loged_user'] = $row['cust_id'];
             echo "<script> alert('Loged in Successfully!'); </script>";
             header("location: http://localhost/internship/profile.php");
               }     
               else
         {
             echo "<script> alert('Invalid Authentication As A Customer!'); </script>";
         }    
         }
         

        
}
else if (isset($_POST['forgotpassword'])) {
    
    $status = false;
    $email = $_POST['update_email'];
    $newPassword = $_POST['new_password'];
    $repeatPassword = $_POST['repeat_password'];
    $query = "SELECT cust_email FROM customer";
          
            $result = mysqli_query($connect,$query);
            
            // echo "<br><br><br><br>".$row['cust_email'];
            // echo "<br><br>".$email;
            // echo "<br><br>".$newPassword;
            // echo "<br><br>".$repeatPassword;
            while($row = mysqli_fetch_array($result)){

                  if ($row['cust_email'] == $email && $newPassword == $repeatPassword) {
                  $sql = "UPDATE customer SET cust_password = '$newPassword' WHERE cust_email ='".$email."'";
                  mysqli_query($connect, $sql);
                  // echo "<script> alert('Changed Password'); </script>";
                  $status = true;
                  break;
                }
                else{
                  $status = false;
                   // echo "<script> alert('Password Not Changed'); </script>";
                }
            }
            if ($status) {
             echo "<script> alert('Changed Password'); </script>";
            }
            else{
              echo "<script> alert('Password Not Changed'); </script>";
                }
            // }
//             // echo "<script> alert('Changed Password'); </script>";
//             if(($result)){
//     if ($row['cust_email'] == $email && $newPassword == $repeatPassword) {
//       $sql = "UPDATE customer SET cust_password = '$newPassword' WHERE cust_email = '$email'";
//       mysqli_query($connect, $sql);

//       echo "<script> alert('Changed Password'); </script>";
//     }
//     else{
//        echo "<script> alert('Password Not Changed'); </script>";
//     }
// }
}
else
{
    if(isset($_GET['logout']))
    {
        
        unset($_SESSION['loged_user']);
    }
}

    ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login & Registration </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Libraries/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="Libraries/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="Libraries/MDB/css/mdb.minpro.css" rel="stylesheet">

</head>
<body class="fixed-sn mdb-skin">
<form id="login_form" method="post" action="index.php">
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" name="login_email" id="defaultForm-email" class="form-control validate" >
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-password" name="login_password" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-password">Your password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-default" name="login_customer">Login</button>
            </div>
            <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a class="blue-text" data-toggle="modal" data-target="#modalRegisterForm">Sign Up</a></p>
                                <p>Forgot <a class="blue-text" data-toggle="modal" data-target="#forgetPasswordForm">Password?</a></p>
                            </div>
                            <!-- <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button> -->
                        </div>
              
                    </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" name="reg_name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Your Name</label>
                            </div>
                            
                            <div class="md-form mb-5">
                                <i class="fa fa-phone prefix grey-text"></i>
                                <input type="text" id="orangeForm-contact" name="reg_contact" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-contact">Contact</label>
                            </div>
                
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" name="reg_email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" name="reg_password" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="signup" class="btn btn-deep-orange"> Sign up</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="forgetPasswordForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Update Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" name="update_email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-password" name="new_password" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-password">Your password</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-repeatpassword" name="repeat_password" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-repeatpassword">Repeat Password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange" name="forgotpassword" type="submit">Change Password</button>
            </div>
        </div>
    </div>
</div>
</form>
 
    <!--/.Footer-->
   
   

     <script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
    $('.mdb-select').material_select();
    }); 
    </script>
</body>
</html>