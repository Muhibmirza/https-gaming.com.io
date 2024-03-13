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
      
    <div class="formbox shadow- lg">
      
  <?php
  
  if(isset($_POST['signupbtn'])){
    $fullname=$_POST['fname'];
    $email=$_POST['email'];
    $password=md5($_POST['pass']);
    $confirmpassword=md5($_POST['cpass']);

    if($password==$confirmpassword){
        $connection=mysqli_connect("localhost","root","","sessions");
        $sql="INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_date`) VALUES (NULL, '{$fullname}', '{$email}', '{$password}', current_timestamp());";
        if(mysqli_query($connection,$sql)) {
            header("Location: http://localhost/gamingwebsite/index.php");
        }
    }else{
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> You Password Is Incorrect.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }
  
  
  
  
  ?>


    <h3 class="text-primary">Signup</h3>
        <form method="post" action="signup.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp">
       
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpass" id="exampleInputPassword1">
            </div>
           
            <button type="submit" class="btn btn-primary" name="signupbtn">Signup</button>
          <a href="index.php" class="btn btn-dark">Login</a>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>