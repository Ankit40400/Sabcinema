<?php

include 'database.php';

$likedislike = mysqli_real_escape_string($conn,$_POST['likeordislike']);
$improve = mysqli_real_escape_string($conn,$_POST['improve']);

if(!empty($likedislike)||!empty($improve))
{
 $sql = "insert into feedback values('$likedislike','$improve')";
 mysqli_query($conn,$sql);
 header("Location:../index.php?thank you");
}
else
{
    header("Location:../feedback.php?empty");
}
 ?>