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
                                    <h5 class="card-header">Add Degree</h5>
                                    <div class="card-body">
                                        <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/addempf.php">
                                        <div class="form-group row">
                                                <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Degree id</label>
                                                <div class="col-9 col-lg-10">
                                                    <input id=""  name="email" type="text" required="" placeholder="Example BCS" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Degree name</label>
                                                <div class="col-9 col-lg-10">
                                                    <input id=""  name="email" type="text" required="" placeholder="" class="form-control">
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">User Types</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Degree ID</th>
                                                <th scope="col">Degree Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   
                                                include "functions/database.php";
                                                $sql="select * from degree";
                                                $data=mysqli_query($conn,$sql);
                                                //echo("Error description: " . mysqli_error($conn));
                                                if($data)
                                                {
                                                    /*show data*/
                                                    while($row=mysqli_fetch_assoc($data))
                                                    {?>
                                            <tr>
                                                        <td><?php echo $row['degree_id'] ?></td>
                                                        <td><?php echo $row['degree_name']; ?></td>
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
