<?php
  session_start();
  if(!isset($_SESSION['emplyee_id']))
  {
      header("location:../login.php");
      exit();
  }
?>