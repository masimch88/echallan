<?php
  session_start();
  if(!isset($_SESSION['stu_id']))
  {
      header("location:login.php");
      exit();
  }
?>