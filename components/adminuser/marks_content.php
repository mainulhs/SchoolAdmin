<!--action code-->
<?php
	if(isset($_POST['upload'])){
	
	$teacher_name = $_POST['teacher_name'];
	$class_name = $_POST['class_name'];
    $section_name = $_POST['section_name'];
    $course_name = $_POST['course_name'];
    $student_roll = $_POST['student_roll'];
    $ct1 = $_POST['ct1'];    
    $ct2 = $_POST['ct2'];
    $ct3 = $_POST['ct3'];
    $attendance = $_POST['attendance'];
    $fct1 = $_POST['fct1'];    
    $fct2 = $_POST['fct2'];
    $fct3 = $_POST['fct3'];
    $fattendance = $_POST['fattendance'];
    $sct1 = $_POST['sct1'];    
    $sct2 = $_POST['sct2'];
    $sct3 = $_POST['sct3'];
    $sattendance = $_POST['sattendance'];
    
    $select1 = "SELECT * FROM courses where course_name = '$course_name'";
    $id_s = fetchData($select1);
        foreach($id_s as $data)
        {
            $class_id = $data['class_id'];
            $section_id = $data['section_id'];
            $course_id = $data['course_id'];
        }
    
    $sql = "insert into marks values('','$teacher_name','$class_id','$section_id','$course_id','$student_roll','$ct1','$ct2','$ct3','$attendance','$fct1','$fct2','$fct3','$fattendance','$sct1','$sct2','$sct3','$sattendance')";
	query($sql);
    echo '<script language="javascript"> alert("Information Inserted") </script>';
    echo "<script>location.replace('dashboard.php?page=marks_content');</script>";
}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Marks
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Marks</li>
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
                  <h3 class="box-title">Marks Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="section" id = "section" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                <!--Teacher Name-->
                    <label>Teacher Name</label>
                      <select class="form-control" name = "teacher_name">
                          <option >-- SELECT --</option>
                           <?php 
                                $qsec = "SELECT * FROM courses";
                                $record = fetchData($qsec);
                                foreach ($record as $data) 
                                { 
                           ?>
                                <option ><?php echo $data['course_teacher']; ?></option>
                           <?php    
                                }	
                            ?>
                        
                      </select>
                    <div class="form-error bg-danger"></div>
                    </div>
                <!--Class Name-->
                     <div class="form-group">
                    <label>Class Name</label>
                      <select class="form-control" name = "class_name">
                          <option >-- SELECT --</option>
                           <?php 
                                $qcla = "SELECT * FROM class";
                                $record = fetchData($qcla);
                                foreach ($record as $data) 
                                { 
                           ?>
                                <option ><?php echo $data['class_name']; ?></option>
                           <?php    
                                }	
                            ?>
                        
                      </select>
                <!--Section Name-->
                    <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                    <label>Section Name</label>
                      <select class="form-control" name = "section_name">
                          <option >-- SELECT --</option>
                           <?php 
                                $qsec = "SELECT DISTINCT section_name FROM section";
                                $record = fetchData($qsec);
                                foreach ($record as $data) 
                                { 
                           ?>
                                <option ><?php echo $data['section_name']; ?></option>
                           <?php    
                                }	
                            ?>
                        
                      </select>
                    <div class="form-error bg-danger"></div>
                    </div>
                  <div class="form-group">
                    <label>Course Name</label>
                      <select class="form-control" name = "course_name">
                          <option >-- SELECT --</option>
                           <?php 
                                $qsec = "SELECT DISTINCT course_name FROM courses";
                                $record = fetchData($qsec);
                                foreach ($record as $data) 
                                { 
                           ?>
                                <option ><?php echo $data['course_name']; ?></option>
                           <?php    
                                }	
                            ?>
                        
                      </select>
                    <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="	student_roll">Student Roll</label>
                      <input type="text" class="form-control" id="	student_roll" name="student_roll" placeholder="Enter Student Roll">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="ct1">CT1 Marks</label>
                      <input type="text" class="form-control" id="	ct1" name="ct1" placeholder="Enter CT1 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="ct2">CT2 Marks</label>
                      <input type="text" class="form-control" id="	ct2" name="ct2" placeholder="Enter CT2 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="ct3">CT3 Marks</label>
                      <input type="text" class="form-control" id="	ct3" name="ct3" placeholder="Enter CT3 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="attendance">Attendence Marks</label>
                      <input type="text" class="form-control" id="	attendance" name="attendance" placeholder="Enter Attendance Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div><p>First Term Marks Entry</p></div>
                    <!--For First term-->
                     <div class="form-group">
                      <label for="fct1">CT1 Marks</label>
                      <input type="text" class="form-control" id="fct1" name="fct1" placeholder="Enter First Term CT1 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="fct2">CT2 Marks</label>
                      <input type="text" class="form-control" id="fct2" name="fct2" placeholder="Enter First Term CT2 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="fct3">CT3 Marks</label>
                      <input type="text" class="form-control" id="fct3" name="fct3" placeholder="Enter First Term CT3 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="fattendance">Attendence Marks</label>
                      <input type="text" class="form-control" id="fattendance" name="fattendance" placeholder="Enter First Term Attendance Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div><p>Second Term Marks Entry</p></div>
                    <!--For Second term-->
                    <div class="form-group">
                      <label for="sct1">CT1 Marks</label>
                      <input type="text" class="form-control" id="sct1" name="sct1" placeholder="Enter Second Term CT1 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="sct2">CT2 Marks</label>
                      <input type="text" class="form-control" id="sct2" name="sct2" placeholder="Enter Second Term CT2 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="sct3">CT3 Marks</label>
                      <input type="text" class="form-control" id="sct3" name="sct3" placeholder="Enter Second Term CT3 Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="sattendance">Attendence Marks</label>
                      <input type="text" class="form-control" id="sattendance" name="sattendance" placeholder="Enter Second Term Attendance Marks">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Do U Agree
                      </label>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                   <div class ="col-sm-offset-5 col-sm-2 text-center">
                        <button type="submit" class="btn btn-primary" name="upload" id="upload">Submit</button>
                    </div>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->