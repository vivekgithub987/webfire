<?php
require_once 'includes/auth.class.php';

$auth = new Auth($db);
$auth->logout();

header("Location: login.php");
exit;
?>
