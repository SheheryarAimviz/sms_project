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
             <li class="breadcrumb-item"><a href="student.php">Student</a></li>
             <li class="breadcrumb-item active">Add Student</li>
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
                      <label class="col-lg-2 col-form-label" for="name">Name <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control fullname required" id="name" name="name" >
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="guardian">Guardian</label>
                      <div class="col-lg-4">
                        <select class="select-search form-control">
                          <option disabled selected>Select Guardian</option>
                          <option>One</option>
                          <option>Two</option>
                          <option>Three</option>
                          <option>Four</option>
                        </select>
                      </div>
                      <div class="col-lg-2">
                          <span class="input-group-addon btn btn-success eduinsto-btn">
                            <a href="https://demo.inilabs.net/school/v3.5/classes/add" target="_blank" class="text-white">
                              <i class="fa fa-plus"></i> Quick Add
                            </a>
                          </span>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="date">Date of Birth</label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control eduinsto-data-picker" id="date" name="date">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="gender">Gender</label>
                      <div class="col-lg-6">
                        <select class="form-control select-search" id="gender" name="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="blood_group">Blood Group</label>
                      <div class="col-lg-6">
                        <select class="select-search form-control" name="blood_group" id="blood_group">
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="religion">Religion</label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control" id="religion" name="religion">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                         <input type="email" class="form-control email required" id="email" name="email">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="phone">Phone</label>
                      <div class="col-lg-6">
                         <input type="phone" class="form-control" id="phone" name="phone">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="address">Address</label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control" id="address" name="address">
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="country">Country</label>
                      <div class="col-lg-6">
                        <select class="select-search form-control" name="country" id="country">
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="state">State</label>
                      <div class="col-lg-6">
                        <select class="select-search form-control" name="state" id="state">
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="city">City</label>
                      <div class="col-lg-6">
                        <select class="select-search form-control" name="city" id="city">
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="class">Class <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                        <select class="select-search form-control" name="class" id="classs">
                          <option disabled selected>Select Class</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="section">Section <span class="text-danger">*</span></label>
                      <div class="col-lg-6">
                        <select class="select-search form-control" name="section" id="section">
                          <option disabled selected>Select Select</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                   </div>
                   <div class="form-group row">
                      <label class="col-lg-2 col-form-label" for="section">Photo</label>
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
                      <label class="col-lg-2 col-form-label" for="extra_curricular_activities">Extra Curricular Activities</label>
                      <div class="col-lg-6">
                         <input type="text" class="form-control" id="extra_curricular_activities" name="extra_curricular_activities">
                      </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-lg-2 col-form-label" for="remark">Remarks</label>
                       <div class="col-lg-6">
                          <textarea rows="4" class="form-control" id="remark" name="remark"></textarea>
                       </div>
                     </div>
                   <div class="form-group row">
                      <div class="col-lg-2 offset-md-2">
                         <button type="submit" class="btn btn-primary btn-width-1">Add Student</button>
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
