    <?php include "connection.php";
          include "Login_and_Registration.php";
          
    $loged_user_id = $_SESSION['loged_user'];

    $query = "SELECT * FROM customer WHERE cust_id = '".$loged_user_id."'";                        
    
    $row = mysqli_fetch_array(mysqli_query($connect,$query));

    // echo "<br><br>".$result;
     // echo "<br><br>".$row['cust_name'];
     ?>
    
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
<!--        <div id="slide-out" class="side-nav sn-bg-4 fixed">-->
            <div id="slide-out" class="side-nav sn-bg-4 mdb-sidenav">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <img src="images/Project_images/LogoMakr_2NZevJ.png" style="width: 250px;height: 100px;">
                    </div>
                </li>
                <hr style="border-color:white;">
                <!--/. Logo -->
                <!--Social-->
                <!-- <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                        <li><a href="#" class="icons-sm ln-ic"><i class="fa fa-linkedin"> </i></a></li>
                    </ul>
                </li> -->
                <!--/Social-->
                <br>
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r" href="http://localhost/internship/profile.php"><i class="fa fa-home"></i>Profile</a>
                            
                        </li>

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cart-plus"></i>Selling<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                   <li><a href="http://localhost/internship/UploadItem.php" class="waves-effect">Upload Item</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r" href="http://localhost/internship/myItems.php"><i class="fa fa-list"></i>My Items</a>
                            
                         <li><a class="collapsible-header waves-effect arrow-r" href="http://localhost/internship/index.php#"><i class="fa fa-sign-out"></i>Logout</a>
                            
                        </li>        
                </ul>
                </li>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <br>
            <div class="breadcrumb-dn mr-auto">
                <img src="images/Project_images/LogoMakr_1PGF1B.png" height="40" width="130" style="margin-left:20px;">
            </div>
            <h1> Welcome <?php echo $row['cust_name'];?></h1>
        </nav>
        <!-- /.Navbar -->
    </header>

    <script type="text/javascript" src="Libraries/Jquery/jquery-3.2.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="/Libraries/package/dist/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="Libraries/Bootstrap/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="Libraries/MDB/js/mdb.minpro.js"></script>
    <script>

        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        //new WOW().init();
    
    </script>
