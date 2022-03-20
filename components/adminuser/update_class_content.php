<!--action code-->
<?php
    $id = $_GET['id'];
	if(isset($_POST['upload'])){

	$a = $_POST['className'];
    $b = $_POST['classDesc'];
    $sql = "update class set className = '$a', classDesc = '$b' where classID = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=class_content');</script>";
}
?>
<!--For Data Retrive -->
<?php
	$id = $_GET['id'];
	$select = "select * from class where classID = '$id'";
	$select_q= query($select);
	if ($select_q == true)
		{
			$record = fetchData($select);
                    foreach ($record as $data) {
					$id = $data['classID'];
					$className = $data['className'];
                    $classDesc = $data['classDesc'];
					}	
		}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Class
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Class update</li>
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
                  <h3 class="box-title">Class Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="class" id = "class" enctype="multipart/form-data">
                  <div class="box-body">
            <!--Class Name-->
                    <div class="form-group">
                      <label for="className" class="col-sm-2 control-label">Class Name</label>
                      <div class="col-sm-6">
                          <input type ="text" class="form-control" id="className"  name="className" value = "<?php echo $className ?>">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--Class Description-->
                    <div class="form-group">
                      <label for="classDesc" class="col-sm-2 control-label">Class Description</label>
                        <div class="col-sm-6">
                          <input type ="text" class="form-control" id="classDesc"  name="classDesc" value = "<?php echo $classDesc ?>">
                        </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
                    <div class="checkbox">
                      <label class="col-sm-offset-2 col-sm-6">
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
      </div><!-- /.content-wrapper -->