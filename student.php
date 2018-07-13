<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
 <!-- Page wrapper  -->
 <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
       <div class="col-md-5 align-self-center">
          <h3 class="text-primary"><i class="fa icon-student"></i>&nbsp; Student</h3>
       </div>
       <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
             <li class="breadcrumb-item active">Student</li>
          </ol>
       </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
       <!-- Start Page Content -->
       <div class="row bg-white box-shadow ">
          <div class="col-lg-12">
             <div class="card">
               <div class="row">
                 <div class="col-md-4">
                   <h4 class="card-title eduinsto-card-title">
                     <a href="student_add.php"> <i class="fa fa-plus"></i>&nbsp; Add a student</a>
                   </h4>
                 </div>
                 <div class="col-md-4 offset-md-4">
                   <div class="form-group">
                     <label>Select with search</label>
                     <select class="select-search">
                       <option disabled selected>Select Class</option>
                       <option>One</option>
                       <option>Two</option>
                       <option>Three</option>
                       <option>Four</option>
                     </select>
                   </div>
                 </div>
               </div>

               <ul class="nav nav-tabs customtab2  m-t-20" role="tablist">
                   <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#all-data" role="tab">
                       <span class="hidden-sm-up"><i class="ti-home"></i></span>
                       <span class="hidden-xs-down">All Student</span>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#section1" role="tab">
                       <span class="hidden-sm-up"><i class="ti-user"></i></span>
                       <span class="hidden-xs-down">Section A (Best)</span>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#section2" role="tab">
                       <span class="hidden-sm-up"><i class="ti-email"></i></span>
                       <span class="hidden-xs-down">Section B (Better)</span>
                     </a>
                   </li>
               </ul>
               <div class="tab-content">
                 <div class="tab-pane active" id="all-data" role="tabpanel">
                   <div class="table-responsive m-t-20">
                     <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                       <thead>
                         <tr>
                           <th>#</th>
                           <th>Photo</th>
                           <th>Name</th>
                           <th>Roll</th>
                           <th>Email</th>
                           <th>Status</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>1</td>
                           <td>
                             <img src="images/user-icon/people.png" width="35px" height="35px" class="img-rounded" alt="">
                           </td>
                           <td>Mr. Travis Deckow V</td>
                           <td>1</td>
                           <td>corkery.martin@hotmail.com</td>
                           <td>
                             <div class="checkbox text-center">
                              <label>
                                <input type="checkbox" data-toggle="toggle">
                              </label>
                             </div>
                           </td>
                           <td data-title="Action">
                            <a href="student_view.php" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View">
                              <i class="fa fa-check-square-o fa-lg"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                              <i class="fa fa-edit fa-lg"></i>
                            </a>
                            <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                              <i class="fa fa-trash-o fa-lg"></i>
                            </a>
                           </td>
                         </tr>
                         <tr>
                           <td>2</td>
                           <td>
                             <img src="images/user-icon/people.png" width="35px" height="35px" class="img-rounded" alt="">
                           </td>
                           <td>Mr. Travis Deckow V</td>
                           <td>1</td>
                           <td>corkery.martin@hotmail.com</td>
                           <td>
                             <div class="checkbox text-center">
                               <label>
                                 <input type="checkbox" data-toggle="toggle">
                               </label>
                             </div>
                           </td>
                           <td data-title="Action">
                            <a href="student_view.php" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View">
                              <i class="fa fa-check-square-o fa-lg"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                              <i class="fa fa-edit fa-lg"></i>
                            </a>
                            <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                              <i class="fa fa-trash-o fa-lg"></i>
                            </a>
                           </td>
                         </tr>
                         <tr>
                           <td>3</td>
                           <td>
                             <img src="images/user-icon/people.png" width="35px" height="35px" class="img-rounded" alt="">
                           </td>
                           <td>Mr. Travis Deckow V</td>
                           <td>1</td>
                           <td>corkery.martin@hotmail.com</td>
                           <td>
                             <div class="checkbox text-center">
                              <label>
                                <input type="checkbox" data-toggle="toggle">
                              </label>
                             </div>
                           </td>
                           <td data-title="Action">
                            <a href="student_view.php" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View">
                              <i class="fa fa-check-square-o fa-lg"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                              <i class="fa fa-edit fa-lg"></i>
                            </a>
                            <a href="#" onclick="return confirm('you are about to delete a record. This cannot be undone. are you sure?')" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                              <i class="fa fa-trash-o fa-lg"></i>
                            </a>
                           </td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                 </div>
                 <div class="tab-pane" id="section1" role="tabpanel">
                 </div>
                 <div class="tab-pane" id="section2" role="tabpanel">
                 </div>
               </div>
             </div>
          </div>
       </div>
       <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    <footer class="footer"> © 2018 All rights reserved.Create by <a href="#">eduinsto</a></footer>
    <!-- End footer -->
 </div>
 <!-- End Page wrapper  -->
<?php include 'footer.php'; ?>
