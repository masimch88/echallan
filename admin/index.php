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
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">ECHALLAN SUMMERY </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">SUMMERY</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Challans</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Challan NO#</th>
                                                        <th class="border-0">Date and TIME</th>
                                                        <th class="border-0">Student Name</th>
                                                        <th class="border-0">Payment Mehthod</th>
                                                        <th class="border-0">challan Status</th>
                                                        <th class="border-0">Application Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                        27-08-2018 01:22:12
                                                        </td>
                                                        <td>Asim Mehmood</td>
                                                        <td>Bank Transfer</td>
                                                        
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                    <td> 1</td>
                                                        <td>
                                                        27-08-2018 01:22:12
                                                        </td>
                                                        <td>Asim Mehmood</td>
                                                        <td>Bank Transfer</td>
                                                        
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                    <td> 1</td>
                                                        <td>
                                                        27-08-2018 01:22:12
                                                        </td>
                                                        <td>Asim Mehmood</td>
                                                        <td>Bank Transfer</td>
                                                        
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                    <td> 1</td>
                                                        <td>
                                                        27-08-2018 01:22:12
                                                        </td>
                                                        <td>Asim Mehmood</td>
                                                        <td>Bank Transfer</td>
                                                        
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            

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
