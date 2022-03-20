 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Marks
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Marks Information</li>
          </ol>
        </section>
<!--table section -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
        		<div class="box">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Marks Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x: scroll">
                  <table id="example1" class="table table-bordered table-striped" style=" font-size: 12px" >
                    <thead>
                      <tr>
                        <th>Teacher Name</th>
                        <th>Class ID</th>
                        <th>Section ID</th>
                        <th>Course ID</th>
                        <th>Student Roll</th>
                        <th>CT1 Marks</th>
                        <th>CT2 Marks</th>
                        <th>CT3 Marks</th>
                        <th>Attendance</th>
                        <th>First T CT1 Marks</th>
                        <th>First T CT2 Marks</th>
                        <th>First T CT3 Marks</th>
                        <th>First T Attendance</th>
                        <th>Second T CT1 Marks</th>
                        <th>Second T CT2 Marks</th>
                        <th>Second T CT3 Marks</th>
                        <th>Second T Attendance</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from marks";
						$record = fetchData($query);
                        foreach ($record as $marks) {
                                $id = $marks['id'];
                                $courseID = $marks['course_id'];
                                $secID = $marks['section_id'];
                                $clsID = $marks['class_id'];
                    
                                $secNameQ = "SELECT section_name FROM section where section_id  ='$secID' ";
                                $rows = fetchDataWithID($secNameQ);
                                $secName = $rows['section_name'];
                    
                                $clsNameQ = "SELECT class_name FROM class where class_id  ='$clsID' ";
                                $rowcl = fetchDataWithID($clsNameQ);
                                $clsName = $rowcl['class_name'];
    
                                $courseQ = "SELECT course_name FROM courses where course_id = '$courseID'";
                                $rowc = fetchDataWithID($courseQ);
                                $courseName = $rowc['course_name'];
								echo "<tr>";
									echo "<td>".$marks['teacher_name']."</td>";
									echo "<td>".$clsName."</td>";
                                    echo "<td>".$secName."</td>";
                                    echo "<td>".$courseName."</td>";
                                    echo "<td>".$marks['student_roll']."</td>";
                                    echo "<td>".$marks['ct1']."</td>";
                                    echo "<td>".$marks['ct2']."</td>";
                                    echo "<td>".$marks['ct3']."</td>";
                                    echo "<td>".$marks['attendance']."</td>";
                                    echo "<td>".$marks['fct1']."</td>";
                                    echo "<td>".$marks['fct2']."</td>";
                                    echo "<td>".$marks['fct3']."</td>";
                                    echo "<td>".$marks['fattendance']."</td>";
                                    echo "<td>".$marks['sct1']."</td>";
                                    echo "<td>".$marks['sct2']."</td>";
                                    echo "<td>".$marks['sct3']."</td>";
                                    echo "<td>".$marks['sattendance']."</td>";
									echo "<td>
                                    <a href='dashboard.php?page=delete_marks_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                    </td>";
                                    echo "<td>
                                    <a href='dashboard.php?page=update_marks_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
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