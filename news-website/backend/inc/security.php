<?php

include ("connection.php");

if(!isset($_SESSION['EMAIL'])){
    header("location:login.php");
}else{
    echo"You are logged in as: ".$_SESSION['EMAIL'];
    echo"<a href=logout.php>Logout</a></div>";
}
?>