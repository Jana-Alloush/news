<?php
include("inc/connection.php");
$FName = $_POST["txtFullName"];
$Email = $_POST["txtEmail"];
$Password = $_POST["txtPassword"];
$role = $_POST["role"];

$sql = "INSERT INTO operators (dbfullname, dbemail, dbpassword , dbtype) VALUES ('$FName', '$Email', '$Password','$role')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result) {
    echo '<h1 class="display-1">DONE</h1>';

    header("Refresh: 2; URL=addOperator.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>