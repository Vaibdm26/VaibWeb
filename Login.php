<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        body{
            margin: 0 px;
            padding: 0 px;
            background-image:url('backgrounding.jpeg');
            background-size:cover;
        }
        form{
            background-color: #fff;
            margin-top:6em;
            margin-left:30em;
            margin-right:10em;
            padding:30px;
            box-shadow: 10px 10px 8px 10px #888888;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form method ="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="Login">submit</button>
  <p style="text-align:center;">New User?<br>Create Account<a href="register.php">Sign Up</a></p>
</form>
    </div>
</body>
</html>