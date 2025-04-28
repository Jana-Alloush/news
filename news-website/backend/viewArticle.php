<?php
include('inc/security.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
    <h1>Articles</h1>

    <?php
    $sql = "SELECT * FROM articles";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Title</th><th>Source</th><th>Author</th><th>Category</th><th>Status</th><th>Action</th><th>Edit</th></tr>";
        while($row=mysqli_fetch_array($result)){
           echo " <tr>
           <td><a href=artdetails.php?ID=".$row['ID'].">".$row['dbTitle']."</a></td><td>".$row['Category']."</td><td>".$row['dbDate']."</td><td>".$row['dbSource']."</td>
           <td>";
           if($row['status']==1){
                echo "<button class='btn btn-success'><a href=status.php?ID=".$row['ID']."&status=P>Publish</a>";
            }else{
                echo "<button class='btn btn-warning'><a href=status.php?ID=".$row['ID']."&status=U>Unpublish</a>";
            }
            echo "</td>
            <td><button class='btn btn-danger'><a href=status.php?ID=".$row['ID']."&status=D>Delete</a></button></td>
            <td><button class='btn btn-secondary'><a href=editArticle.php?ID=".$row['ID'].">Edit</a></TD>
            </tr>";
        }
    }
 ?>
</body>

</html>