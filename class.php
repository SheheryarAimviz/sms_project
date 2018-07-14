<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
 <!-- Page wrapper  -->
 <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
       <div class="col-md-5 align-self-center">
          <h3 class="text-primary">
            <i class="fa fa-sitemap"></i>&nbsp; Class
          </h3>
       </div>
       <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
             <li class="breadcrumb-item active">Class</li>
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
                     <a href="class_add.php"> <i class="fa fa-plus"></i>&nbsp; Add a class</a>
                   </h4>
                 </div>
               </div>
               <div class="table-responsive m-t-20">
                   <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                     <thead>
                       <tr>
                         <th>#</th>
                         <th>Class</th>
                         <th>Class Numeric</th>
                         <th>Teacher Name</th>
                         <th>Note</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>1</td>
                         <td>One</td>
                         <td>001</td>
                         <td>Dipok Kumar Halder</td>
                         <td></td>
                         <td data-title="Action">
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
                         <td>Two</td>
                         <td>002</td>
                         <td>Dipok Kumar Halder</td>
                         <td></td>
                         <td data-title="Action">
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
                         <td>Three</td>
                         <td>003</td>
                         <td>Dipok Kumar Halder</td>
                         <td></td>
                         <td data-title="Action">
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
