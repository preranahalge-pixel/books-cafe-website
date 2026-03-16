<?php
session_start();
session_destroy();
header("Location: /cafe-website/user/user_auth.php");
exit();
?>