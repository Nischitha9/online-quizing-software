<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techquiz";
$xxx="xxx";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) 
{
 //Import uploaded file to Database
 $handle = fopen($_FILES['filename']['tmp_name'], "r");
 while(($data = fgetcsv($handle)) !== FALSE){
 $sql = "INSERT into questions_table (quiz_name,number,question, option1,option2,option3,option4,correct_answer)
  values('".$xxx."','".$data[0]."', '".$data[1]."', '".$data[2]."','".$data[3]."', '".$data[4]."', '".$data[5]."','".$data[6]."')";
 
  mysqli_query($conn, $sql) ;
}
}
 ?>
 
 <?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'techquiz');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
    
   $quiz_name = $_REQUEST['quiz_name'];
   $number = $_REQUEST['number'];
   $set_time=$_REQUEST['set_time'];
    $abcde=0;
	$c=1;
	$quiz_id=1;
	
	$query = "SELECT MAX(quiz_id) FROM quiz_details ";
																	$var=mysqli_query($dbh,$query);
																    while ($arr=mysqli_fetch_row($var))
																$abc=$arr[0];
									?>
		<?php
		if($abc>=1)
			$quiz_id=$abc+1;
		?>							
									
									
									
<?php
 $query = "INSERT INTO quiz_details VALUES('$quiz_id','$quiz_name','$number','$abcde','$set_time')";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
 
 ?>
 <?php
  $query = "update questions_table set quiz_name='$quiz_name' where quiz_name='$xxx'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
 ?>
 
 
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TM-Quiz</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="addquiz.php_files/materialdesignicons.css">
  <link rel="stylesheet" href="addquiz.php_files/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="addquiz.php_files/jqvmap.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="addquiz.php_files/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/tables/images/favicon.png">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/index.html"><img src="addquiz.php_files/logo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/index.html"><img src="addquiz.php_files/logo-mini.svg" alt="logo"></a>
      </div>
      
    </nav>
      
      
      
      
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        
       <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="addquiz.html">
                <span class="menu-title">CONDUCT NEW QUIZ</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="report.php" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">UPDATE QUESTIONS</span>

              </a>
			   <li class="nav-item">
              <a class="nav-link" href="quizreport.php">
                <span class="menu-title">QUIZ REPORT</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
                  <a class="nav-link" href="enableqiz.php">
                    <span class="menu-title">ENABLE OR DISABLE QUIZ </span>
                    <i class="mdi mdi-home menu-icon"></i>
                  </a>
                </li>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/ui-features/typography.html">Typography</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">LOG OUT</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
             
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
          </ul>
         
          
        </nav>
        
		
		
		
		
		
        <!-- partial -->
       
                      <h4 class="card-title">import excel</h4>
                      <form class="forms-sample">
                      <form action="" method="POST" enctype="multipart/form-data">
                       </form>

<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                 <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">FILE INSERTED SUCCESSFULLY</h4>
                      <form class="forms-sample">
                      <form action="" method="POST" enctype="multipart/form-data">
                       </form>
                    </div>
						 <a class="nav-link" href="index1.html">
                <span class="menu-title">HOME</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
                  </div>
                </div>
                <div class="col-12 stretch-card">

                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
            </div>
            <div class="col-md-5 d-flex align-items-stretch">
              <div class="row flex-grow">
                <div class="col-12 grid-margin">

                </div>
                <div class="col-12 grid-margin stretch-card">

                </div>
              </div>
            </div>


          </div>
              </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">

            </div>


          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="index1_files/jquery.js"></script>
  <script src="index1_files/popper.js"></script>
  <script src="index1_files/bootstrap.js"></script>
  <script src="index1_files/perfect-scrollbar.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="index1_files/off-canvas.js"></script>
  <script src="index1_files/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->



</body></html>