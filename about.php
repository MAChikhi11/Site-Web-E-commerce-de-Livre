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
   <title>À PROPOS</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>À PROPOS </h3>
   <p> <a href="home.php">Accueil</a> / À propos </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>pourquoi nous choisir?</h3>
         <p>E-Books propose des livres de tout genre et de tous les auteurs. Nous sommes à la pointe sur les nouvelles sorties et nous proposons des promotions durant toute l’année.</p>
         <p>Si vous voulez en savoir plus sur notre politique d’entreprise, vous pouvez nous contacter en appuyons sur le bouton ci-dessous.</p>
         <a href="contact.php" class="btn">Nous Contacter</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Avis Client</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Etant un passionné d’art, j’ai adoré le livre The art city, un
            livre incroyable, passionnant et réfléchi. Et je le recommande
            fortement pour tous les lecteurs.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Salim</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Black history mounth est un livre qui remet en question beaucoup
            de choses. Il parle de la société et des relations entres les
            gens. A lire absolument.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Atomics Habbits est un livre qui a changé ma vie et qui je suis
            convaincu changera celle de beaucoup d’autres lecteurs dans
            l’avenir. La vie, c’est des habitudes.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mohamed</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Your name est un livre magnifique et en plus il est a bon prix sur
            ce site par rapport au autres. Et le service client est
            impeccable. Je recommande.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fatima</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Jamais 9rit ktab fi hyati, chrit LOVE bach nchouf. Legya wlh ma
            yesla7. Ndemt ga3 li chritou, khssaret drahem. Ma nzidch ne9ra
            ktab ga3.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hamid</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>J’ai acheté le livre Music Rock pour devenir une STAR de la K-POP.
            Au lieu de ça le livre m’apprend le solfège. Moi je m’en fou du
            solfège.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kim</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Auteurs</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Guillaume</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Clémence</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Eugène</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jeannette</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Alexis</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Laure</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>