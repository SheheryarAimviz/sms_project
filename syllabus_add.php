<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
 <!-- Page wrapper  -->
 <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
       <div class="col-md-5 align-self-center">
          <h3 class="text-primary"><i class="fa icon-syllabus"></i>&nbsp; Syllabus</h3>
       </div>
       <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
             <li class="breadcrumb-item"><a href="section.php">Syllabus</a></li>
             <li class="breadcrumb-item active">Add Syllabus</li>
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
                      <label class="col-lg-2 col-form-label" for="title">Title <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control fullname required" id="title" name="title" >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="description ">Description  <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control fullname required" id="description" name="description" >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="class_id">Class<span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                        <select class="form-control select-search  fullname required" id="class_id" name="class_id">
                          <option disabled selected>Select Class</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="section">File</label>
                      <div class="col-lg-6">
                        <div class="input-group image-preview">
                           <input type="text" class="form-control image-preview-filename" disabled="disabled">
                           <button type="button" class="btn btn-default image-preview-clear hidden">
                             <span class="fa fa-remove"></span>
                             Clear
                           </button>
                           <div class="btn btn-success image-preview-input">
                             <span class="fa fa-repeat"></span>
                             <span class="image-preview-input-title">
                               File Browse
                             </span>
                             <input type="file" class="photo" accept="image/png, image/jpeg, image/gif" name="photo">
                           </div>
                        </div>
                      </div>
                   </div>
                   <div class="form-group row">
                      <div class="col-lg-2 offset-md-2">
                         <button type="submit" class="btn btn-primary btn-width-1">Add Syllabus</button>
                      </div>
                   </div>
                </form>
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
