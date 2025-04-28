<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

SESSION_start();
include ("backend/inc/connection.php");
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
        <a class="navbar-brand" href="index.php">
          <img src="image/logo.jpeg" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
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
            <?php if (!isset($_SESSION["user"])) { ?>
            <li class="nav-item">
            <a class="nav-link" href="backend/login.php">Sign In</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div> 
    </nav>
    <br><br>
    
    <div class="container">
    <?php
    $sql = "SELECT * FROM articles WHERE dbstatus = 1";
    $result = mysqli_query($conn, $sql);

    $cardsPerRow = 2;
    $cardCount = 0;

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row; // Store the row in the array
      }
      
      $totalRows = count($rows);
  
      // Reverse the order of the rows
      $reversedRows = array_reverse($rows);
  
      foreach ($reversedRows as $row) {
          if ($cardCount % $cardsPerRow === 0) {
              echo '<div class="row">';
          }
            echo '<div class="col-sm-6">'; 
            echo '<div class="card mb-3" style="width:400px;">';
            echo '<table class="table">';
            echo '<tr><td><strong>Title:</strong></td><td>' . $row["dbTitle"] . '</td></tr>';
            echo '<tr><td><strong>Source:</strong></td><td>' . $row["dbSource"] . '</td></tr>';
            echo '<tr><td>';
            echo '<img src="' . $row['image'] . '" alt="Image" style="max-width: 100%;">';
            echo '</td></tr>';
            
            echo '</table>';
            echo '<div class="text-center">';
            echo '<a href="viewCard.php?ID=' . htmlspecialchars($row['ID']) . '" class="btn btn-dark">Read</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            if ($cardCount % $cardsPerRow === ($cardsPerRow - 1)) {
                echo '</div>';
            }

            $cardCount++;
        }

        if ($cardCount % $cardsPerRow !== 0) {
            echo '</div>';
        }
    }
    ?>
    </div>
    <div class="container text-center">
      <a href="#">More</a>
      <p>Copyright © 2023.</p>
    </div>
  </body>
</html>
