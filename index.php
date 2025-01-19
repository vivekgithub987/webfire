<?php
require_once 'includes/auth.class.php';

$auth = new Auth($db);

if (!$auth->isLoggedIn()) {
    header("Location: login.php");
    exit;
}

echo "Welcome, User #" . $auth->getUserID();
?>
<a href="logout.php">Logout</a>
