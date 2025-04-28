<?php
session_start();
include "inc/security.php";
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$query="SELECT * FROM operators WHERE dbemail = '$email' AND dbpassword = '$password'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        if($row[4]=="admin"){   //hun fina nhot $row[db_role]
            $_SESSION['EMAIL']=$email;
            header("location:adminCp.php");

        }
        else{
            $_SESSION['EMAIL'] = $email;
            header("location:../admin.php");
        }
    } 
}
else
header("location:login.php?error=1");
?>