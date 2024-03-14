<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At  বইমেলা, we pride ourselves on curating a diverse and extensive collection of books. Whether you're into classic literature, contemporary fiction, or niche genres, we have something for every reader.
 We believe in building a strong reading community. 

         <p>Choose বইমেলা for a personalized, diverse, and engaging book-buying experience. Thank you for being a part of our reading community</p>
</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/pic-1.png" alt=" pic is loading">
         <p>বইমেলায় ঘুরতে গিয়েই হারিয়ে যেতে ইচ্ছা করে! এত লালিত্যময় প্রচ্ছদ, গন্ধে মাতোয়ারা কাগজ আর অগণিত গল্পের সমুদ্রে ভাসতে থাকতে ইচ্ছা করে। ঠিক একটা বইয়ের স্বপ্নলোক</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tanvir Islam Robin</h3>
      </div>

      <div class="box">
      <img src="image/pic-2.png" alt=" pic is loading">
      
         <p>বইমেলার মত অনলাইন দোকান হতে  বই কেনার মত  মজার আর আনন্দদায়ক কী হতে পারে? চাইলেই যেকোনো বই, হাতের কাছেই, মিনিটেই! <br> চমৎকার!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tanif Mia</h3>
      </div>

      <div class="box">
         <img src="image/pic-3.png" alt="">
         <p>কোন বইটি কিনবো বুঝতে পারছেন না   ? বইমেলার সুন্দর সুন্দর রিভিউ  আর  চমৎকার রেকমেন্ডেশনগুলো  তো লাইফসেভার  ! সঠিক বইটা খুঁজে পেতে দারুণ সাহায্য করে।<br></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Azrul Amalin</h3>
      </div>

      <div class="box">
         <img src="image/pic-4.png" alt="">
         <p>অফার আর ডিসকাউন্টের ঝড় লাগে বইমেলায়! পছন্দের বইগুলো সস্তায় কিনতে পেরে মজা ডবল হয়ে যায়।বইমেলা শুধু বইয়ের দোকান না, এ এক আড্ডাস্থল বইপ্রেমীদের জন্য। সবকিছুই এক জায়গায়! লাভই লাভ</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Salauddin Ahmen</h3>
      </div>

      <div class="box">
         <img src="image/pic-5.png" alt="">
         <p>বইমেলায় বই কেনা শুধু কেনাকাটা না, একটা অন্বেষণ! নতুন লেখক, অচেনা গল্প, লুকোনো জEMS খুঁজে পেতে এমন জায়গা আর কোথায়? বইয়ের পৃথিবীতে এক সফরের মতো</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maksudor Rahman Roman</h3>
      </div>

      <div class="box">
         <img src="image/pic-6.png" alt="">
         <p>অনলাইন শপিংয়ের ঝামেলা ভুলে গেছি বইমেলায়! সহজ অর্ডারিং, দ্রুত ডেলিভারি আর নিখুঁত প্যাকেজিং - সবকিছুই এত মসৃণ যে বারবার ফিরে আসতে হয়।</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rana Matria</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="image/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>তৌকির আহমেদ</h3>
      </div>

      <div class="box">
         <img src="image/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>নিশান রায়</h3>
      </div>

      <div class="box">
         <img src="image/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>মিহির কান্তি রায়</h3>
      </div>

      <div class="box">
         <img src="image/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>তানভীর আহমেদ</h3>
      </div>

      <div class="box">
         <img src="image/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>সাকিব আল হাসান</h3>
      </div>

      <div class="box">
         <img src="image/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>সুস্মিতো রানা মৈত্র </h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>