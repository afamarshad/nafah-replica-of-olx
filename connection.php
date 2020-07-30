<?php

$connect = mysqli_connect("localhost","root","","shopping");
if(!$connect)
{
    die("Unable to connect to the database".mysqli_error());
}


?>