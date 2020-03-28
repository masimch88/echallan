<?php
  include 'functions/loginadmf.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include 'pageparts/head.html' ?>
    <title>Admin</title>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      <!-- ============================================================== -->
      <!-- navbar -->
      <!-- ============================================================== -->
      <?php include 'pageparts/navbar.html' ?>
      <!-- ============================================================== -->
      <!-- end navbar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- left sidebar -->
      <!-- ============================================================== -->
      <?php include 'pageparts/sidebar.html' ?>
      <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                       <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Update Employee</h5>
                                <?php 
                                include "functions/database.php";
                                $id=$_GET['id'];
                                
                                $sql="select * from employee,user where   employee.emp_id='$id' AND user.user_id='$id'";
                                $data=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($data);
                                //echo("Error description: " . mysqli_error($conn));
                                ?>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" novalidate=" " method="post" action="functions/updatef.php?id=<?php echo $id; ?>">
                                     <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">E-mail</label>
                                            <div class="col-9 col-lg-10">
                                                <input id=""  name="email" type="email" required="" placeholder="email" class="form-control" value="<?php echo $row['uemail']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputPassword2"  name="password" type="text" required="" data-parsley-type="email" placeholder="password" class="form-control" value="<?php echo $row['upassword']; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Name</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="name" type="text"  name="name" required="" data-parsley-type="url" placeholder="name" class="form-control"    value="<?php echo $row['uname']; ?>">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">User type</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="utype" type="text"  name="utype" required="" class="form-control"  value="<?php echo $row['utype_id']; ?>">
                                            </div>
                                        </div>
                                                                                
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Employee Post</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="emp_post" type="text"  name="emp_post" required="" 
                                                class="form-control"  value="<?php echo $row['emp_post']; ?>">
                                            </div>
                                        </div>
                                                                                
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Department</label>
                                            <div class="col-9 col-lg-10">
                                            <select class="form-control" name="dept" id="dept">
                                                    <?php 
                                                    include 'functions/database.php';
                                                    $sql="SELECT  * FROM dept";
                                                     $data=mysqli_query($conn,$sql);
                                                    
                                                        /*show data*/
                                                            while($row=mysqli_fetch_assoc($data))
                                                            {
                                                    ?>
                                                    
                                                    <option value="<?php echo $row['dept_id']; ?>"><?php echo $row['dep_name']; ?></option>
                                                    <?php }
                                                        
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                 </div>
            </div>
            <?php include 'pageparts/footer.html' ?>
</body>
</html>