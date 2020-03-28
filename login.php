<?php 
  session_start();
  if(isset($_SESSION['stu_id']))
  {
      header("location:index.php");
      exit();
  }
  if(isset($_SESSION['admin_id']))
  {
      header("location:admin/index.php");
      exit();
  }
  if(isset($_SESSION['employee_id']))
  {
      header("location:emp/index.php");
      exit();
      //eeeeeeeeeeeee
  }
 



?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'pageparts/head.html'; ?> 
    <title>login</title>
  </head>
  <body>
      <nav>
        <div class="logo">
            <img src="resources/css/img/logo.png" alt="logo" />
            <h1>MUST ECHALLAN</h1>
        </div>
    </nav>
    <main>
      <div class="info">
        <div class="container">
          <h2>WELCOME TO MUST ECHALLAN PORTAL</h2>
          <h3>3 Simple Steps to do it</h3>
          
          <div class="icons">
            <i class="ion-log-in icon-big"></i>
            <i class="ion-ios-keypad icon-big"></i>
            <i class="ion-cash icon-big"></i>
          </div>
          <div class="steps">
            <h4>1</h4>
            <h5>LOGIN the <br />Account</h5>
            <h4>2</h4>
            <h5>Fill the <br />challan</h5>
            <h4>3</h4>
            <h5>Pay the <br />challan</h5>
          </div>
          <div class="container-logo">
            <img src="resources/css/img/logo.png" alt="logo" />
            <h1>MUST ECHALLAN</h1>
          </div>
        </div>
      </div>
      <div class="login">
        <h2>Login here</h2>
        <?php 
         
          if(!isset($_SESSION['error']))
            $_SESSION['error']="";
          $a=$_SESSION['error'];
          print_r($a);

          unset($_SESSION['error']);
        ?>
        <form action="functions/loginf.php" method="POST" >
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" />
          <label for="password">Password</label>
          <input type="password" id="password" name="password" />
          <input type="submit" name="submit" id="submit" value="log in" >
          <button ><a href="forgetpassword.php">Forget Password</a></button>
          
        </form>
      </div>
    </main>
  </body>
</html> 
