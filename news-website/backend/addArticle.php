<?php
session_start();
include("inc/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
         require 'header.php';
        ?>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark">
                       <h4 class="mb-1">Add New Article</h4>
                    </div>
                    <div class="card-body">
                        <form action="backend/addArticleAction.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                               <label for="title" class="form-label">Title</label>
                               <input type="text" class="form-control" id="title" name="txtTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="txtDate" required>
                            </div>
                            <div class="mb-3">
                               <label for="source" class="form-label">Source</label>
                                  <select class="form-select" id="source" name="txtSource" required>
                                       <option value="" selected disabled>Select a source</option>
                                       <?php 
                                       $select="SELECT * FROM sources";
                                       $result=mysqli_query($conn,$select) or die (mysqli_error($conn));
                                       while($row=mysqli_fetch_array($result)){
                                         echo "<option value='$row[dbsourcename]'>".$row['dbsourcename'];
                                        }
                                        ?>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" name="txtAuthor" required>
                             </div>
                            <div class="mb-3">
                                <label for="article" class="form-label">Article</label>
                                <textarea class="form-control" id="article" name="txtArticle" rows="6" required></textarea>
                            </div>
                            <div class="mb-3">
                               <label for="category" class="form-label">Category</label>
                               <select class="form-select" id="category" name="txtCategory" required>
                                    <option value="" selected disabled>Select a category</option>
                                    <?php 
                                       $select="SELECT * FROM categories";
                                       $result=mysqli_query($conn,$select) or die (mysqli_error($conn));
                                       while($row=mysqli_fetch_array($result)){
                                         echo "<option value='$row[dbcatname]'>".$row['dbcatname'];
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="file" name="imageUpload">
			                    <span class="fa-solid fa-image"></span>
				            </div> 
                            <button type="submit" class="btn btn-dark">Submit</button>
                            <button type="reset" class="btn btn-light">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
