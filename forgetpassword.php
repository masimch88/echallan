<?php
  include 'functions/logincheckf.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'pageparts/head.html'; ?> 
    <title>emplogin</title>
  </head>
  <body>
    <nav>
      <div class="logo">
          <img src="resources/css/img/logo.png" alt="logo" />
          <h1>MUST ECHALLAN</h1>
      </div>
  </nav>
    <div class="logincontainer">
      <h1>Forget password</h1>
      <form action="index.html">
        <label for="Email">Enter Email</label>
        <input type="email" id="email" name="email" />
        <button><a href="varification.php">Submit</a></button>
      </form>
    </div>
  </body>
</html>
