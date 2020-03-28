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
                                    <h5 class="card-header">Add Department</h5>
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
                                            echo  "already exist";
                                        }
                                        if($msg==4)
                                        {
                                            echo  "updated succesfully";
                                        }
                                        if($msg==5)
                                        {
                                            echo  "deleted succesfully";
                                        }

                                        

                                      if(!isset($_SESSION['error']))
                                                $_SESSION['error']="";
                                                
                                       
                                             print_r($_SESSION['error']);
                                          
                                         unset($_SESSION['error']);

                                        ?>
                                        

                                        <?php 
                                                include "functions/database.php";
                                                $id="";
                                                if(isset($_GET['id']))
                                                {
                                                    $id=$_GET['id'];
                                            
                                                    $sql="select * from dept where  dept_id='$id'";
                                                    $data=mysqli_query($conn,$sql);
                                                    $row=mysqli_fetch_assoc($data);
                                                    //echo("Error description: " . mysqli_error($conn));
                                                ?>
                                                    <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/updatedeptf.php?id=<?php echo $row['dept_id']; ?>">
                                                    <div class="form-group row">

                                                    <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Department Name</label>


                                                     <div class="col-9 col-lg-10">
                                                    <input id="dep_name"  name="dep_name" type="text" required="" value="<?php echo $row['dep_name']; ?>" class="form-control">
                                                    </div>


                                               <?php 
                                               }
                                               else{?>

                                                <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/adddeptf.php">
                                                <div class="form-group row">

                                                <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Department Name</label>
                                                    
                                                <div class="col-9 col-lg-10">
                                                    <input id=""  name="dep_name" type="text" required="" placeholder="eg CS&IT" class="form-control">
                                                    </div>
                                                    </div>

                                                <?php
                                            }
                                            ?>
                                               
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Departments</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Department ID</th>
                                                <th scope="col">Department Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   
                                                include "functions/database.php";
                                                $sql="select * from dept";
                                                $data=mysqli_query($conn,$sql);
                                                //echo("Error description: " . mysqli_error($conn));
                                                if($data)
                                                {
                                                    /*show data*/
                                                    while($row=mysqli_fetch_assoc($data))
                                                    {?>
                                            <tr>
                                                        <td><?php echo $row['dept_id'] ?></td>
                                                        <td><?php echo $row['dep_name']; ?></td>
                                                    <td colspan="9"><a href="department.php?id=<?php echo $row['dept_id']; ?>" class="btn btn-outline-light">Update</a><a href="functions/deletedeptf.php?id=<?php echo $row['dept_id']; ?>" class="btn btn-outline-light">Delete</a></td>
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
