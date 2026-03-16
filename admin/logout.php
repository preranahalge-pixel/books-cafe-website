<?php
session_start();
session_destroy();
header("Location: /cafe-website/admin/admin_login.php");
?>