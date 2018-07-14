<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
 <!-- Page wrapper  -->
 <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
       <div class="col-md-5 align-self-center">
          <h3 class="text-primary">
            <i class="fa fa-book"></i>&nbsp; Subject
          </h3>
       </div>
       <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
             <li class="breadcrumb-item active">Subject</li>
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
                     <a href="subject_add.php"> <i class="fa fa-plus"></i>&nbsp; Add a subject</a>
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
               <div class="table-responsive m-t-20">
                   <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                     <thead>
                       <tr>
                         <th>#</th>
                         <th>Subject</th>
                         <th>Author</th>
                         <th>Code</th>
                         <th>Teacher</th>
                         <th>Pass Mark</th>
                         <th>Final Mark</th>
                         <th>Type</th>
                         <th>Action</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>1</td>
                         <td>English</td>
                         <td>Hossain Mir</td>
                         <td>ENG001</td>
                         <td>Dipok Kumar Halder</td>
                         <td>40</td>
                         <td>100</td>
                         <td>
                           <span class="badge badge-warning">Optional</span>
                         </td>
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
                         <td>English</td>
                         <td>Hossain Mir</td>
                         <td>ENG001</td>
                         <td>Dipok Kumar Halder</td>
                         <td>40</td>
                         <td>100</td>
                         <td>
                           <span class="badge badge-success">Mandatory</span>
                         </td>
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
