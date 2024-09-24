<?php
// checks if the cookie is set
if (isset($_COOKIE['Uname'])) {
    $user_name = $_COOKIE['Uname'];
} else {
    $user_name = "Guest";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome</h2>
    <p>Hello, <?php echo htmlspecialchars($user_name); ?>!</p>
</body>
</html>
