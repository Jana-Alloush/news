<!DOCTYPE html>
<HTML>
    <HEAD>
        <meta charset="UTF-8">
        <TITLE>Login</TITLE>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </HEAD>
    <BODY>
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
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark">
                       <h4 class="mb-0">Login</h4>
                    </div>
                    <div class="card-body">
                    <form action="loginAction.php" method="post">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control" placeholder="Enter email" name="txtEmail">
                      </div>
            <br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" placeholder="Enter password" name="txtPassword">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Login</button>
          </form>
        </div>
      </div>
    </div> 
</body>
</html>      