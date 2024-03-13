<?php
 $conn=mysqli_connect('localhost','root','','contact_db');

 if(isset($_POST['send'])){

     $name=$_POST['name'];
     $email=$_POST['email'];
     $number=$_POST['number'];
     $plan=$_POST['plan'];
     $address=$_POST['address'];
     $message=$_POST['message'];

     $insert="INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `plan`, `address`, `message`) VALUES (NULL, '{$name}', '{$email}', '{$number}', '{$plan}', '{$address}', '{$message}');";
     
     mysqli_query($conn,$insert);

     header('location:contact.php');

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- swiper css link  -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <!-- custom css link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">

<?php @include 'header.php'; ?>

<section class="contact">
             <h1 class="heading">contact us</h1>    

             <form action="" method="post">
                        
             <div class="flex">
              
             <div class="inputbox">
                 <span>Your name</span>
                 <input type="text" placeholder="enter your name" name="name" required>
             </div>

             <div class="inputbox">
                 <span>Your email</span>
                 <input type="email" placeholder="enter your email" name="email" required>
             </div>

             <div class="inputbox">
                 <span>Your number</span>
                 <input type="number" placeholder="enter your number" name="number" required>
             </div>
              
             <div class="inputbox">
                 <span>choose Setup</span>
                  <select name="plan" >
                    <option value="basic">basic plan</option>
                    <option value="premium">premium plan</option>
                    <option value="ultimate">ultimate plan</option>
                  </select>
             </div>

             <div class="inputbox">
                 <span>Your address</span>
                 <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
             </div>
             
             <div class="inputbox">
                 <span>Your message</span>
                 <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
             </div>
             
             </div>

              <input type="submit" value="send message" name="send" class="btn">

             </form>


</section>

<?php @include 'footer.php'; ?>

</div>






 <!-- swiper js link  -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>