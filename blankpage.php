<?php
  include 'functions/logincheckf.php';
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'pageparts/head.html'; ?> 
    <title>homepage</title>
</head>
<body>
<?php include 'pageparts/navbar.html'; ?> 
<div class="flex">
    <div class="main">
    <table class="content-table">
                <thead>
                  <tr>
                    <th>challan no</th>
                    <th>challan Name</th>
                    <th>Due date</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>151351</td>
                    <td>Fee challan</td>
                    <td>jan 26, 2020</td>
                    <td><button><a href="challantable.php">Pay challan</a></button></td>
                  </tr>
                  <tr>
                    <td>151351</td>
                    <td>Id challan</td>
                    <td>jan 26, 2020</td>
                    <td><button><a href="">Pay challan</a></button></td>
                  </tr>
                  <tr>
                    <td>151351</td>
                    <td>DMC challan</td>
                    <td>jan 26, 2020</td>
                    <td><button><a href="">Pay challan</a></button></td>
                  </tr>
                </tbody>
              </table>
          </div>
    </div>
    </div>
</body>
</html>