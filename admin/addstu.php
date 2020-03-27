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
            <?php 
            $msg=" ";
            if(isset($_GET['msg']))
                $msg=$_GET['msg'];
            if($msg==1)
            {
                echo "successfully updated";
            }
            if($msg==2)
            {
                echo "Update Unsuccessfully !! Try Again";
            }
            
        ?>
                       <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Employee</h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/addempf.php">
                                     <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">E-mail</label>
                                            <div class="col-9 col-lg-10">
                                                <input id=""  name="email" type="email" required="" placeholder="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputPassword2"  name="password" type="password" required="" data-parsley-type="email" placeholder="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Name</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="name" type="text"  name="name" required="" data-parsley-type="url" placeholder="name" class="form-control">
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


                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Session</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="emp_post" type="text"  name="emp_post" required="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Degree</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="emp_post" type="text"  name="emp_post" required="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Roll NO</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="emp_post" type="text"  name="emp_post" required="" class="form-control">
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