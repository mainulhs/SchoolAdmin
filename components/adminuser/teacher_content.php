<!--action code-->
<?php
	if(isset($_POST['upload'])){
	
	$teacherName = $_POST['$teacherName'];
	$fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $preAddress = $_POST['preAddress'];
    $perAddress = $_POST['perAddress'];
    $email = $_POST['email'];
    $mobileNo = $_POST['mobileNo'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $dob = $_POST['dob'];
    $doj = $_POST['doj'];
    $openSalary = $_POST['openSalary'];
    $subPreference = $_POST['subPreference'];
    $sql = "insert into teacherinfo values('','$teacherName', '$fName','$mName','$preAddress','$perAddress','$email','$mobileNo','$gender','$religion','$dob','$doj','$openSalary','$subPreference')";
	query($sql);
}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Teacher
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Teacher</li>
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
                  <h3 class="box-title">Teacher Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="section" id = "teacher" enctype="multipart/form-data">
                  <div class="box-body">
            <!--Teacher Name-->
                    <div class="form-group">
                      <label for="teacherName" class="col-sm-2 control-label">Teacher Name</label>
                        <div class = "col-sm-6">
                          <input type="text" class="form-control" id="teacherName" name="teacherName" placeholder="Enter Teacher Name">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--fName-->
                    <div class="form-group">
                      <label for="fName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="fName" name="fName" placeholder="Enter First Name">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--lName-->
                    <div class="form-group">
                      <label for="mName" class="col-sm-2 control-label">Middle Name</label>
                       <div class="col-sm-6">
                          <input type="text" class="form-control" id="mName" name="mName" placeholder="Enter Middle Name">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--PreAddress-->
                    <div class="form-group">
                      <label for="preAddress" class="col-sm-2 control-label">Present Address</label>
                       <div class="col-md-6">
                          <input type="text" class="form-control" id="preAddress" name="preAddress" placeholder="Enter Present Address">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--PerAddress-->
                    <div class="form-group">
                      <label for="perAddress" class="col-sm-2 control-label">Permanent Address</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="perAddress" name="perAddress" placeholder="Enter Permanent Address">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--email-->
                <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">  
                          <input type="text" class="form-control" id="email"  name="email" placeholder="Enter email address">
                       </div>
                      <div class="form-error bg-danger"></div>
                </div>
                <br>
                <br>
            <!--Contact No-->
                <div class="form-group">
                      <label for="mobileNo" class="col-sm-2 control-label">Contact No.</label>
                        <div class="col-sm-6">  
                          <input type="text" class="form-control" id="mobileNo"  name="mobileNo" placeholder="Enter Contact No.">
                        </div>
                      <div class="form-error bg-danger"></div>
                </div>
                <br>
                <br>
            <!--Gender-->
               <div class="form-group">
                      <label class="col-sm-2 control-label">Gender</label>
                         <div class="col-sm-6">
                            <select class="form-control" name = "gender">
                                <option >Select</option>
                                <option >Male</option>
                                <option >Female</option>
                            </select>
                         </div>
                      <div class="form-error bg-danger"></div>
                </div>
                <br>
                <br>
            <!--Religion-->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Religion</label>
                      <div class="col-sm-6">
                       <select class="form-control" name = "religion">
                        <option>Select</option>
                        <option>Islam</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                       </select>
                      </div>
                    <div class="form-error bg-danger"></div>
                </div>
                <br>
                <br>
                <br>
            <!--Date of Birth-->
                <div class="form-group">
                      <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                      	<div class="col-sm-6">
                      	 <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                           <input type="text" class="datepicker form-control"  data-date-format="yyyy/mm/dd" id="dob" name="dob" required="" placeholder="Enter Date of Birth"/>
                        </div>
                      	</div>
                       <div class="form-error bg-danger"></div>
                </div>
                <br>
                <br>
            <!--Date of join-->
                <div class="form-group">
                      <label for="doj" class="col-sm-2 control-label">Date of Join</label>
                      	<div class="col-sm-6">
                      	    <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                           <input type="text" class="datepicker form-control"  data-date-format="yyyy/mm/dd" id="doj" name="doj" required="" placeholder="Enter Date of Join"/>
                       </div>
                      	</div>
                       <div class="form-error bg-danger"></div>
                </div>
                <br>
                <br>
            <!--Open Salary-->
                    <div class="form-group">
                      <label for="openSalary" class="col-sm-2 control-label">Class Teacher</label>
                        <div class="col-sm-6">  
                          <input type="text" class="form-control" id="openSalary" name="openSalary" placeholder="Enter Open Salary">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                <br>
                <br>
            <!--Subject Preference-->
                    <div class="form-group">
                      <label for="subPreference" class="col-sm-2 control-label">Subject Preference</label>
                        <div class ="col-sm-6">
                          <input type="text" class="form-control" id="subPreference" name="subPreference" placeholder="Enter Subject Preference">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
                    <div class="checkbox">
                      <label class = "col-sm-6 col-sm-offset-2">
                        <input type="checkbox"> Do U Agree
                      </label>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                       <div class ="col-sm-offset-6 col-sm-3 text-center">
                        <button type="submit" class="btn btn-primary" name="upload" id="upload">Submit</button>
                    </div>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
<!--table section -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
        		<div class="box">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Teacher Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x: scroll">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <th>Teacher Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Present Address</th>
                        <th>Permanent Address</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Gender</th>
                        <th>Religion</th>
                        <th>Date of Birth</th>
                        <th>Date of Join</th>
                        <th>Open Salary</th>
                        <th>Subject Preference</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from teacherinfo";
						$record = fetchData($query);
                        foreach ($record as $teacherinfo) {
                                $id = $teacherinfo['teacherID'];
								echo "<tr>";
									echo "<td>".$teacherinfo['teacherName']."</td>";
									echo "<td>".$teacherinfo['fName']."</td>";
                                    echo "<td>".$teacherinfo['mName']."</td>";
                                    echo "<td>".$teacherinfo['preAddress']."</td>";
                                    echo "<td>".$teacherinfo['perAddress']."</td>";
                                    echo "<td>".$teacherinfo['email']."</td>";
                                    echo "<td>".$teacherinfo['mobileNo']."</td>";
                                    echo "<td>".$teacherinfo['gender']."</td>";
                                    echo "<td>".$teacherinfo['religion']."</td>";
                                    echo "<td>".$teacherinfo['dob']."</td>";
                                    echo "<td>".$teacherinfo['doj']."</td>";
                                    echo "<td>".$teacherinfo['openSalary']."</td>";
                                    echo "<td>".$teacherinfo['subPreference']."</td>";
									echo "<td>
                                    <a href='dashboard.php?page=delete_teacher_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                    </td>";
                                    echo "<td>
                                    <a href='dashboard.php?page=update_teacher_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
								    </td>";
								echo "</tr>";
							}
					 ?>
                   </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->