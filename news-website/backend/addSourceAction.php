<?php
include("inc/connection.php");
$Name = $_POST["txtName"];
$Type = $_POST["txtType"];
$sql = "INSERT INTO sources (dbsourcename, dbsourcetype) VALUES ('$Name', '$Type')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result) {
    echo '<h1 class="display-1">DONE</h1>';
    header("Refresh: 2; URL=addsource.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>