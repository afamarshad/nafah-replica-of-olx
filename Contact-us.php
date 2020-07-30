<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>faq</title>
    <link rel="shortcut icon" type="image/png" href="images/Project_images/LogoMakr_8nrL4f.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Libraries/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="Libraries/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="Libraries/MDB/css/mdb.minpro.css" rel="stylesheet">

</head>

<body class="fixed-sn mdb-skin">
    
    <!--Double navigation-->
    <?php include "navbar.php"; ?>
    <!--/.Double navigation-->
     <br><br>
    <center>
    
        
<!--Section: Contact v.3-->
<section class="py-5">

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-12">

            <!--Form with header-->
            <div class="card" style="margin-left: 20%; margin-right: 10%;">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-body form">
                            <!--Header-->
                            <div class="formHeader mb-1 pt-3">
                                <h3>
                                    <i class="fa fa-envelope"></i> Write to us:</h3>
                            </div>

                            <br>

                            <form name="myForm" method="POST" action="Contact-us.php" enctype="multipart/form-data">
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="form-contact-name" class="form-control" name="name">
                                            <label for="form-contact-name" class="">Your name</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="email" id="form-contact-email" class="form-control" name="email">
                                            <label for="form-contact-email" class="">Your email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="number" id="form-contact-phone" class="form-control" name="phone">
                                            <label for="form-contact-phone" class="">Your phone</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="form-contact-company" class="form-control" name="company">
                                            <label for="form-contact-company" class="">Your company</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="form-contact-email" class="form-control" name="location">
                                            <label for="form-contact-email" class="">Your location</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                             <label for="form-contact-company" class="">Product Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="file" id="form-contact-company" class="form-control" name="userfile" accept="image/*">
                                           
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3" name="message"></textarea>
                                            <label for="form-contact-message">Your message</label>
                                            <button class="btn-floating btn-lg blue fa fa-send-o" type="submit" name="send">
                                            </button>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-body contact text-center">
                                <div class="mb-5">
                                    <h3>Contact information</h3>
                                </div>

                                <ul class="contact-icons list-unstyled ml-4">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <p>Karachi, 13-Stadium Road, Pakistan</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p>+92 347 2435865</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <p>info@ebid.com</p>
                                    </li>
                                </ul>

                                <hr class="hr-light mb-4 mt-4">

                                <ul class="list-inline text-center list-unstyled">
                                    <li class="list-inline-item">
                                        <a class="icons-sm tw-ic">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="icons-sm li-ic">
                                            <i class="fa fa-linkedin"> </i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="icons-sm ins-ic">
                                            <i class="fa fa-instagram"> </i>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Form with header-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Contact v.3-->
           <br><br>
        <?php
        if(isset($_POST['send']))
        {
         $username = $_POST['name'];
         $usermail = $_POST['email'];
         $userphone = $_POST['phone'];
         $usercompany = $_POST['company'];
         $usermsg = $_POST['message'];
         $userloc = $_POST['location'];
         $image = $_FILES['userfile']['name'];
    // Get text
    // $image_text = mysqli_real_escape_string($connect, $_POST['image_text']);

    // image file directory
    $target = "images/".basename($image);

         $insertQuery = "INSERT INTO feedback(Userid,Prodimage, UserName, UserLoc, UserMail, UserPhone, UserCompany, UserMessage) VALUES ('','$image','$username','$userloc','$usermail','$userphone','$usercompany','$usermsg')";

         if ($connect->query($insertQuery) === TRUE) {
         echo "<script>alert('Record Inserted Successfully!');</script>";
         } 
         else {
         echo "<script>alert('Unable to insert record!');</script>";
          }

          if (move_uploaded_file($_FILES['userfile']['tmp_name'], $target)) {
        echo "<script> alert('Image uploaded'); </script>";
        }else{
        echo "<script> alert('Error in image upload'); </script>";
         }


        }
        ?>
            
        
    </center>
    <!--/Main layout-->

<?php include "footer.php"; ?>
    <!--/.Footer-->


</body>

</html>
