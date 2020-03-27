<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'pageparts/head.html'; ?> 
    <title>Change passwor</title>
  </head>
  <body>
    <nav>
      <div class="logo">
          <img src="resources/css/img/logo.png" alt="logo" />
          <h1>MUST ECHALLAN</h1>
      </div>
  </nav>
    <div class="logincontainer">
      <h1>Change password</h1>
      <form action="index.html">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" />
        <label for="cpassword">Confirm password</label>
        <input type="password" id="cpassword" name="cpassword" />
        <button><a href="login.php">Submit</a></button>
      </form>
    </div>
  </body>
</html>