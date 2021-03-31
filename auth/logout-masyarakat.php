<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: login-masyarakat.php");
exit;
?>