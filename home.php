<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- swiper css link  -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <!-- custom css link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php
     
     session_start();
     if(!isset($_SESSION['name'])) {
        header("Location: http://localhost/gamingwebsite/index.php");
     }
    ?>

<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

 <div class="swiper home-slider">
  
 <div class="swiper-wrapper">
    <div class="swiper-slide slide" style="background:url(images/homeimage2.jpg) no-repeat">
     <div class="content">
        <h3>Grow your Gaming Skills</h3>
        <p>Game lovers will enjoy a possibility to play any video game prior to its purchase. Moreover,
             Game Zone provides an excellent opportunity to find other video game lovers and share their experiences, 
             connect, and make new friends.</p>
            <a href="about.php" class="btn">Discover more</a>
     </div>
    </div> 

    <div class="swiper-slide slide" style="background:url(images/homeimage1.jpg) no-repeat">
     <div class="content">
        <h3>Grow your Gaming Skills</h3>
        <p>Game lovers will enjoy a possibility to play any video game prior to its purchase. Moreover,
             Game Zone provides an excellent opportunity to find other video game lovers and share their experiences, 
             connect, and make new friends.</p>
            <a href="about.php" class="btn">Discover more</a>
     </div>
    </div> 

    <div class="swiper-slide slide" style="background:url(images/homeimage3.jpg) no-repeat">
     <div class="content">
        <h3>Grow your Gaming Skills</h3>
        <p>Game lovers will enjoy a possibility to play any video game prior to its purchase. Moreover,
             Game Zone provides an excellent opportunity to find other video game lovers and share their experiences, 
             connect, and make new friends.</p>
            <a href="about.php" class="btn">Discover more</a>
     </div>
    </div> 
 </div>

 <div class="swiper-pagination"></div>

 </div>


</section>   
   
<section class="services">
    
   <h1 class="heading">our Gaming Setup</h1>
       

      <div class="swiper service-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
              <img src="images/servicesS1.jpg" alt="">
              <div class="content">
                 <h3>Controller gaming</h3>
                 <p>playing many types of video games in order to select the game the customer likes the most</p>
                 <a href="about.php" class="btn">about us</a>
              </div>
            </div>

            <div class="swiper-slide slide">
              <img src="images/servicesS2.jpg" alt="">
              <div class="content">
                 <h3>RGB Gaming Setup</h3>
                 <p>playing many types of video games in order to select the game the customer likes the most</p>
                 <a href="about.php" class="btn">about us</a>
              </div>
            </div>

            <div class="swiper-slide slide">
              <img src="images/ServicesS3.jpg" alt="">
              <div class="content">
                 <h3>Ultra hd Graphic Cards</h3>
                 <p>playing many types of video games in order to select the game the customer likes the most</p>
                 <a href="about.php" class="btn">about us</a>
              </div>
            </div>

            <div class="swiper-slide slide">
              <img src="images/ServicesS4.jpg" alt="">
              <div class="content">
                 <h3>Esports Tournaments</h3>
                 <p>playing many types of video games in order to select the game the customer likes the most</p>
                 <a href="about.php" class="btn">about us</a>
              </div>
            </div>
          
            <div class="swiper-slide slide">
              <img src="images/ServicesS5.jpg" alt="">
              <div class="content">
                 <h3>VR Virtual Reality</h3>
                 <p>playing many types of video games in order to select the game the customer likes the most</p>
                 <a href="about.php" class="btn">about us</a>
              </div>
            </div>

            <div class="swiper-slide slide">
              <img src="images/ServicesS6.jpg" alt="">
              <div class="content">
                 <h3>Multi VR Virtual Reality</h3>
                 <p>playing many types of video games in order to select the game the customer likes the most</p>
                 <a href="about.php" class="btn">about us</a>
              </div>
            </div>

            <div class="swiper-slide slide">
              <img src="images/Servicesg1.jpg" alt="">
              <div class="content">
                 <h3>Latest Games</h3>
                 <p>playing many types of video games in order to select the game the customer likes the most</p>
                 <a href="about.php" class="btn">about us</a>
              </div>
            </div>


         </div>         

         <div class="swiper-pagination"></div>

      </div>

</section>



<?php @include 'footer.php'; ?>

</div>






 <!-- swiper js link  -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>