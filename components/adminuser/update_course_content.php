<!--action code-->
<?php
    // Data Retrieve
    $id = $_GET['id'];
    $select = "select * from coresubject where coreSubID='$id'";
    $rows = fetchDataWithID($select);
    $coreSubID = $rows['coreSubID'];
    $coreSubName = $rows['coreSubName'];

    

  	if(isset($_POST['upload'])){
  	
  	   $coreSubName = $_POST['coreSubName'];
       $sql = "update coresubject set coreSubName = '$coreSubName' where coreSubID = '$id'";
  	   query($sql);
       echo"<script>location.replace('dashboard.php?page=course_content');</script>";
        
    }
?>
<!--For Data Retrive -->

 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Course
          </h1>
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
                  <h3 class="box-title">Course Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="course" id = "course" enctype="multipart/form-data">
                  <div class="box-body">
              <div class="form-group">
                <label for="course_name" class="col-sm-2 control-label">Course Name</label>
                 <div class="col-sm-6">
                    <input type="text" class="form-control" id="coreSubName" name="coreSubName" value = "<?php echo $coreSubName; ?>">
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
</div>