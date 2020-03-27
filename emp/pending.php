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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Employee List</h5>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                      <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                          <div class="dt-buttons">          
                                              <button class="btn btn-outline-light buttons-copy buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Copy</span>
                                              </button> 
                                              <button class="btn btn-outline-light buttons-excel buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Excel</span>
                                              </button>
                                              <button class="btn btn-outline-light buttons-pdf buttons-html5" tabindex="0" aria-controls="example" type="button"><span>PDF</span>
                                              </button>
                                              <button class="btn btn-outline-light buttons-print" tabindex="0" aria-controls="example" type="button"><span>Print</span>
                                                </button>
                                                <button class="btn btn-outline-light buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example" type="button" aria-haspopup="true"><span>Column visibility</span>
                                                </button>
                                         </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                          <div id="example_filter" class="dataTables_filter">
                                            <label>Search:
                                              <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12">
                                            <table id="example" class="table table-striped table-bordered second dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row">
                                              <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" ara-label="Name: activate to sort column descending" style="width: 86px;">
                                                Emp_id
                                              </th>
                                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 143px;">
                                                Email
                                              </th>
                                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">
                                                Password
                                              </th>
                                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26px;">
                                                Name
                                              </th>
                                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 53px;">
                                                User Type
                                              </th>
                                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 51px;">
                                                Department
                                              </th>
                                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 51px;">
                                                Action
                                              </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   
                                      include "functions/database.php";
                                      $sql="select * from user, dept, employee, user_type where employee.emp_id=user.user_id AND
                                      user_type.utype_id=user.utype_id";
                                      $data=mysqli_query($conn,$sql);
                                      //echo("Error description: " . mysqli_error($conn));
                                      if($data)
                                      {
                                          /*show data*/
                                          while($row=mysqli_fetch_assoc($data))
                                          {?>
                                  <tr>
                                              <td><?php echo $row['user_id'] ?></td>
                                              <td><?php echo $row['uemail']; ?></td>
                                              <td><?php echo $row['upassword']; ?></td>
                                              <td><?php echo $row['uname']; ?></td>
                                            <td><?php echo $row['utype']; ?></td>
                                            <td><?php echo $row['dep_name']; ?></td>
                                          <td colspan="9"><a href="updateemp.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Update</a><a href="functions/deletef.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-light">Delete</a></td>
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
                                <div class="row">
                                  <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                  <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                    <ul class="pagination">
                                      <li class="paginate_button page-item previous disabled" id="example_previous">
                                        <a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                      </li>
                                      <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                      </li>
                                      <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                      </li>
                                      <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3
                                        </a>
                                      </li>
                                      <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                      </li>
                                      <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                      </li>
                                      <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                      </li>
                                      <li class="paginate_button page-item next" id="example_next">
                                        <a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                                
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
