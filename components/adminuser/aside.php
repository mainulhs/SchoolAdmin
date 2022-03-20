<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../public/lib/dist/img/avatar2.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['userName'];?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Control Panel</li>
            <li class="active treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span> Dashboard</span></a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>User Settings</span>
                <span class="label label pull-right bg-red">2</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php?page=add_user"><i class="fa fa-circle-o"></i>Add New User</a></li>
                <li><a href="dashboard.php?page=change_password"><i class="fa fa-circle-o"></i>Change Password</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Student</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php?page=add_student"><i class="fa fa-circle-o"></i>Add Student</a></li>
                <li><a href="dashboard.php?page=slide_content"><i class="fa fa-circle-o"></i>Manage Student</a></li>
                <li><a href="dashboard.php?page=class_content"><i class="fa fa-circle-o"></i>Class</a></li>
                <li><a href="dashboard.php?page=section_content"><i class="fa fa-circle-o"></i>Section</a></li>
                
              </ul>
              </li>
               <li class="treeview">
              <a href="#">
                <i class="fa fa-graduation-cap"></i>
                <span>Course</span>
                <span class="label label-primary pull-right bg-green">1</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php?page=course_content"><i class="fa fa-circle-o"></i>Course</a></li>
              </ul>
              </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-spinner"></i>
                <span>Teacher</span>
                <span class="label label pull-right bg-yellow">3</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="dashboard.php?page=teacher_content"><i class="fa fa-circle-o"></i>Add Teacher</a></li>
                <li><a href="dashboard.php?page=marks_content"><i class="fa fa-circle-o"></i>Marks Entry</a></li>
                <li><a href="dashboard.php?page=marks_content_table"><i class="fa fa-circle-o"></i>Marks Information</a></li>
              </ul>
              </li>
          </ul>
        </section>
        <!-- /.sidebar -->
</aside>