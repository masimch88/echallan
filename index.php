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
      <div class="main">
          <h1>Welcome to MUST ECHALLAN Portal</h1>
          <div class="challan-button">
            <h2>Generate a new challan</h2>
            <button><a href="generatechllan.php">Generate Challan</a></button>
          </div>
          <div class="challan-detail">
            <h2>Pending Challans:</h2>
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
          <div class="challan-detail">
            <h2>Challan History:</h2>
            <table class="content-table">
                <thead>
                  <tr>
                    <th>challan no</th>
                    <th>challan Name</th>
                    <th>Paid on date</th>
                    <th>Application Status</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>151351</td>
                    <td>Fee challan</td>
                    <td>jan 26, 2020</td>
                    <td>Pending</td>
                    <td><button><a href="challantable.php">View challan</a></button></td>
                  </tr>
                  <tr>
                    <td>151351</td>
                    <td>Id challan</td>
                    <td>jan 26, 2020</td>
                    <th>Process</th>
                    <td><button><a href="">View challan</a></button></td>
                  </tr>
                  <tr>
                    <td>151351</td>
                    <td>DMC challan</td>
                    <td>jan 26, 2020</td>
                    <td>Complete</td>
                    <td><button><a href="">View challan</a></button></td>
                  </tr>
                </tbody>
              </table>
          </div>
      </div>
    
</body>
</html>