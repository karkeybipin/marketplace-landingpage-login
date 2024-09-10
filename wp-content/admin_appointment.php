<?php

// include 'config.php';

// // session_start();

// $admin_id = $_SESSION['admin_id'];

// if(!isset($admin_id)){
//    header('location:login_form.php');
// };

// if(isset($_GET['delete'])){
//    $delete_id = $_GET['delete'];
//    mysqli_query($conn, "DELETE FROM `form` WHERE id = '$delete_id'") or die('query failed');
//    header('location:admin_appointment.php');
// }

include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:login_form.php');
   exit();
   }

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   $stmt = mysqli_prepare($conn, "DELETE FROM `form` WHERE id = ?");
   mysqli_stmt_bind_param($stmt, "i", $delete_id);
   mysqli_stmt_execute($stmt);

   if (mysqli_stmt_affected_rows($stmt) > 0) {
      header('location:admin_appointment.php');
      exit();
   } else {
      echo 'Delete operation failed';
   }

   mysqli_stmt_close($stmt);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Appointment</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title"> Appointment</h1>

   <div class="box-container">
   <?php
      $select_appointment_form= mysqli_query($conn, "SELECT * FROM `form`") or die('query failed');
      if(mysqli_num_rows($select_appointment_form) > 0){
         while($fetch_appointment_form = mysqli_fetch_assoc($select_appointment_form)){
      
   ?>
   <div class="box">
      <p> user id : <span><?php echo $fetch_appointment_form['id']; ?></span> </p>
      <!-- <p> name : <span><?php 
      // echo $fetch_appointment_form['name']; 
      ?></span> </p> -->
      <!-- <p> number : <span><?php echo $fetch_appointment_form['number']; ?></span> </p> -->
      <p> email : <span><?php echo $fetch_appointment_form['email']; ?></span> </p>
      <!-- <p> message : <span><?php 
      // echo $fetch_appointment_form['message']; 
      ?></span> </p> -->

      <a href="admin_contacts.php?delete=<?php echo $fetch_appointment_form['id']; ?>" onclick="return confirm('delete this Appointment Form?');" class="delete-btn">delete Appointment</a>
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">you have no Appointment Today!</p>';
   }
   ?>
   </div>

</section>









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>