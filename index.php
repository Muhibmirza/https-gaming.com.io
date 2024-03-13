<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="one.css"> 
</head>
  <body>
    
  <div class="formbox shadow-lg">
   <?php
    if(isset($_POST['loginbtn'])) {
        $email=$_POST['loginemail'];
        $password=md5($_POST['loginpassword']);

        $connection=mysqli_connect("localhost","root","","sessions");
        $sql="SELECT * FROM users WHERE user_email='{$email}' AND user_pass='{$password}'";
        $data=mysqli_query($connection,$sql);
        if(mysqli_num_rows($data)>0) {
            while($row=mysqli_fetch_assoc($data)) {
                 session_start();
                 $_SESSION['name']=$row["user_name"];

            }
            header("Location:http://localhost/gamingwebsite/home.php");
        }else{
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Your Password ANd Email Are Incorrect.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
   ?>

    <h3 class="text primary">Login</h3>
  <form method="post" action="index.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"name="loginemail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="loginpassword" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="loginbtn">Login</button>
  <a href="signup.php" class="btn btn-dark">Signup</a>
</form>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>