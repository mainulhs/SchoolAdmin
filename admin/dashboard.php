 <?php 
    include '../core/dbe.inc.php';
    include '../core/core.inc.php';
    session_start(); 
    checkManager(); 
 ?>
 <html>
  <head>
    <meta charset="UTF-8">
    <title>School | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="../public/lib/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="../public/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="../public/lib/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="../public/lib/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../public/lib/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../public/lib/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="../public/lib/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="../public/lib/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../public/lib/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<!--date time-->
    <link href="../public/lib/dist/css/fullcalendar.min.css" rel="stylesheet"  type="text/css">
    <link href="../public/lib/dist/css/fullcalendar.print.css" rel="stylesheet"  type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

    <?php include '../components/adminuser/header.php'; ?>
    <?php include '../components/adminuser/aside.php'; ?>
    <?php 

        $link = isset($_GET['page']) ? $_GET['page'] : ''; 

        if ($link == '') {
            include '../components/adminuser/main_content.php';
        }
        if($link == 'signout')
        {
            include '../components/adminuser/signout.php';
        }
        if($link == 'change_password')
        {
            include '../components/adminuser/change_pass_content.php';
        }
        if($link == 'add_user')
        {
            include '../components/adminuser/add_user.php';
        }
        if($link == 'add_student')
        {
            include '../components/adminuser/student_content.php';
        }
        if ($link =='update_profile_content')
        {
            include '../components/adminuser/update_profile_content.php';
        }
        if($link == 'delete_profile_content')
        {
            include '../components/adminuser/delete_profile_content.php';
        }
        if($link == 'class_content')
        {
            include '../components/adminuser/class_content.php';
        }
        if($link == 'update_class_content')
        {
            include '../components/adminuser/update_class_content.php';
        }
        if($link == 'delete_class_content')
        {
            include '../components/adminuser/delete_class_content.php';
        }
        if($link == 'section_content')
        {
            include '../components/adminuser/section_content.php';
        }
        if($link == 'update_section_content')
        {
            include '../components/adminuser/update_section_content.php';
        }
        if($link == 'delete_section_content')
        {
            include '../components/adminuser/delete_section_content.php';
        }
        if($link == 'course_content')
        {
            include '../components/adminuser/course_content.php';
        }
        if($link == 'update_course_content')
        {
            include '../components/adminuser/update_course_content.php';
        }
        if($link == 'delete_course_content')
        {
            include '../components/adminuser/delete_course_content.php';
        }
        if($link == 'marks_content')
        {
            include '../components/adminuser/marks_content.php';
        }
        if($link == 'update_marks_content')
        {
            include '../components/adminuser/update_marks_content.php';
        }
        if($link == 'delete_marks_content')
        {
            include '../components/adminuser/delete_marks_content.php';
        }
        if($link == 'marks_content_table')
        {
            include '../components/adminuser/marks_content_table.php';
        }
        if($link == 'teacher_content')
        {
            include '../components/adminuser/teacher_content.php';
        }
        else {
            $_GET['page'] = '';
        }
    ?>
    
    <?php include '../components/adminuser/footer.php'; ?>
    
</div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../public/lib/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../public/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!-- iCheck -->
    <script src="../public/lib/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../public/lib/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../public/lib/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../public/lib/dist/js/app.min.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="../public/lib/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../public/lib/dist/js/demo.js" type="text/javascript"></script>
    <!-- VALIDATION -->
    <script src="../public/js/jquery.validate.js" type="text/javascript"></script>
    <script src="../public/js/main.js" type="text/javascript"></script>
   <!--for time date-->
   
    <script src='../public/lib/dist/js/fullcalendar.min.js'></script>

    <script>
        $('.datepicker').datepicker({
            format: 'yyyy/mm/dd'
            
        });
        $('.datepicker').datepicker('setDate', new Date());
        $(".datepicker").datepicker('update');
    </script> 
    
  </body>
</html>