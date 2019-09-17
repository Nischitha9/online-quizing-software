<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'techquiz');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

   $qnumber = $_REQUEST['qnumber'];
   $quiz_name=$_REQUEST['quiz_name'];
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
					<form action="updatequestion.php" method="post">
                      <h4 class="card-title">UPDATE QUESTION</h4>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Quiz Name</label>
                          <input class="form-control" name="quiz_name" value="<?php  echo"$quiz_name" ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Question Number</label>
                          <input class="form-control" name="number"  value="<?php echo"$qnumber" ?> ">
                        </div>
                           <div class="form-group">
                          <label for="exampleInputPassword1">Question</label>
                          <input class="form-control"  name="question" placeholder="Enter Question"  value="<?php
																												$query = "SELECT * FROM questions_table where quiz_name='$quiz_name' and number='$qnumber' ";
																												$var=mysqli_query($dbh,$query);
																												while ($arr=mysqli_fetch_row($var))
																												$abc=$arr[2];
																												{ echo $abc; }
																													?>">
                        </div>

                           <div class="form-group">
                          <label for="exampleInputPassword1">Option 1</label>
                          <input class="form-control" name="option1" placeholder="Option 1"value="<?php
																												$query = "SELECT * FROM questions_table where quiz_name='$quiz_name' and number='$qnumber' ";
																												$var=mysqli_query($dbh,$query);
																												while ($arr=mysqli_fetch_row($var))
																												$abc=$arr[3];
																												{ echo $abc; }
																													?>">
                        </div>
                          <div class="form-group">
                          <label for="exampleInputPassword1">Option 2</label>
                          <input class="form-control" name="option2" placeholder="Option 2"value="<?php
																												$query = "SELECT * FROM questions_table where quiz_name='$quiz_name' and number='$qnumber' ";
																												$var=mysqli_query($dbh,$query);
																												while ($arr=mysqli_fetch_row($var))
																												$abc=$arr[4];
																												{ echo $abc; }
																													?>">
                        </div>
                           <div class="form-group">
                          <label for="exampleInputPassword1">Option 3</label>
                          <input class="form-control" name="option3"placeholder="Option 3"  value="<?php
																												$query = "SELECT * FROM questions_table where quiz_name='$quiz_name' and number='$qnumber' ";
																												$var=mysqli_query($dbh,$query);
																												while ($arr=mysqli_fetch_row($var))
																												$abc=$arr[5];
																												{ echo $abc; }
																													?>">
                        </div>
                           <div class="form-group">
                          <label for="exampleInputPassword1">Option 4</label>
                          <input class="form-control"name="option4" placeholder="Option 4" value="<?php
																												$query = "SELECT * FROM questions_table where quiz_name='$quiz_name' and number='$qnumber' ";
																												$var=mysqli_query($dbh,$query);
																												while ($arr=mysqli_fetch_row($var))
																												$abc=$arr[6];
																												{ echo $abc; }
																													?>">
                        </div>

                          <label>Enter Correct Option </label>
                          <div>
                        	<input type="radio" name="correct_answer" value="1"> 1<br>
							<input type="radio" name="correct_answer" value="2"> 2<br>
							<input type="radio" name="correct_answer" value="3"> 3<br>
							<input type="radio" name="correct_answer" value="4"> 4<br>

                          </div>

                        <button type="submit" class="btn btn-success mr-2">update</button>

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
