<?php
session_start();

// Function to start a new game
function startNewGame() {
    $_SESSION['randomNumber'] = rand(1, 10);
    $_SESSION['attempts'] = 0;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guess = isset($_POST['guess']) ? intval($_POST['guess']) : 0;

    if ($guess > 0) {
        $_SESSION['attempts']++;

        if ($guess == $_SESSION['randomNumber']) {
            $message = "Congratulations! You guessed the number in " . $_SESSION['attempts'] . " attempts.";
            startNewGame(); // Start a new game
        } elseif ($guess < $_SESSION['randomNumber']) {
            $message = "Try again! Your guess is too low.";
        } else {
            $message = "Try again! Your guess is too high.";
        }
    } else {
        $message = "Please enter a valid guess.";
    }
} else {
    // Start a new game when the page is loaded
    startNewGame();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number Game</title>
</head>
<body>

    <h1>Guess the Number Game</h1>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post" action="index.php">
        <label for="guess">Enter your guess (between 1 and 10):</label>
        <input type="number" id="guess" name="guess" min="1" max="10" required>
        <button type="submit">Submit Guess</button>
        <?php echo $_SESSION['randomNumber']; ?>
    </form>

</body>
</html>
