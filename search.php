<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Search</title>
    <link rel="shortcut icon" type="image/png" href="images/Project_images/LogoMakr_8nrL4f.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Libraries/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="Libraries/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="Libraries/MDB/css/mdb.minpro.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            background-color: #666;
            color: white;
        }
    </style>
</head>

<body class="hidden-sn mdb-skin" style="float:center;">
		<?php include "navbar.php"; ?>
        <br><br><br>
         <div class="text-center" id="btnContainer">
<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
<button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
</div>
<br>
<?php 

           $searchBar = $_POST['search'];

			$queryProdName = "SELECT * FROM products WHERE prod_name LIKE '%$searchBar%'";
			$resultProdName = mysqli_query($connect, $queryProdName) or die("<script>alert('Cannot run query Prod Name!');</script>");

			
			echo "<center> <h1 style=\"font-family: Times;font-size: 80px;font-style: italic;\">". $searchBar."</h1> <hr> </center><br>";
		    
        ?>
        <div class="container row">
           <div class="row-md-4" >
            
           <?php
       if($searchBar != "")
        {
			if($searchBar == "dress")
			{

				$queryCatName = "SELECT * FROM products WHERE cat_id= 1";
			    $resultCatName = mysqli_query($connect, $queryCatName) or die("<script>alert('Cannot run query! Dress Name');</script>");
			    if($resultCatName || mysqli_num_rows($resultCatName) > 0)
			{
				while($row = mysqli_fetch_array($resultCatName))
				{
            ?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;"; 
         }
            }
        }
        else if($searchBar == "jewellery")
			{

				$queryCatName = "SELECT * FROM products WHERE cat_id= 2";
			    $resultCatName = mysqli_query($connect, $queryCatName) or die("<script>alert('Cannot run query! Jewel Name');</script>");
			    if($resultCatName || mysqli_num_rows($resultCatName) > 0)
			{
				while($row = mysqli_fetch_array($resultCatName))
				{
            ?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;"; 
         }
            }
        }
        else if($searchBar == "watch")
			{

				$queryCatName = "SELECT * FROM products WHERE cat_id= 3";
			    $resultCatName = mysqli_query($connect, $queryCatName) or die("<script>alert('Cannot run query! watch Name');</script>");
			    if($resultCatName || mysqli_num_rows($resultCatName) > 0)
			{
				while($row = mysqli_fetch_array($resultCatName))
				{
            ?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;"; 
         }
            }
        }
         else if($searchBar == "mobile")
			{

				$queryCatName = "SELECT * FROM products WHERE cat_id= 4";
			    $resultCatName = mysqli_query($connect, $queryCatName) or die("<script>alert('Cannot run query! mobile Name');</script>");
			    if($resultCatName || mysqli_num_rows($resultCatName) > 0)
			{
				while($row = mysqli_fetch_array($resultCatName))
				{
            ?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;"; 
         }
            }
        }
        else if($searchBar == "laptop")
			{

				$queryCatName = "SELECT * FROM products WHERE cat_id= 5";
			    $resultCatName = mysqli_query($connect, $queryCatName) or die("<script>alert('Cannot run query! laptop Name');</script>");
			    if($resultCatName || mysqli_num_rows($resultCatName) > 0)
			{
				while($row = mysqli_fetch_array($resultCatName))
				{
            ?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;"; 
         }
            }
        }
        else if($searchBar == "home appliances")
			{

				$queryCatName = "SELECT * FROM products WHERE cat_id= 6";
			    $resultCatName = mysqli_query($connect, $queryCatName) or die("<script>alert('Cannot run query! home appliances Name');</script>");
			    if($resultCatName || mysqli_num_rows($resultCatName) > 0)
			{
				while($row = mysqli_fetch_array($resultCatName))
				{
            ?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;"; 
         }
            }
        }
        else if($searchBar == "home appliances")
			{

				$queryCatName = "SELECT * FROM products WHERE cat_id= 6";
			    $resultCatName = mysqli_query($connect, $queryCatName) or die("<script>alert('Cannot run query! home appliances Name');</script>");
			    if($resultCatName || mysqli_num_rows($resultCatName) > 0)
			{
				while($row = mysqli_fetch_array($resultCatName))
				{
            ?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;"; 
         }
            }
        }
        else if($resultProdName || mysqli_num_rows($resultProdName) > 0)
			{
				while($row = mysqli_fetch_array($resultProdName))
				{
					?>
            <div class="column">
                 
            <div class="text-info"">
            <div class="card-header">
            <h5 style="color: white;"><strong style="font-size: 30px;"><?php echo $row['prod_name'] ?></strong></h5></div>
  
            <div class="card-body">
           
            <table  cellpadding="10" style="width: 100%;">
            <tr>

            <td rowspan="4"> <?php echo "<img src=\"images/" . $row['prod_image']  . "\" alt=".$row['prod_image']."  height=\"180px\" width=\"260px\"/>";?> </td>
           
            <td>  Price  </td>
            <td><?php echo"Rs:".$row['prod_price'].".0" ?></td></tr>
          
          
            <tr><td> Quantity: </td>
            <td><?php echo $row['prod_quantity'] ?> </td></tr> 
            
           
            
            <tr> <td colspan="2"> <?php echo "<a href=\"http://localhost/internship/product_detail.php?prod_id=".$row['prod_id']."\" class=\"btn btn-secondary pull-right\">Details</a>"; ?>  </td> </tr></table></div></div></div>
            
           <?php echo "&nbsp;&nbsp;"; 
         }
            }
    }
        else{
            
            echo "<center> <h1 style=\"font-family: Times;font-size: 50px;font-style: italic;padding-left:500px;\"> No Product Found </h1> <hr> </center><br>";
        }
        ?>
        
</div>   
</div>

    <!--Main layout-->
    </main>
               <script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
}

// Grid View
function gridView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "50%";
    }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
    <!--/Main layout-->

    <br><br><br><br><br><br>
    <!--Footer-->

    <?php include "footer.php"; ?>


</body>
</html>