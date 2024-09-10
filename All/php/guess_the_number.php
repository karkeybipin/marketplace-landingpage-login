<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="guess_the_number.php" method="post">
        <label for="">Enter the Number: </label>
        <input type="text" name="guess">
        <input type="submit" name="submit">

    </form>
</body>

</html>




<!-- Php code -->
<?php
$minNumber = 1;
$maxNumber = 10;
$maxAttempts = 5;


$secretNumber = rand($minNumber, $maxNumber);
if (isset($_POST['submit'])) {
    

    $attempts = 0;
    echo $secretNumber;
    
    while ($attempts <= $maxAttempts) {

        $attempts++;
        $guess = filter_input(INPUT_POST,'guess',FILTER_VALIDATE_INT);

        switch (true) {
            case $guess < $minNumber || $guess > $maxNumber:
                echo "Invalid guess. Please enter a number between $minNumber and $maxNumber<br>";
                break;
            case $guess == $secretNumber:
                echo "Congratulations! You guessed the correct number in $attempts attempts<br>";
                break;
            case $guess < $secretNumber:
                echo "Too low. Try again.<br>";
                break;
            default:
                echo "Too high Number<br>";
                break;
        }
        if ($guess == $secretNumber) {
            break;
        }
    }
    if ($attempts === $maxAttempts) {
        echo "Sorry, you've run out of attempts. The correct number was $secretNumber <br>";
    }

}
?>