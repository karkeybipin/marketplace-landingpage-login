<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>hello</title>
  <link rel="stylesheet" href="../php-html/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container">
    <div class="form signup">
      <h2>Sign Up</h2>
      <div class="inputBox">
        <input type="text" required="required" />
        <i class="fa-regular fa-user"></i>
        <span>username</span>
      </div>
      <div class="inputBox">
        <input type="text" required="required" />
        <i class="fa-regular fa-envelope"></i>
        <span>email address</span>
      </div>
      <div class="inputBox">
        <input type="text" required="required" />
        <i class="fa-solid fa-lock"></i>
        <span>create password</span>
      </div>
      <div class="inputBox">
        <input type="text" required="required" />
        <i class="fa-solid fa-lock"></i>
        <span>confirm password</span>
      </div>
      <div class="inputBox">
        <input type="submit" value="Create Account" />
      </div>
      <p>have an account<a href="#">Log in</a></p>
    </div>
    <div class="form signin">
      <h2>Sign in</h2>
      <div class="inputBox">
        <input type="text" required="required" />
        <i class="fa-regular fa-user"></i>
        <span>username</span>
      </div>
      <div class="inputBox">
        <input type="password" required="required" />
        <i class="fa-solid fa-lock"></i>
        <span>password</span>
      </div>
      <div class="inputBox">
        <input type="submit" value="login" />
      </div>
      <p>not registered<a href="#" class="login">create an account</a></p>
    </div>
  </div>
</body>

</html>