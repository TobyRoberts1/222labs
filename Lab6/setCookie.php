<?php
// Get the user's name from the form
$user_name = $_POST['name'];

// Set a cookie with the user's name, valid for 1 day
setcookie('Uname', $user_name, time() + 86400, '/');

// Redirect to the page that displays the cookie value
header('Location: displayCookie.php');
exit();
?>
