<!--Action PHP-->
<?php 
	if(isset($_POST['addStudent'])){
        
	$registrationID=$_POST['registrationID'];
	$admissionDatee=$_POST['admissionDate'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $class=$_POST['class'];
    $shift=$_POST['shift'];
    $section=$_POST['section'];
    $rollNo=$_POST['rollNo'];
    $fatherName=$_POST['fatherName'];
    $motherName=$_POST['motherName'];
    $gender=$_POST['gender'];
    $religion=$_POST['religion'];
    $presentAddress=$_POST['presentAddress'];
    $perAddress=$_POST['perAddress'];
    $mobile=$_POST['mobile'];
    $guardianName=$_POST['guardianName'];
    $guardianCN=$_POST['guardianCN'];
    $guardianAddress=$_POST['guardianAddress'];
    $sguardianName=$_POST['sguardianName'];
    $sguardianCN=$_POST['sguardianCN'];
    $sguardianAddress=$_POST['sguardianAddress'];
    $username = $_POST['username'];
    $password = $_POST['password'];
	$sql = "insert into student values('','$registrationID','$firstname','$lastname','$class','$shift','$section','$rollNo','$fatherName','$motherName','$gender','$religion','$presentAddress','$perAddressl','$mobile','$guardianName','$guardianCN','$guardianAddress', '$sguardianName', '$sguardianCN', '$sguardianAddress');";
    $sql1 = "insert into login values('','$username','$password');";
    query($sql);
    query($sql1);
 }
?>  
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Student
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Student</li>
            <li class="active">Add Student</li>
          </ol>
        </section>

<!-- Main content -->
    <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Add Student</h3>
                </div><!-- /.box-header -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Official Information</a></li>
                    <li><a href="#tab2" data-toggle="tab">Personal Information</a></li>
                    <li><a href="#tab3" data-toggle="tab">Login Information</a></li>
                </ul>
<!--Official Information-->
            <!-- form start -->
            <form role="form" method="post" name="tab1" id = "tab1" enctype="multipart/form-data">
                <div class="box-body">
            <!--Student Id-->
                <div class="form-group">
                      <label for="studentId">Student Id</label>
                      <input type="text" class="form-control" id="studentId"  name="studentId" readonly>          
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Registration ID-->
                <div class="form-group">
                      <label for="registrationID">Registration ID</label>
                      <input type="text" class="form-control" id="registrationID"  name="registrationID" placeholder="Value Generated From Database">          
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Admission Date-->
                <div class="form-group">
                      <label for="admissionDate">Admission Date</label>
                      	<div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                           <input type="text" class="datepicker form-control"  data-date-format="yyyy/mm/dd" id="admissionDate" name="admissionDate" required="" placeholder="Admission Date"/>
                       </div>
                       <div class="form-error bg-danger"></div>
                </div>
            <!--First Name-->
                <div class="form-group">
                      <label for="firstName">First Name</label>
                      <input type="text" class="form-control" id="firstName"  name="firstName" placeholder="Enter First Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Last Name-->
                <div class="form-group">
                      <label for="lastName">Last Name</label>
                      <input type="text" class="form-control" id="lastName"  name="lastName" placeholder="Enter Last Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Class-->
                <div class="form-group">
                      <label>Class</label>
                      <select class="form-control" name = "class">
                        <option value="">Select</option>
                        <option value="0">One</option>
                        <option value="1" >Two</option>
                        <option value="2" >Three</option>
                        <option value="3" >Four</option>
                        <option value="4" >Five</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Shift-->
                <div class="form-group">
                      <label>Shift</label>
                      <select class="form-control" name = "shift">
                        <option value="">Select</option>
                        <option value="0">Morning</option>
                        <option value="1" >Day</option>
                        <option value="2" >Evening</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Section-->
                <div class="form-group">
                      <label>Section</label>
                      <select class="form-control" name = "section">
                        <option value="" >Select</option>
                        <option value="0" selected='selected'>A</option>
                        <option value="1" >B</option>
                        <option value="2" >C</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Roll No-->
                <div class="form-group">
                      <label for="rollNo">Roll No.</label>
                      <input type="text" class="form-control" id="rollNo"  name="rollNo" placeholder="Enter Roll No.">          
                      <div class="form-error bg-danger"></div>
                </div>
                </div>
            </form>
<!--Personal Information-->
            <form role="form" method="post" name="tab2" id = "tab2" enctype="multipart/form-data">
                <div class="box-body">
            <!--Father Name-->
                <div class="form-group">
                      <label for="fatherName">Father Name</label>
                      <input type="text" class="form-control" id="fatherName"  name="fatherName" placeholder="Enter Father Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Mother Name-->
                <div class="form-group">
                      <label for="motherName">Mother Name</label>
                      <input type="text" class="form-control" id="motherName"  name="motherName" placeholder="Enter Mother Name">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Gender-->
               <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name = "gender">
                        <option value = "">Select</option>
                        <option value = "0">Male</option>
                        <option value = "1">Female</option>
                      </select>
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Religion-->
                <div class="form-group">
                    <label>Religion</label>
                      <select class="form-control" name = "religion">
                        <option value = "">Select</option>
                        <option value = "0">Islam</option>
                        <option value = "1">Hindu</option>
                        <option value = "1">Buddha</option>
                      </select>
                    <div class="form-error bg-danger"></div>
                </div>
            <!--Present Address-->
                <div class="form-group">
                      <label for="presentAddress">Present Address</label>
                      <input type="text" class="form-control" id="presentAddress"  name="presentAddress" placeholder="Enter Valid Address">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Permanent Address-->
                <div class="form-group">
                      <label for="perAddress">Permanent Address</label>
                      <input type="text" class="form-control" id="perAddress"  name="perAddress" placeholder="Enter Valid Address">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Contact No-->
                <div class="form-group">
                      <label for="mobile">Contact No.</label>
                      <input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Enter Contact No.">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Guardian Name-->
                <div class="form-group">
                      <label for="guardianName">Guardian Name</label>
                      <input type="text" class="form-control" id="guardianName"  name="guardianName" placeholder="Enter Guardian Name">
                      <div class="form-error bg-danger"></div>
                </div>
                
            <!--Guardian Contact Number-->
                <div class="form-group">
                      <label for="guardianCN">Guardian Contact No.</label>
                      <input type="text" class="form-control" id="guardianCN"  name="guardianCN" placeholder="Enter Guardian Contact Number">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Guardian Address-->
                <div class="form-group">
                      <label for="guardianAddress">Guardian Address</label>
                      <input type="text" class="form-control" id="guardianAddress"  name="guardianAddress" placeholder="Enter Guardian Address">
                      <div class="form-error bg-danger"></div>
                </div>
             <!--Second Guardian Name-->
                <div class="form-group">
                      <label for="sguardianName">Second Guardian Name</label>
                      <input type="text" class="form-control" id="sguardianName"  name="sguardianName" placeholder="Enter Second Guardian Name">
                      <div class="form-error bg-danger"></div>
                </div>
                
            <!--Second Guardian Contact Number-->
                <div class="form-group">
                      <label for="sguardianCN">Guardian Contact No.</label>
                      <input type="text" class="form-control" id="sguardianCN"  name="sguardianCN" placeholder="Enter Second Guardian Contact Number">
                      <div class="form-error bg-danger"></div>
                </div>
            <!--Second Guardian Address-->
                <div class="form-group">
                      <label for="sguardianAddress">Guardian Address</label>
                      <input type="text" class="form-control" id="sguardianAddress"  name="sguardianAddress" placeholder="Enter Second Guardian Address">
                      <div class="form-error bg-danger"></div>
                </div>  
            </div>
           </form>
<!--Login Information-->
          <form role="form" method="post" name="tab3" id = "tab3" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">User Name</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Password</label>
                      <input type="password" class="form-control" id="password"  name="password" placeholder="Enter Password " required>
                    </div>
                    
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" required> Do U Agree
                      </label>
                    </div>
                    <!--For Next Previous Tab-->
                 <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <a class="btn btn-primary btnNext">Next</a>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <a class="btn btn-primary btnNext">Next</a>
                        <a class="btn btn-primary btnPrevious">Previous</a>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <a class="btn btn-primary btnPrevious">Previous</a>
                    </div>
                 </div>
                </div><!-- /.box-body -->
             </form>
             <div class="box-footer">
                <div class ="col-sm-offset-5 col-sm-2 text-center">
                     <button type="submit" class="btn btn-primary" name="addStudent" id="addStudent">Create</button>
                </div>
             </div>
          </div><!-- /.box -->
        </div><!--/.col (left) -->
      </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Script for-->
<!--Script for next-previous-->
<!--script for datepicker-->
 <script src="../../public/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
 <script src="../../public/lib/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
            <script>
                            $('.datepicker').datepicker({
                                format: 'yyyy-mm-dd'
                            });
                            $('.datepicker').datepicker('setDate', new Date());
                            $(".datepicker").datepicker('update');
            </script> 