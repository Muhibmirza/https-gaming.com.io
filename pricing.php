<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>

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

<section class="pricing">

    <h1 class="heading">our pricing</h1>
        <div class="box-container">
            <div class="box">
                 <h3> basic Gaming Setup</h3>         
                   <div class="price">$250/-</div>
                   <div class="list">
                      <p><i class="fas fa-check"></i>high Standard Gaming Setup</p>
                      <p><i class="fas fa-check"></i>ultra Hd Graphic Cards pc</p>
                      <p><i class="fas fa-check"></i>Virtual Reality Gaming</p>
                      <p><i class="fas fa-check"></i>RGB GAMINGS SETUP</p>
                      <p><i class="fas fa-check"></i>PS5 Gaming</p>
                   </div>
                   <a href="contact.php" class="btn">Choose Gaming setup</a>
            </div>

            <div class="box">
                 <h3> standard Gaming Setup</h3>         
                   <div class="price">$650/-</div>
                   <div class="list">
                      <p><i class="fas fa-check"></i>high Standard Gaming Setup</p>
                      <p><i class="fas fa-check"></i>ultra Hd Graphic Cards pc</p>
                      <p><i class="fas fa-check"></i>Virtual Reality Gaming</p>
                      <p><i class="fas fa-check"></i>RGB GAMINGS SETUP</p>
                      <p><i class="fas fa-check"></i>PS5 Gaming</p>
                   </div>
                   <a href="contact.php" class="btn">Choose Gaming setup</a>
            </div>

     

            <div class="box">
                 <h3> ultimate Gaming Setup</h3>         
                   <div class="price">$1250/-</div>
                   <div class="list">
                      <p><i class="fas fa-check"></i>high Standard Gaming Setup</p>
                      <p><i class="fas fa-check"></i>ultra Hd Graphic Cards pc</p>
                      <p><i class="fas fa-check"></i>Virtual Reality Gaming</p>
                      <p><i class="fas fa-check"></i>RGB GAMINGS SETUP</p>
                      <p><i class="fas fa-check"></i>PS5 Gaming</p>
                   </div>
                   <a href="contact.php" class="btn">Choose Gaming setup</a>
            </div>

        </div>

</section>

    <section class="reviews">
        <h1 class="heading">Happy clients</h1>
           
        <div class="swiper reviews-slider">
                
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="images/client1.jpg" alt="">
                <h3>Elsa</h3>
                <p>This Gaming zone website is very intresting and this gaming zone is best gaming zone 
                   ever.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>     
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/client2.jpg" alt="">
                <h3>John Doe</h3>
                <p>This Gaming zone website is very intresting and this gaming zone is best gaming zone 
                   ever.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>     
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/client3.webp" alt="">
                <h3>Miss Felcon</h3>
                <p>This Gaming zone website is very intresting and this gaming zone is best gaming zone 
                   ever.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>     
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/client4.webp" alt="">
                <h3>jong de Kim</h3>
                <p>This Gaming zone website is very 
                    intresting and 
                    this gaming zone 
                    is best gaming zone 
                   ever.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>     
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
                    <i class="fas fa-star"></i> 
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