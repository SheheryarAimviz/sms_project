<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
 <!-- Page wrapper  -->
 <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
       <div class="col-md-5 align-self-center">
          <h3 class="text-primary"><i class="fa fa-star"></i>&nbsp; Section</h3>
       </div>
       <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
             <li class="breadcrumb-item"><a href="section.php">Section</a></li>
             <li class="breadcrumb-item active">Add Section</li>
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
              <div class="form-validation">
                <form class="eduinsto-validation-form" action="#" method="post">
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="section">Section <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control fullname required" id="section" name="section" >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="category">Category <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control fullname required" id="category" name="category" >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="capacity">Capacity <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control fullname required" id="capacity" name="capacity" >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="class_id">Class Name<span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control select-search  fullname required" id="class_id" name="class_id">
                          <option disabled selected>Select Class</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                     <label class="col-lg-2 col-form-label" for="user_id">Teacher Name <span class="text-danger">*</span></label>
                     <div class="col-lg-6">
                       <select class="form-control select-search  fullname required" id="user_id" name="user_id">
                         <option disabled selected>Select Teacher</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                       </select>
                     </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="note">Note</label>
                      <div class="col-lg-6">
                        <textarea class="form-control" id="note" name="note" rows="3" cols="80"></textarea>
                      </div>
                   </div>
                   <div class="form-group row">
                      <div class="col-lg-2 offset-md-2">
                         <button type="submit" class="btn btn-primary btn-width-1">Add Section</button>
                      </div>
                   </div>
                </form>
                <div class="callout callout-danger">
                    <p><b>Note:</b> Create a class and teacher before create a new section</p>
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
