<?php
function OpenCon($host, $user, $password, $database) {
    $conn = new mysqli($host, $user, $password, $database);
    
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    
    return $conn;
}

function CloseCon($conn) {
    $conn->close();
}
?>