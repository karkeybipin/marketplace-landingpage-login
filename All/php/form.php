<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
</head>

<body>
    <Form>
        <input type="text" name="email" id="email">
        <input type="password" name="password" id="password">
        <input type="Button" value="login" onclick="ValidateEmail()">
    </Form>
    <script type="text/javascript">
        function ValidateEmail() {
            var inputText = document.getElementById("email").value;
            var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (inputText.match(mailFormat)) {
                alert("Valid Email address");
                return true;
            } else {
                alert("Invalid Email Address");
                return false;
            }
        }
    </script>
</body>

</html>