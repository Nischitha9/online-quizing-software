<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'techquiz');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
   $quiz_name = $_REQUEST['quiz_name'];
   $number = $_REQUEST['number'];
   $question=$_REQUEST['question'];
   $option1=$_REQUEST['option1'];
   $option2=$_REQUEST['option2'];
   $option3=$_REQUEST['option3'];
   $option4=$_REQUEST['option4'];
   $correct_answer=$_REQUEST['correct_answer'];
  $abc=0;
  $def=0;
  
 
 $query = "INSERT INTO questions_table VALUES('$quiz_name',$number,'$question','$option1','$option2','$option3','$option4','$correct_answer')";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
 
 
 
 $query = "SELECT * FROM quiz_details where quiz_name='$quiz_name'";
															      $var=mysqli_query($dbh,$query);
															      while ($arr=mysqli_fetch_row($var))

														      $def=$arr[1];
 
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
              <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/tables/addquiz.html">
                <span class="menu-title">CONDUCT NEW QUIZ</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/tables/quiz_report.html" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">OLD QUIZ REPORT</span>
               
              </a>
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
              <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/forms/basic_elements.html">
                <span class="menu-title">LOG OUT</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
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
				
					<form action="addquiz1.php" method="post">
                      <h4 class="card-title">QUIZ DETAILS</h4>
					  <?PHP				
						if($def==$number)
								echo"ASSIGNED NUMBER OF QUESTIONS SUBMITED SUCCESSFULLY" 
						?>
						<br>
						<br>
						<?PHP
						if($def==$number)
								echo"ADD MORE QUESTIONS IF REQUIRED" 
							?>
							<br>
							<br>
							
							
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Quiz Name</label>
                          <input class="form-control" name="quiz_name" value="<?php  echo"$quiz_name" ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Question Number</label>
                          <input class="form-control" name="number"  value="<?php 
																   $query = "SELECT MAX(number)+1 FROM questions_table where quiz_name='$quiz_name' ";
																	$var=mysqli_query($dbh,$query);
																    while ($arr=mysqli_fetch_row($var))
																	$abc=$arr[0];
																    { echo $abc; }
																	
															  ?>"> 	
                        </div>
                           <div class="form-group">
                          <label for="exampleInputPassword1">Question</label>
                          <input class="form-control"  name="question" placeholder="Enter Question">
                        </div>
                          
                           <div class="form-group">
                          <label for="exampleInputPassword1">Option 1</label>
                          <input class="form-control" name="option1" placeholder="Option 1">
                        </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Option 2</label>
                          <input class="form-control" name="option2" placeholder="Option 2">
                        </div>
                           <div class="form-group">
                          <label for="exampleInputPassword1">Option 3</label>
                          <input class="form-control" name="option3"placeholder="Option 3">
                        </div>
                           <div class="form-group">
                          <label for="exampleInputPassword1">Option 4</label>
                          <input class="form-control"name="option4" placeholder="Option 4">
                        </div>
                           
                          <label>Enter Correct Option </label>
                          <div>
                        	<input type="radio" name="correct_answer" value="1"> 1<br>
							<input type="radio" name="correct_answer" value="2"> 2<br>
							<input type="radio" name="correct_answer" value="3"> 3<br>
							<input type="radio" name="correct_answer" value="4"> 4<br>
						   
                          </div>
						
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                       <a href="index1.html" target="full"> <b>HOME</b>
</a>
                      </form>
                    </div>
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
  <script src="addquiz.php_files/jquery.js"></script>
  <script src="addquiz.php_files/popper.js"></script>
  <script src="addquiz.php_files/bootstrap.js"></script>
  <script src="addquiz.php_files/perfect-scrollbar.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="addquiz.php_files/off-canvas.js"></script>
  <script src="addquiz.php_files/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->



</body></html>