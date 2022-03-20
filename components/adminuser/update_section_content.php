<!--action code-->
<?php
    $id = $_GET['id'];
	$select = "select * from section where sectionID = '$id'";
    $rows = fetchDataWithID($select);
    $sectionName = $rows['sectionName'];
    $sectionDesc = $rows['sectionDesc'];
    
	if(isset($_POST['upload'])){
	
	$a = $_POST['sectionName'];
	$b = $_POST['sectionDesc'];
        
    $sql = "update section set sectionName = '$a', sectionDesc ='$b' where sectionID = '$id'";
	query($sql);
    echo"<script>location.replace('dashboard.php?page=section_content');</script>";
}
?>
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Section
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Section Update</li>
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
                  <h3 class="box-title">Section Update</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="section" id = "section" enctype="multipart/form-data">
                  <div class="box-body">
                <!--Section Name-->
                    <div class="form-group">
                      <label for="sectionName" class="col-sm-2 control-label">Section Name</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" id="sectionName" name="sectionName" value = "<?php echo $sectionName ?>">
                      </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--Section Description-->
                    <div class="form-group">
                      <label for="sectionDesc" class="col-sm-2 control-label">Class Teacher</label>
                      <div class=" col-sm-6">
                          <input type="text" class="form-control" id="sectionDesc" name="sectionDesc" value = "<?php echo $sectionDesc ?>">
                      </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
                    <div class="checkbox">
                      <label class = "col-sm-offset-2 col-sm-6">
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