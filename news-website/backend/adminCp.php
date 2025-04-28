<!DOCTYPE html>
<HTML>
    <HEAD>
        <meta charset="UTF-8">
        <TITLE>Admin Dashboard</TITLE>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 50px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-bottom: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        a{
          text-decoration: none;
          color:black;
          list-style-type: circle;
        }
    </style>
  </HEAD>
  <BODY>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="../index.php">
          <img src="../image/logo.jpeg" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 
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
       </div>
      </div> 
    </nav>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header bg-dark">
              <h4 class="mb-0">Add News</h4>
            </div>
            <div class="card-body">
              <form action="addArticleaction.php" method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <a href="addArticle.php">add article</a>
                  </div> 
                 <div class="col-sm-4">
                    <a href="viewArticle.php">view article</a>
                 </div> 
                 <div class="col-sm-4">
                    <a href="editArticle.php">manage article</a>
                  </div> 
                  <div class="col-sm-4">
                    <a href="addOperator.php">add operator</a>
                  </div> 
                  <div class="col-sm-4">
                    <a href="addSource.php">add source</a>
                  </div> 
                  <div class="col-sm-4">
                    <a href="manageSource.php">manage source</a>
                  </div> 
                  <div class="col-sm-4">
                    <a href="addCategory.php">add category</a>
                  </div> 
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <div class="container mt-5 text-center">
          <footer>
            <div class="share">
              <a href="#" class="fab fa-facebook-f"></a>
              <a href="#" class="fab fa-twitter"></a>
              <a href="#" class="fab fa-instagram"></a>
              <a href="#" class="fab fa-tiktok"></a>
              <a href="#" class="fa-solid fa-at"></a>
            </div>
            <div class="row">
              <div class="col-sm-4">
              
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4">
              </div>
              <p>Copyright © 2023. </p>
            </div>
  </body>
</html>
     