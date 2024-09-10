<?php
@session_start();

if (array_key_exists('username', $_SESSION) && array_key_exists('username', $_COOKIE)) {
} else {
    header('location:../index.php');
}
include('headerFooter/header.php');



include('sidebar.php');

?>

<?php

include('headerFooter/footer.php')

?>