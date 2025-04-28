<?php
SESSION_start();
include ("backend/inc/connection.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
          <img src="image/logo.jpeg" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          <div class="d-flex">
            <a class="btn btn-light ms-3" href="backend/login.php">Login</a>
          </div>
       </div>
      </div> 
    </nav>
 <?php
 if (isset($_GET['ID'])) {
     $article_id = mysqli_real_escape_string($conn, $_GET['ID']);
     
     $sql = "SELECT * FROM articles WHERE ID = $article_id";
     $result = mysqli_query($conn, $sql);

     if (!$result) {
         // Query failed, display the error message
         echo "Error: " . mysqli_error($conn);
     } elseif (mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_assoc($result);
         // Display article details
         echo '<h2>' . htmlspecialchars($row['dbTitle']) . '</h2>';
         echo '<p>Date: ' . htmlspecialchars($row['dbDate']) . '</p>';
         echo '<p>Source: ' . htmlspecialchars($row['dbSource']) . '</p>';
         echo '<p>Author: ' . htmlspecialchars($row['dbAuthor']) . '</p>';
         echo '<p>Category: ' . htmlspecialchars($row['Category']) . '</p>';
         echo '<p>Article Content: ' . htmlspecialchars($row['Article']) . '</p>';
         echo '<img src="' . htmlspecialchars($row['image']) . '" alt="Article Image" style="max-width: 100%;">';
     } else {
         echo '<p>Article not found.</p>';
     }
 } else {
     echo '<p>Article ID is missing in the URL.</p>';
 }
 ?>

    </div>
</body>
</html>
