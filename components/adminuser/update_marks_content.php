<!--action code-->
<?php
    $id = $_GET['id'];
    $select = "select * from marks where id = '$id'";
    $data = fetchDataWithID($select);
    $teacher_name = $data['teacher_name'];
    $class_id = $data['class_id'];
    $section_id = $data['section_id'];
    $course_id = $data['course_id'];
    $student_roll = $data['student_roll'];
    $ct1 = $data['ct1'];    
    $ct2 = $data['ct2'];
    $ct3 = $data['ct3'];
    $attendance = $data['attendance'];
    $fct1 = $data['fct1'];    
    $fct2 = $data['fct2'];
    $fct3 = $data['fct3'];
    $fattendance = $data['fattendance'];
    $sct1 = $data['sct1'];    
    $sct2 = $data['sct2'];
    $sct3 = $data['sct3'];
    $sattendance = $data['sattendance'];
    
    $secNameQ = "SELECT section_name FROM section where section_id  ='$section_id' ";
    $rowS = fetchDataWithID($secNameQ);
    $section_name = $rowS['section_name'];

    $clsNameQ = "SELECT class_name FROM class where class_id  ='$class_id' ";
    $rowC = fetchDataWithID($clsNameQ);
    $class_name = $rowC['class_name'];
    
    $courseQ = "SELECT course_name FROM courses where course_id = '$course_id'";
    $rowCu = fetchDataWithID($courseQ);
    $course_name = $rowCu['course_name'];
    
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
    
       $select = "SELECT class_id FROM class where class_name = '$class_name'";
       $sid = fetchDataWithID($select);
       $id1 = $sid['class_id'];
        
       $select1 = "SELECT section_id FROM section where section_name = '$section_name'";
       $section_id = fetchDataWithID($select1);
       $id_s = $section_id['section_id'];
        
       $select2 = "SELECT course_id FROM courses where course_name = '$course_name'";
       $course_id = fetchDataWithID($select2);
       $id_c = $course_id['course_id'];
    
    $sql = "update marks set teacher_name ='$teacher_name',class_id ='$id1',section_id ='$id_s',course_id ='$id_c',student_roll ='$student_roll',ct1 ='$ct1',ct2 ='$ct2',ct3 ='$ct3',attendance ='$attendance',fct1 ='$fct1',fct2 ='$fct2',fct3 ='$fct3',fattendance ='$fattendance',sct1 = '$sct1',sct2 = '$sct2',sct3 = '$sct3',sattendance ='$sattendance' where id  = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=marks_content_table');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from marks where id = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['id'];
					
					}	
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
            <li class="active">Marks Update</li>
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
                  <h3 class="box-title">Marks Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="section" id = "section" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                <!--Teacher Name-->
                    <label>Teacher Name</label>
                      <select class="form-control" name = "teacher_name">
                          <option><?php echo $teacher_name;?></option>
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
                           <option><?php echo $class_name;?></option>
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
                          <option><?php echo $section_name;?></option>
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
                          <option><?php echo $course_name;?></option>
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
                      <input type="text" class="form-control" id="	student_roll" name="student_roll" value = "<?php echo $student_roll;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="ct1">CT1 Marks</label>
                      <input type="text" class="form-control" id="	ct1" name="ct1" value = "<?php echo $ct1;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div class="form-group">
                      <label for="ct2">CT2 Marks</label>
                      <input type="text" class="form-control" id="	ct2" name="ct2" value = "<?php echo $ct2;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="ct3">CT3 Marks</label>
                      <input type="text" class="form-control" id="	ct3" name="ct3" value = "<?php echo $ct3;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="attendance">Attendence Marks</label>
                      <input type="text" class="form-control" id="	attendance" name="attendance" value = "<?php echo $attendance;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div><p>First Term Marks Entry</p></div>
                    <!--For First term-->
                     <div class="form-group">
                      <label for="fct1">CT1 Marks</label>
                      <input type="text" class="form-control" id="fct1" name="fct1"value = "<?php echo $fct1;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="fct2">CT2 Marks</label>
                      <input type="text" class="form-control" id="fct2" name="fct2" value = "<?php echo $fct2;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="fct3">CT3 Marks</label>
                      <input type="text" class="form-control" id="fct3" name="fct3" value = "<?php echo $fct3;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="fattendance">Attendence Marks</label>
                      <input type="text" class="form-control" id="fattendance" name="fattendance" value = "<?php echo $fattendance;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                    <div><p>Second Term Marks Entry</p></div>
                    <!--For Second term-->
                    <div class="form-group">
                      <label for="sct1">CT1 Marks</label>
                      <input type="text" class="form-control" id="sct1" name="sct1" value = "<?php echo $sct1;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="sct2">CT2 Marks</label>
                      <input type="text" class="form-control" id="sct2" name="sct2" value = "<?php echo $sct2;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="sct3">CT3 Marks</label>
                      <input type="text" class="form-control" id="sct3" name="sct3" value = "<?php echo $sct3;?>">
                      <div class="form-error bg-danger"></div>
                    </div>
                     <div class="form-group">
                      <label for="sattendance">Attendence Marks</label>
                      <input type="text" class="form-control" id="sattendance" name="sattendance" value = "<?php echo $sattendance;?>">
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
</div> <!--End of File-->