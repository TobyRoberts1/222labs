<?php
// Get the user's guess
$user_guess = $_POST['guess'];

// Generate a random number between 0 (heads) and 1 (tails)
$rand = rand(0, 1);

// Check if the user won or lost
if ($user_guess == $rand) {
    $result = "You won!";
} else {
    $result = "You lost!";
}

// Display the result
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Flip Result</title>
</head>
<body>
    <h2>Coin Flip Result</h2>
    <p><?php echo $result; ?></p>
    <a href="coinFlip.html">Try Again</a>
</body>
</html>
