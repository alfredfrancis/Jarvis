<?php
session_start();
setcookie ("siteAuth", "", time() - 3600); // set the expiration date to one hour ago
session_destroy();
header('Location:index.php');
?>
