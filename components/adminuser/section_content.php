<!--action code-->
<?php
	if(isset($_POST['upload'])){
	
	$a = $_POST['sectionName'];
	$b = $_POST['sectionDesc'];
        
    $sql = "insert into section(sectionID, sectionName, sectionDesc) Values('', '$a', '$b')";
	query($sql);
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
            <li class="active">Section</li>
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
                  <h3 class="box-title">Section Entry</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" name="section" id = "section" enctype="multipart/form-data">
                  <div class="box-body">
            <!--Section Name-->
                    <div class="form-group">
                      <label for="sectionName" class="col-sm-2 control-label">Section Name</label>
                      <div class="col-sm-6">
                           <input type="text" class="form-control" id="sectionName" name="sectionName" placeholder="Enter Section Name">
                      </div>
                     
                      <div class="form-error bg-danger"></div>
                    </div>
                    <br>
                    <br>
            <!--Section Description-->
                    <div class="form-group">
                      <label for="sectionDesc" class="col-sm-2 control-label">Class Teacher</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" id="sectionDesc" name="sectionDesc" placeholder="Enter Section Description">
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
                  <h3 class="box-title">Section Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <th>Section Name</th>
                        <th>Section Description</th>
                        <th>Action</th>
                      </tr>
                   </thead>
                    <!--for data retrive-->
                      <?php
						$query = "select * from section";
						$record = fetchData($query);
                        foreach ($record as $section) {
                                $id = $section['sectionID'];
								echo "<tr>";
									echo "<td>".$section['sectionName']."</td>";
									echo "<td>".$section['sectionDesc']."</td>";
									echo "<td>
                                    <a href='dashboard.php?page=delete_section_content&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                    <a href='dashboard.php?page=update_section_content&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a>
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