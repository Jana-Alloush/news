<?php
include("inc/connection.php");
include 'inc/security.php';
$id=$_GET['ID'];
$sql="SELECT * FROM articles WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

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
                        <h4 class="mb-0">Edit Article</h4>
                    </div>
                    <div class="card-body">
                        <form action="addArticleAction.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="txttitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="txtdate" required>
                            </div>
                            <div class="mb-3">
                                <label for="Source" class="form-label">Source</label>
                                <select class="form-select" id="operator" name="txtOperator" required>
                                    <option value="" selected disabled>Select a Source</option>
                                    <?php
                                    foreach ($SourceNames as $SourceName) {
                                        echo '<option value="' . $SourceName . '">' . $SourceName . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" id="author" name="txtauthor" required>
                            </div>
                            <div class="mb-3">
                                <label for="article" class="form-label">Article</label>
                                <textarea class="form-control" id="article" name="txtarticle" rows="6" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="txtImage" name="txtImage" accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="operator" class="form-label">Operator</label>
                                <select class="form-select" id="operator" name="txtOperator" required>
                                    <option value="" selected disabled>Select an operator</option>
                                    <?php
                                    foreach ($operatorNames as $operatorName) {
                                        echo '<option value="' . $operatorName . '">' . $operatorName . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" id="category" name="txtcategory" required>
                                    <option value="" selected disabled>Select a category</option>
                                    <?php
                                    foreach ($categoryNames as $categoryName) {
                                        echo '<option value="' . $categoryName . '">' . $categoryName . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="Update" value="Update" class="btn btn-dark">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.navbar-light .dmenu').hover(function () {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
    </script>
</body>
</html>