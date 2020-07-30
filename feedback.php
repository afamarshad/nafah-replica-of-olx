<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Feedbacks</title>
    <link rel="shortcut icon" type="image/png" href="images/Project_images/LogoMakr_8nrL4f.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Libraries/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="Libraries/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="Libraries/MDB/css/mdb.minpro.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"   href="Libraries/home-index-style.css">
</head>

<body>

	<body class="hidden-sn mdb-skin">
		<?php include "navbar.php"; ?>
        <br><br><br>
     
		<?php 
        	echo "<center> <h1 style=\"font-family: Times;font-size: 80px;font-style: italic;\">Happy Customers</h1> <hr> </center><br>";
        	$recordQuery = "SELECT * FROM feedback";
        	$result= mysqli_query($connect, $recordQuery);
        	if(mysqli_num_rows($result)>=1)
        	{
        		while($row = mysqli_fetch_array($result))
        		{
        	?>
        <section>
  <div class="container py-3">
    <div class="card">
      <div class="row ">
        <div class="col-md-4">
            <!-- <img src="" class="w-100"> -->
            <?php echo "<img src=\"images/" . $row['Prodimage']  . "\" alt=".$row['Prodimage']."  height=\"180px\" width=\"260px\" class=\"w-100\"/>";?>
          </div>
          <div class="col-md-8 px-3">
            <div class="card-block px-3">
              <h4 class="card-title"><?php echo $row['UserName']?>&nbsp;,&nbsp;<?php echo $row['UserLoc']?></h4>
              <p class="card-text">"<?php echo $row['UserMessage']?>"</p>
              <!-- <?php echo "<a href=\"http://localhost/internship/feedbackInfo.php?UserId=".$row['Userid']."\" class=\"btn btn-primary\">Read More</a>"; ?>  -->
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
</section>
        <?php echo "&nbsp;"; 
         }
     }
     ?>	
        
</div>   
</div>

    <!--Main layout-->
    </main>

    <br><br><br><br><br><br>
    <!--Footer-->

    <?php include "footer.php"; ?>

</body>
</html>