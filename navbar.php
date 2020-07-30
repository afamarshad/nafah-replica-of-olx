    <?php include "connection.php"; ?>
    <?php include "Login_and_Registration.php";  ?>
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
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                        <li><a href="#" class="icons-sm ln-ic"><i class="fa fa-linkedin"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <br>
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r" href="http://localhost/internship/index.php"><i class="fa fa-home"></i>Home</a>
                            
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r" data-toggle="modal" data-target="#modalLoginForm"><i class="fa fa-cart-plus"></i>Selling</a>
                            
                        </li>
                         
                         <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cart-plus"></i> Buying <i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a class="collapsible-header waves-effect arrow-r">Category<i class="fa fa-angle-down rotate-icon"></i></a>
                                        
                        <ul class="list-unstyled">
                        <?php    
                         $query = "SELECT * FROM category";
                         $categories = mysqli_query($connect,$query) ;
                        foreach($categories as $cat){ 
                                

                        echo "<li><a href=\"http://localhost/internship/category.php?cat_id=".$cat['cat_id']."\" class=\"waves-effect\">".$cat['cat_name']." </a></li>  ";
                                             

                        }
                                    
                        ?>

                                </ul>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About us<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="http://localhost/internship/About_us.php" class="waves-effect">Introduction</a>
                                    </li>
                    
                                    <li><a href="http://localhost/internship/Team.php" class="waves-effect">Team</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope"></i> Customer Care<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="http://localhost/internship/Contact-us.php" class="waves-effect">Contact us</a>
                                    </li>
                                    <li><a href="http://localhost/internship/faqs.php" class="waves-effect">FAQ</a>
                                    </li>
                                    
                                    <li><a href="http://localhost/internship/Term_of_use.php" class="waves-effect">Term of Use</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
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
            <div style="padding-left: 300px;">
            <form class="form-inline mr-auto" method="POST" action="search.php">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit" name="searchbtn">Search</button>
                    </form>
                    </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/internship/Contact-us.php"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/internship/faqs.php"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block"> Help and Support</span></a>
                </li>
                
            </ul>
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
