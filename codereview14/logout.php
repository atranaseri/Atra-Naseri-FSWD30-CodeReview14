<?php
 session_start();
 if (isset($_GET['logout'])) {
  unset($_SESSION['_user_id']);
  unset($_SESSION['user_email']);
  unset($_SESSION['userpass']);
  session_unset();
  session_destroy();
  
   header('Location: admin.php');
 }
 ?>