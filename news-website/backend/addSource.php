<?php
SESSION_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
         require 'header.php';
        ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
                    <h4 class="mb-0">Add New Source</h4>
                </div>
                <div class="card-body">
                    <form action="addSourceAction.php" method="post">
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="Name" class="form-control" id="Name" name="txtName" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">type</label>
                            <input type="type" class="form-control" id="type" name="txtType" required>
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>