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
                                    <h5 class="card-header">Add challan A/C</h5>
                                    <div class="card-body">
                                        <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/addempf.php">
                                        <div class="form-group row">
                                                <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Account Name</label>
                                                <div class="col-9 col-lg-10">
                                                    <input id=""  name="email" type="text" required="" placeholder="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Account Amount</label>
                                                <div class="col-9 col-lg-10">
                                                    <input id="inputPassword2"  name="password" type="text" required="" data-parsley-type="email" placeholder="password" class="form-control">
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
                                <h5 class="card-header">challan A/C</h5>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">A/C ID</th>
                                                <th scope="col">Acount Name</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td >1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="updateemp.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Update</a>
                                                    <a href="functions/deletef.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Delete</a>
                                                </td>
                                      </tr>
                                            </tr>
                                            <tr>
                                            <td >1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="updateemp.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Update</a>
                                                    <a href="functions/deletef.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td >1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="updateemp.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Update</a>
                                                    <a href="functions/deletef.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Delete</a>
                                                </td>
                                            </tr>
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
