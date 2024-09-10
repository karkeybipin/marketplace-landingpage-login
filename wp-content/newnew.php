<?php
session_start();
if (empty($_SESSION['leggedin_user'])) {
    header("Location:login.php");
}
echo "welcome" . $_SESSION['loggedin_user'];
