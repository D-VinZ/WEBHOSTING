<?php 




if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<?php

$conn = mysqli_connect('localhost','id21649923_admdatabase','@Furbase01','id21649923_furbase01') or die('connection failed');

if(isset($_POST['pasa'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'Appointment sent successfully!';
   }else{
      $message[] = 'Appointment failed';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fur Solution</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="mainstyle.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">Fur <span>Solutions</span></a>

         <nav class="nav">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href ="#recent">Recent Update</a>
            <a href="#contact">Contact Us</a>
            <a href="#shop">Shop</a>
         </nav>

         <a href="logout.php" class="link-btn">Log out</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Welcome to Fur <span>Solutions</span></h3> 
            <p id="sub">Nurturing Bonds, Finding Homes, Fur Real!<br> Anything you need on your Fur Babies!</p>
            <a href="#contact" class="link-btn1">Explore Us</a>
         </div>
      </div>

   </div>

</section>
<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="abouts_bg.png" class="w-100 mb-5 mb-md-0" alt="">
         </div>   

         <div class="col-md-6 content">
            <span>About Us</span>
            <h3>We Care About Your Pets!</h3>
            <p id="abouts">Welcome to our online haven for pet lovers! At FurSolutions, we're more than just a store; we're your destination for a seamless online pet adoption experience. Explore a curated selection of quality pet products and find the perfect, loving companion with our convenient online pet adoption service. From adorable puppies to affectionate kittens, our platform connects you with a variety of pets ready to bring joy and companionship to your home. Ensure your furry friends thrive with joy, well-being, and the perfect addition to your family—all just a click away! 
               Join our community where passion meets quality for a purr-fectly delightful shopping and adoption experience!</p>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- Recent update section starts  -->

<section class="recent" id="recent">

   <h1 class="heading">Recent Updates</h1>

   <div class="box-container container">

      <div class="box">
         <img src="cat.jpg" alt="">
         <p>If you're seeking a furry friend who loves snuggles, look no further! This sweet-natured cat is a master at melting hearts with its affectionate purrs and gentle demeanor.</p>
        
         <h3>Cat</h3>
         <p>Breed: Persian<br>Birth Date: 02/22/23</p>
      
         <span>New Update!</span>
      </div>

      <div class="box">
         <img src="bird.jpg" alt="">
         <p> Witness the stunning hues of our latest parrot! With feathers mirroring a rainbow, this avian companion is a vibrant symphony of colors, bringing unparalleled joy to any home.</p>
         <h3>Parrot</h3>
        
         <p>Breed: Macaws<br>Birth Date: 01/15/23</p>
         <span>New Update!</span>
      </div>

      <div class="box">
         <img src="dog.jpg" alt="">
         <p>Meet our newest canine companions! From energetic pups ready for playtime to affectionate friends craving cuddles, our dogs bring joy, loyalty, and endless love to your home.</p>
         <h3>Dog</h3>
     
         <p>Breed: Bernedoodle<br>Birth Date: 02/22/22</p>
         <span>New Update!</span>
      </div>

   </div>

</section>

<!-- Recent update section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">Inquiries / Concern's</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      
      <span>Name :</span>
      <input type="text" name="name" placeholder="Enter your Name" class="box" required>
      <span>E/Gmail :</span>
      <input type="email" name="email" placeholder="Enter your Email" class="box" required>
      <span>Phone Number :</span>
      <input type="number" name="number" placeholder="Enter your Phone Number" class="box" required>
      <span>Appointment Date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="Book an Appointment" name="pasa" class="link-btn1">
   </form>  

</section>
<!-- contact section ends -->

<!-- Shop update section starts -->

<section class="shop" id="shop">

   <h1 class="heading">Shop</h1>

   <div class="box-container container">

      <div class="box">
         <img src="pet-food-icon.png" alt="">
        <h1 class="shop-product">FOODS</h1>
        <p class>Elevate your pet's dining experience with . Discover a range of premium pet foods that prioritize nutrition and taste, ensuring your furry companions thrive with every delightful bite..</p>
        <a href="shop1.php"> <button id="shop-button" >Buy Now</button></a>
      </div>

      <div class="box">
         <img src="pet-icon.png" alt="">
         <h1 class="shop-product">PETS</h1>
         <p>Discover a delightful realm of pets at Paws and Whiskers. From affectionate companions treasured family members, our assortment presents the ideal furry companion for your home.</p>
        <a href="shop2.php"><button id="shop-button">Buy Now</button></a> 
      </div>

      <div class="box">
         <img src="accessories-icon.png" alt="">
         <h1 class="shop-product">ACCESSORIES</h1>
         <p>Elevate your pet's style at Paws . Explore curated accessories, from cozy beds to stylish collars, ensuring your furry friend enjoys both comfort and fashion in every delightful detail.</p>
        <a href="shop3.php"><button id="shop-button">Buy Now</button></a> 
      </div>

 

</section>

<!-- Recent update section ends -->


<!-- footer section starts  -->
<section class="footer">
   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Contact number</h3>
         <p>+639-123-4567</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Our Address</h3>
         <p>Manila, Philippines</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>Opening Hours</h3>
         <p>08:00 a.m - 10:00 p.m</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email Address</h3>
         <p>dhextermuldong012@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; All Right Reserved<br> 2023</div>

</section>
<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>