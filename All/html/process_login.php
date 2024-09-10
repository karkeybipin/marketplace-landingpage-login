<?php

// require "index.php";
// require "database.php";

// require "user.php";

// $username = $_POST["username"];
// $password = $_POST["password"];

// if (empty($username) || empty($password)) {
//     echo "Please enter the username or password";
//     die();
// }
// $user = new User($username, $password);
// $result = $user->verify_user();

// if($result){
//     $_SESSION['loggedin_user']=$username;
//     header("Location:dashboard.php");
// }
// else {
//     header("Location:login.php");
// }
// process_login.php



require "user.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        echo "Please enter the username or password";
        die();
    }

    $user = new User($username, $password);
    $result = $user->verify_user($username, $password);

    if ($result) {
        session_start();
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: process_login.php");
        exit();
    }

}





// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $user = new User($username, $password);
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="process_login.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Login">
        </div>

    </form>
</body>

</html>