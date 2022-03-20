<!--action code-->
<?php
  if(isset($_POST['upload'])){
      
    $coreSubName = $_POST['coreSubName'];
    $sql = "insert into coresubject values('','$coreSubName')";
    query($sql);
  }
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Course</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Course</li>
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
            <h3 class="box-title">Course Entry</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" name="course" id = "course" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="course_name" class="col-sm-2 control-label">Course Name</label>
                 <div class="col-sm-6">
                    <input type="text" class="form-control" id="coreSubName" name="coreSubName" placeholder="Enter Course Name">
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
            <h3 class="box-title">Course Data</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Course Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!--for data retrive-->
                <?php
                  $query = "select * from coresubject";
                  $record = fetchData($query);
                  foreach ($record as $coresubject) {

                    $courseID = $coresubject['coreSubID'];
                    
                    echo "<tr>";
                    echo "<td>".$coresubject['coreSubName']."</td>";
                    echo "<td>
                    <a href='dashboard.php?page=delete_course_content&id=$courseID'><button type='submit' class='btn btn-danger'>Delete</button></a>
                    <a href='dashboard.php?page=update_course_content&id=$courseID'><button type='submit' class='btn btn-primary'>Update</button></a>
                    </td>";
                    echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->