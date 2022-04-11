<?php

include_once 'database.php';

$demand = mysqli_real_escape_string($conn,$_POST['username']);
 
 if(empty($demand))
 {
     header("Location:../demand.php?empty plealse enter the name");
 }
 else
 {
 $sql = "insert into demand (name) values ('$demand')";
 mysqli_query($conn,$sql);
 header("Location:../index.php?demand=successful");
}
 ?>