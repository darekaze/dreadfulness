<?php
// Connects to your Database
require_once '_route.php';

// if not logged redirect to the sign in page
if(array_key_exists('is_logged', $_SESSION) > 1) {
    header('Location: userLogin.php');
    exit;
}

$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Food Station</title>
</head>
<body>
    <h1>Food Station</h1>
<?php 
if(array_key_exists('is_logged', $_SESSION) === FALSE) { ?>
    <p><a href="userLogin.php">Login</a></p>
<?php 
} else { ?>
    <p>Welcome back, <strong><?= $username; ?></strong> ! | <a href="userLogout.php">Log out</a></p>
<?php 
} ?>
    <h2>Items</h2>


</body>
</html>