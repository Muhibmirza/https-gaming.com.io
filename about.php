<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

<section class="about">

     <img src="images/about.png" alt="">
     <h3>about us</h3>
      <p>Game Zone is a company that offers a unique opportunity for video game enthusiasts to frequent a place of a
         welcoming and pleasant atmosphere. Game lovers will enjoy a possibility to play any video game prior to its purchase. Moreover, Game Zone provides an excellent opportunity to find other video game lovers and share their experiences, connect, 
         and make new friends. Providing video game enthusiasts with the best game experience,
          excellent customer service,
         and a welcoming atmosphere is crucial for the Game Zone business project. </p>
         <a href="contact.php" class="btn">contact us</a>

</section>

 <section class="team">
     
    <h1 class="heading">our teams</h1>

    <div class="box-container">

       <div class="box">
            <img src="images/team1.jpg" alt="">
            <h3>Mirza Muhib</h3>
            <p>GAMING ZONE</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
       </div>
       
       <div class="box">
            <img src="images/team2.jpg" alt="">
            <h3>William Reacher</h3>
            <p>GAMING ZONE</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
       </div>   

       <div class="box">
            <img src="images/team3.webp" alt="">
            <h3>john eliver</h3>
            <p>GAMING ZONE</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
       </div>   

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