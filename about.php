<?php

@include 'config.php';

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
   <title>About</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <h1 class="title">
      About
      <div class="underline-title-container">
         <div class="underline-title"></div>
      </div>
   </h1>

      <div class="about-container">
         <img src="images/logo.png" class="about-logo" alt="Logo">
         <p class="about-paragraph">
         Welcome to <span class="begreen" style="color: var(--green)"><span class="be" style="color: var(--green)">Be</span>Green</span>, <br> where we are redefining the grocery shopping experience with a commitment to sustainability, health, and community. At <span class="begreen" style="color: var(--green)"><span class="be" style="color: var(--green)">Be</span>Green</span>, we believe that every choice we make can contribute to a greener and healthier planet. Our mission is to provide you with a thoughtfully curated selection of products that not only nourish your body but also support environmental well-being.
         </p>
      </div>



</section>

<section class="reviews">

   <h1 class="title">
      Clients reivews
      <div class="underline-title-container">
         <div class="underline-title"></div>
      </div>
   </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/profile1.jpg" alt="">
         <h3>Alex M.</h3>
         <p class="review-paragraph">BeGreen is a fantastic initiative towards a greener lifestyle. I appreciate their dedication to sustainability and ethical sourcing. The product selection is impressive, and I've discovered some unique, eco-friendly brands during my visits. The green initiatives they implement, such as reducing packaging waste, are commendable. My only suggestion would be to expand the range of bulk items for a more waste-free shopping experience. Overall, a great place to shop consciously!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/profile2.jpg" alt="">
         <h3>Emma W.</h3>
         <p class="review-paragraph">I absolutely love BeGreen! As someone who is passionate about sustainable living, finding a grocery store that aligns with my values has been a game-changer. The variety of organic produce, eco-friendly products, and commitment to ethical sourcing make BeGreen my go-to for all my grocery needs. The staff is knowledgeable and friendly, creating a welcoming environment. BeGreen is not just a store; it's a community that inspires positive change. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
      </div>

      <div class="box">
         <img src="images/profile3.jpg" alt="">
         <h3>James H.</h3>
         <p class="review-paragraph">BeGreen is a breath of fresh air in the world of grocery shopping. I've never seen such a commitment to sustainability in a store. The array of organic and locally sourced products is impressive, and the fact that they prioritize fair trade is a big win for me. The atmosphere is relaxed, and it's clear that the staff genuinely cares about the environment. I appreciate being able to make a positive impact with every purchase. BeGreen is a step towards a better future!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
      </div>
   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>