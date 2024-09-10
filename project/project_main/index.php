<?php

$conn = mysqli_connect('localhost', 'root', '', 'project_db') or die('connection failed');

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `Communication`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if ($insert) {
      $message[] = 'appointment made successfully!';
   } else {
      $message[] = 'appointment failed';
   }
}

$conn = mysqli_connect('localhost', 'root', '', 'project_db') or die('connection failed');

if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `communication` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message already sent!';
   } else {
      mysqli_query($conn, "INSERT INTO `communication`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message is sent successfully!';
   }
}




// @include 'config.php';

// session_start();

// if(!isset($_SESSION['user_name'])){
//    header('location:login_form.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php include 'title.php'; ?></title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">



</head>

<body>

   <!-- header starts  -->

   <header class="header fixed-top">

      <div class="container">

         <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo" style="margin-left: -45px;">Green 🍀 Farming</a>

            <nav class="nav">
               <a href="#home">home</a>
               <a href="#about">about</a>
               <a href="#services">services</a>
               <a href="#product">Product</a>
               <a href="#reviews">reviews</a>
               <a href="#contactform">contact</a>
            </nav>

            <a href="MarketPlace-GreenFarming/index.php" class="link-btn">Marketplace</a>
            <a href="login_form.php" class="link-btn">LOGIN</a>

            <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <!-- header ends -->

   <!-- home starts  -->

   <section class="home" id="home">

      <div class="container">

         <div class="row min-vh-100 align-items-center">
            <div class="content t ext-center text-md-left">
               <section class="wrapper1">
                  <p>Nurturing seeds is our pledge for a sustenance-filled future. Agriculture, a harmonious blend of art and science, orchestrates the dance between the soil, crops, and livestock, crafting a symphony of sustenance.</p>
                  <div class="top">Agriculture</div>
                  <div class="bottom" aria-hidden="true">Agriculture</div>
               </section>
               <!-- <a href="#appointmentform" class="link-btn">Make appointment</a> -->
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
               <img src="images/about.png" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
               <span class="about">about us</span>
               <h3>Improving agriculture
                  <span> Improve health</span>.
               </h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
               <!-- <a href="#appointmentform" class="link-btn">make appointment</a> -->
            </div>

         </div>

      </div>

   </section>

   <!-- about ends -->

   <!-- services -->

   <section class="services" id="services">

      <h1 class="heading">our services</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/crop.jpg" alt="">
            <h3>Crop consulting Management</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p> -->
         </div>

         <div class="box">
            <img src="images/agronomy.jpg" alt="">
            <h3>Agronomy </h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p> -->
         </div>

         <div class="box">
            <img src="images/livestock.png" alt="">
            <h3>Livestock consulting & Management
            </h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p> -->
         </div>

         <div class="box">
            <img src="images/machine.png" alt="">
            <h3>Agriculture Equipment & Machinery </h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p> -->
         </div>

         <div class="box">
            <img src="images/agro financing.webp" alt="">
            <h3>Agriculture Financing
            </h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p> -->
         </div>

         <div class="box">
            <img src="images/agmarketing.png" alt="">
            <h3>Agriculture Marketing</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p> -->
         </div>

      </div>

   </section>

   <!-- services ends -->

   <!-- process starts  -->

   <section class="process">

      <h1 class="heading">work process</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/planning.png" alt="">
            <h3>Planning</h3>
         </div>

         <div class="box">
            <img src="images/preparingland.png" alt="">
            <h3>Preparing The land</h3>
         </div>
         <div class="box">
            <img src="images/irrigation.png" alt="">
            <h3>Irrigation</h3>
         </div>

         <div class="box">
            <img src="images/harvesting.png" alt="">
            <h3>Harvesting</h3>
         </div>
         <div class="box">
            <img src="images/storage.png" alt="">
            <h3>Storage</h3>
         </div>
         <div class="box">
            <img src="images/agmarketing.png" alt="">
            <h3>Marketing</h3>
            <!-- <p></p> -->
         </div>
      </div>

   </section>

   <!-- process ends -->



   <section class="product" id="product">
      <?php include "products.php"; ?>
   </section>



   <!-- Appointment starts  -->

   <!-- reviews starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading"> satisfied farmers</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/farmerlogo.jpg" alt="">
            <p>This is how the satisfied farmers section appears in future.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mr/Mrs Name here</h3>
            <span>satisfied Farmer</span>
         </div>

         <div class="box">
            <img src="images/farmerlogo.jpg" alt="">
            <p>This is how the satisfied farmers section appears in future.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mr/Mrs Name here </h3>
            <span>satisfied Farmer</span>
         </div>

         <div class="box">
            <img src="images/farmerlogo.jpg" alt="">
            <p>This is how the satisfied farmers section appears in future.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mr/Mrs Name here</h3>
            <span>Satisfied Farmer</span>
         </div>


      </div>

   </section>


   <!-- reviews ends -->
   <section class="contact" id="appointmentform">

      <h1 class="heading">Make Appointment</h1>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<p class="message" style="color:Green;background-color:wheat;">' . $message . '</p>';
            }
         }
         ?>
         <span>Name :</span>
         <input type="text" name="name" placeholder="eg. firstname lastname" class="box" required>
         <span>Email :</span>
         <input type="email" name="email" placeholder="eg. someone@example.com" class="box" required>
         <span>Number :</span>
         <input type="number" name="number" placeholder="eg. 9876543210" class="box" required>
         <span>Date:</span>
         <input type="datetime-local" name="date" class="box" required min="<?php echo date('Y-m-d\TH:i'); ?>">
         <!-- <input type="datetime-local" name="date" class="box" required> -->
         <Span>Message :</Span>
         <input type="message" name="message" class="box"required>
         <input type="submit" value="make appointment" name="submit" class="link-btn">

      </form>

   </section>


   <!-- contact starts -->

   <!-- <section class="contact" id="contactform">-->
   <!-- comment  -->

   <!-- <div class="container mt-3 pt-5 pb-2 ">
      <h2>Comments<span style="color: red;"> (in the future)</span></h2>
      <div class="media border p-3">
         <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:60px;">
         <div class="media-body">
            <h4>Ram Hari <small><i>Posted on December 13 2023</i></small></h4>
            <p>This is how the comment look like in future</p>
            <div class="media p-3">
               <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:40px;">
               <div class="media-body">
                  <h4>Sita <small><i>Posted on December 15 2023</i></small></h4>
                  <p>This is how the replies in comment look like in future</p>
               </div>
            </div>
            <div class="media p-3">
               <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:45px;">
               <div class="media-body">
                  <h4>Shyam <small><i>Posted on December 15 2023</i></small></h4>
                  <p>This is how the replies in comment look like in future
                  </p>
               </div>
            </div>
         </div>
         <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:45px;">
         <div class="media-body">
            <h4>Geeta Gurung <small><i>Posted on December 12 2023</i></small></h4>
            <p>This is how the comment look like in future
            </p>
            <div class="media p-3">
               <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:45px;">
               <div class="media-body">
                  <h4>Dhan Bahadur karki<small><i>Posted on december 13 2023</i></small></h4>
                  <p>This is how the replies in comment look like in future.
                  </p>
               </div>
            </div>
            <div class="media p-3">
               <img src="images/farmerlogo.jpg" alt="logo" class="mr-3 mt-3 rounded-circle" style="width:30px;">
               <div class="media-body">
                  <h4>Kesari <small><i>Posted on December 28 2023</i></small></h4>
                  <p>This is how the replies in comment look like in future.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div> -->

   <!-- comment end -->
   <!-- <section class="marketplace" id="marketplace">
      <a href="MarketPlace-GreenFarming/index.php" class="link-btn">marketplace🚚</a>
   </section> -->
   <!-- footer starts  -->

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+977-986*******</p>
            <p>+977-97********</p>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Branch</h3>
            <p>Budanil-kantha</p>
            <p>Sitapaila</p>
            <p>Koteshwor</p>
            <p>Kathmandu , 064000</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>10:00am to 05:00pm</p>
         </div>
         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3> Email address</h3>
            <p>agricultureRB@gmail.com</p>
            <p>Rajan&Bipinagency@gmail.com</p>
         </div>
      </div>
      <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span class="agro">Rajan & Bipin | </span><span>Agency</span> </div>

   </section>

   <!-- footer section ends -->

   <script src="js/script.js"></script>
</body>

</html>