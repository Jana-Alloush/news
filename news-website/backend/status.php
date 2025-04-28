<?php
include "inc/security.php";
include "inc/db_connect.php";
$id=$_GET['ID'];
$status=$_GET['status'];
if($status=='U'){
    $sql="UPDATE articles SET status=1 WHERE ID=$id";
}
if($status=='P'){
    $sql="UPDATE articles SET status=0 WHERE ID=$id";
}
if($status=='D'){
   $sql="DELETE FROM articles WHERE ID=$id";
}
mysqli_query($conn,$sql);

header("location:viewArticle.php");

?>