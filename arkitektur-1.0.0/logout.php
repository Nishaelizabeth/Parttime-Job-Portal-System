<?php
 session_start();
 unset($_SESSION['usern']);
 header("location:login.php");
 exit;
?>