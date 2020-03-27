<?php
  include 'functions/logincheckf.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'pageparts/head.html'; ?>
    <title>Profile</title>
  </head>
  <body>
    <?php include 'pageparts/navbar.html'; ?> 
    <div class="main">
      <div class="profile-details">
        <h2>Proflie Details:</h2>
        <div class="profile-container">
          <div class="details">
            <form action="" method="post">
              <label for="name:">name: </label>
              <input type="text" placeholder="Asim Mehood" />
              <label for="Session:">Session:</label>
              <input type="text" placeholder="FA17" />
              <label for="Degree:">Degree:</label>
              <input type="text" placeholder="BCS" />
              <label for="Roll No:">Roll No:</label>
              <input type="text" placeholder="FA17-BCS-003" />
              <label for="Password:">Password:</label>
              <input type="password" placeholder="*******" />
              <label for="Bank A/C No:">Bank A/C No:</label>
              <input type="text" placeholder="0199151353513513513" />
              <label for="Bank name:">Bank name:</label>
              <input type="text" placeholder="HBL" />
              <label for="Credit/Debit card No:">Credit/Debit card No:</label>
              <input type="text" placeholder="01351135135135" />
              <label for="Expiry date:">Expiry date:</label>
              <input type="text" placeholder="18 june, 2022" />
              <label for="Cvv:">Cvv:</label>
              <input type="text" placeholder="162" />
            </form>
            <button>Update Profile</button>
          </div>
          <div class="profile-pic">
            <img src="resources/css/img/pp.jpg" alt="" />
            <button>change image</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
