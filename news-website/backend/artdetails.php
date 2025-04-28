<?php
include "inc/security.php";

$id=$_GET['ID'];

$sql="SELECT * FROM articles WHERE id='$id'";
$result=mysqli_query($conn,$sql);
echo "<br><a href=editArticle.php?ID=".$id.">Edit Article</a>";

while($row=mysqli_fetch_array($result)){

    echo"<h2>".$row[0]."</h2>";
    echo"<h3>".$row[1]."</h3>";
    echo"<h4>".$row[2]."</h4>";
    echo"<br><br>";
    echo"<h5>".$row[3]."</h5>";

}
?>