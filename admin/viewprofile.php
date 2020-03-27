<?php
  include '../functions/logincheckf.php';
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
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="functions/<?php echo $_SESSION['img']; ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0">Michael J. Christy</h2>
                                        <p>Project Manager @Influnce</p>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16" style="margin: 1%  0 1% 45%">Proflie Information</h3>
                                    <div class="flex-row">
                                        <ul class="">
                                            <li class="mb-2">NAME: Asim Mehmood</li>
                                            <li class="mb-0">EMAIL: michaelchristy@gmail.com</li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-0">DEPARTMENT: CS&IT</li>
                                            <li class="mb-0">PASSWORD: *****</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                </div>
               <!--<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="card">
                                <h5 class="card-header">Bank Info</h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/addempf.php">
                                     <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Bank Name</label>
                                            <div class="col-9 col-lg-10">
                                                <input id=""  name="email" type="email" required="" placeholder="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">A/C No</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputPassword2"  name="password" type="password" required="" data-parsley-type="email" placeholder="password" class="form-control">
                                            </div>
                                        </div>
                                        
                                       
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Update</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="card">
                                <h5 class="card-header">Debit/Credit Card Info</h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/addempf.php">
                                     <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Card no</label>
                                            <div class="col-9 col-lg-10">
                                                <input id=""  name="email" type="email" required="" placeholder="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Name on Card</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputPassword2"  name="password" type="password" required="" data-parsley-type="email" placeholder="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">CVV</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="name" type="text"  name="name" required="" data-parsley-type="url" placeholder="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Expiry Date</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="name" type="text"  name="name" required="" data-parsley-type="url" placeholder="name" class="form-control">
                                            </div>
                                        </div>
                                       
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                <button type="submit" class="btn btn-space btn-primary">Update</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>-->
                <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Change password</h5>
                                <div class="card-body">
                                    <form id="form" data-parsley-validate="" novalidate=" " method="post"  action="functions/addempf.php">
                                     <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Current Password</label>
                                            <div class="col-9 col-lg-10">
                                                <input id=""  name="email" type="email" required="" placeholder="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">New Password</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="inputPassword2"  name="password" type="password" required="" data-parsley-type="email" placeholder="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Confirm Password</label>
                                            <div class="col-9 col-lg-10">
                                                <input id="name" type="text"  name="name" required="" data-parsley-type="url" placeholder="name" class="form-control">
                                            </div>
                                        </div>
                                       
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                <button type="submit" class="btn btn-space btn-primary">Update</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Update Profile Image</h5>
                                <div class="card-body">
                                    <form data-parsley-validate="" novalidate=" " method="POST"  action="functions/upimg.php"  enctype="multipart/form-data">
                                     
                                    <input type="file" name="image" id="image" class="btn btn-space btn-primary" >
                                    <input type="submit" value="Upload Image" name="submit" class="btn btn-space btn-primary">
                                    </form>
                                    
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
