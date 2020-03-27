<?php
  include 'functions/logincheckf.php';
?>
<!DOCTYPE html>
<html>
<head>
<?php include 'pageparts/head.html'; ?> 
    <title>Challan</title>
</head>
<?php include 'pageparts/navbar.html'; ?> 
      <div class="main">
        <div class="profile-details">
            <h2>Enter Challan Detail:</h2>
            <div class="challan">
                <form action="" method="post">
                    <label for="Due date">Due date:</label>
                    <input type="text" placeholder="26 jan,2020">
                    <div class="accounts">
                        <label for="Challan A/c">Challan A/c:</label>
                        <select>
                            <option value="volvo">ID CHALLAN</option>
                            <option value="saab">ID CHALLAN</option>
                            <option value="opel">ID CHALLAN</option>
                            <option value="audi">ID CHALLAN</option>
                          </select>
                          <label for="Amount">Amount:</label>
                        <input type="text" >
                        <button>Add More</button>
                        <button>Delete</button>
                    </div>
                    <button style="float: right"><a href="">Generate</a></button>
                </form>
            </div>
            
        </div>  
      </div>
      

</body>
</html>