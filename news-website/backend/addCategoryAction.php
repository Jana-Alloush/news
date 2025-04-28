<?php
include("inc/connection.php");
$CatName = $_POST["txtCatName"];
$sql = "INSERT INTO categories (dbcatname) VALUES ('$CatName')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($result) {
    echo '<h1 class="display-1">DONE</h1>';
    header("Refresh: 2; URL=addCategory.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>