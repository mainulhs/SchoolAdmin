<!--action code-->
<?php
	if(isset($_POST['upload'])){

	$a = $_POST['className'];
    $b = $_POST['classDesc'];
    $sql = "insert into class(classID, className, classDesc) Values('', '$a', '$b')";
	query($sql);
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
            <li class="active">Class</li>
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
                  <h3 class="box-title">Class Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="class" id = "class" enctype="multipart/form-data">
                  <div class="box-body">
            <!--Class Class Name -->
                    <div class="form-group">
                      <label for="className" class="col-sm-2 control-label">Class Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="className"  name="className" placeholder="Enter Class Name ">
                      </div>
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--Class Description -->
                    <div class="form-group">
                      <label for="classDesc" class="col-sm-2 control-label">Class Description</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="classDesc"  name="classDesc" placeholder="Enter Class Description ">    
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
    <!--table section -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
        		<div class="box">
                <div class="box-header" style="text-align:center">
                  <h3 class="box-title">Class Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x: scroll">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <th>Class Name</th>
                        <th>Class Description</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from class";
						$record = fetchData($query);
                        foreach ($record as $class) {
                                $id = $class['classID'];	
								echo "<tr>";
									echo "<td>".$class['className']."</td>";
									echo "<td>
                                    <td>".$class['classDesc']."</td>";
									echo "<td>
                                    <a href='dashboard.php?page=delete_class_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                    <a href='dashboard.php?page=update_class_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
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