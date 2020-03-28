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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Add User type</h5>
                                    <div class="card-body">
                                    <?php 
                                        $msg="";
                                        if(isset($_GET['msg']))
                                            $msg=$_GET['msg'];
                                    
                                        if($msg==1)
                                        {
                                            echo  "Only alphabatic characters are allowed";
                                        }
                                        if($msg==2)
                                        {
                                            echo  "Succesfully added";
                                        }
                                        if($msg==3)
                                        {
                                            echo  "user type already exist";
                                        }
                                        if($msg==4)
                                        {
                                            echo  "user type updated succesfully";
                                        }
                                        if($msg==5)
                                        {
                                            echo  "user type deleted succesfully";
                                        }

                                        

                                      if(!isset($_SESSION['error']))
                                                $_SESSION['error']="";
                                                
                                       
                                             print_r($_SESSION['error']);
                                          
                                         unset($_SESSION['error']);

                                        ?>
                                   
                                        <form id="form" data-parsley-validate="" novalidate=" " method="POST"  action="functions/addusertypef.php">
                                        <div class="form-group row">
                                        
                                                <label for="inputPasswor2" class="col-3 col-lg-2 col-form-label text-right">Enter type Name</label>
                                                <div class="col-9 col-lg-10">
                                                    <input id="utype"  name="utype" type="text" required="" placeholder="e.g employee" class="form-control">
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">User Types</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Type ID</th>
                                                <th scope="col">Type Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   
                                                include "functions/database.php";
                                                $sql="select * from user_type";
                                                $data=mysqli_query($conn,$sql);
                                                //echo("Error description: " . mysqli_error($conn));
                                                if($data)
                                                {
                                                    /*show data*/
                                                    while($row=mysqli_fetch_assoc($data))
                                                    {?>
                                            <tr>
                                                        <td><?php echo $row['utype_id'] ?></td>
                                                        <td><?php echo $row['utype']; ?></td>
                                                    <td colspan="9"><a href="updateusertype.php?id=<?php echo $row['utype_id']; ?>" class="btn btn-outline-light">Update</a><a href="functions/deleteusertypef.php?id=<?php echo $row['utype_id']; ?>" class="btn btn-outline-light">Delete</a></td>
                                                </tr>
                                                    <?php }
                                                }
                                                else
                                                    echo "invalid query";
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            </div>
                        
                </div>
                
            </div>
      <!-- ============================================================== -->
      <!-- end wrapper  -->
      <!-- ============================================================== -->
      </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <?php include 'pageparts/footer.html' ?>
 
  </body>
</html>
