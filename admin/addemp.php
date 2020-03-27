<?php session_start(); ?>
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
                                <h5 class="card-header">Add Employee</h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/addempf.php" onsubmit="return validation()">
                                    
            
                                       <?php 
                                            $msg=" ";
                                            if(isset($_GET['msg']))
                                                $msg=$_GET['msg'];
                                            if($msg==1)
                                            {
                                                echo "successfully Added";
                                            }
                                            if($msg==2)
                                            {
                                                
                                                echo "Some Fields are empty";
                                                if(!isset($_SESSION['error']))
                                                    $_SESSION['error']="";
                                                 //echo $_SESSION['test'];
                                                 //$_SESSION['error1'];
                                                $a=$_SESSION['error'];
                                            print_r($_SESSION['error']);
                                               // unset($_SESSION['error1']);
                                            }
                                            if($msg==3)
                                            {
                                                echo "invalid email";
                                            }
                                            if($msg==4)
                                            {
                                                echo "invalid name";
                                            }
                                            if($msg==5)
                                            {
                                                echo "invalid Post";
                                            }
                                            if($msg==6)
                                            {
                                                echo "invalid dept";
                                            }
                                            if($msg==7)
                                            {
                                                echo "invalid password";
                                            }
                                            
                                        ?>
                                     <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">E-mail</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="email"  name="email" type="email" required="" placeholder="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="password"  name="password" type="password" required="" data-parsley-type="email" placeholder="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Name</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="name" type="text"  name="name" required="" data-parsley-type="url" placeholder="name" class="form-control">
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Employee Post</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="emp_post" type="text"  name="emp_post" required="" class="form-control">
                                            </div>
                                        </div>

                                        <!--<div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Employee Post</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="img" type="file"  name="img" required="" >
                                            </div>
                                        </div>-->                              
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
                                                <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-space btn-primary">
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