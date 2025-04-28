<?php
include "inc/security.php";
$user=$_SESSION['EMAIL'];
$sql="SELECT * FROM sources";
$result=mysqli_query($conn,$sql) or die (mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
         require 'header.php';
        ?>
    <style>
  h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 80%;
            max-width: 1000px;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

       a {
            text-decoration: none;
            color:black;
            font-weight: bold;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
<center>
<table cellspacing=5 width=80%>
<tr>
    <th>Name</th><th>Type</th><th>Action</th>
</tr>

<?php

while($row=mysqli_fetch_array($result)){
   echo " <tr>
    <td>".$row['Name']."</td><td>".$row['Type']."</td>
    <td><button class='btn btn-danger'> <a href=deleteSource.php?ID=".$row['ID'].">Delete</a></td>
</tr>";
}
?>
</table>
