<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'techquiz');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
$name = $_REQUEST['name'];
$count=  $_REQUEST['count'];
$question=  $_REQUEST['question'];
$correct_answer=  $_REQUEST['correct_answer'];
$s='1';
$op1='0';
$op2='0';
$op3='0';
$op4='0';
$cr='0';
$r='0';
$abc='0';
$q12='0';
$q='0';
$count=$count+1;
$xyz='0';


 $query = "SELECT quiz_name FROM quiz_details where enable='$s' ";
																	$var=mysqli_query($dbh,$query);
																    while ($arr=mysqli_fetch_row($var))
																	$abc=$arr[0];
																
						
?>
<?PHP
$query = "SELECT correct_answer FROM questions_table where question='$question' and quiz_name='$abc'";
																	$var=mysqli_query($dbh,$query);
																    while ($arr=mysqli_fetch_row($var))	
																	$xyz=$arr[0];

	?>	
 	
<?php	

if($correct_answer==$xyz)
{
	
$query = "UPDATE  quiz_participants set score=(score+1) WHERE quiz_name='$abc' AND name='$name' AND submit='$r'";
$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
}
 ?>
 
 	<?php
						
		$query = "SELECT no_of_questions  FROM quiz_details  where quiz_name='$abc'";
		$var=mysqli_query($dbh,$query);
		while ($drr=mysqli_fetch_row($var))
		$total_questions=$drr[0];							
	?>
 
<?php 

$query = "UPDATE  quiz_participants set datetime1=NOW(),submit='$s' WHERE quiz_name='$abc' AND name='$name'";
$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh))

?>
<?php

$query = "SELECT datetime,datetime1,submit FROM quiz_participants where name='$name' and quiz_name='$abc' ";
																	$var=mysqli_query($dbh,$query);																   
																   while ($srr=mysqli_fetch_row($var))
																   {
																		$now12=$srr[0];
																		$now1=$srr[1];
																		$submit=$srr[2];
																   }

$diff=strtotime($now1) - strtotime($now12);
$min=$diff/60;
if($min<=0)
{
	$min=0;
}

$sec=$diff%60;
if($sec<=0)
{
		$sec=0;
}
?>
<?php 

$query = "UPDATE  quiz_participants set time1=$diff WHERE quiz_name='$abc' AND name='$name'";
$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh))

?>
<?php
						
		$query = "SELECT score  FROM quiz_participants  where quiz_name='$abc' and name='$name'";
		$var=mysqli_query($dbh,$query);
		while ($drr=mysqli_fetch_row($var))
		$score=$drr[0];							
	?>

<!DOCTYPE html>
<!-- saved from url=(0121)file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/tables/bootstrap-table.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="index1_files/materialdesignicons.css">
  <link rel="stylesheet" href="index1_files/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="index1_files/jqvmap.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="index1_files/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/tables/images/favicon.png">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/index.html"><img src="index1_files/logo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/index.html"><img src="index1_files/logo-mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">


        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>




          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="file:///C:/Users/SH0C83033/Desktop/project/060%20PurpleAdmin-Free-Admin-Template-master/pages/tables/bootstrap-table.html#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
      </div>
    </nav>




    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
		  <!--
            <li class="nav-item">
              <a class="nav-link" href="addquiz.html">
                <span class="menu-title">CONDUCT NEW QUIZ </span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="report.php" aria-expanded="false" aria-controls="ui-basic">
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
              -->


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
                     <h4 class="card-title"></h4>
						<?php
						echo"you have successfully submitted quiz";
						?>
						<br>
						<?php
						echo"your score is:  $score"						
						?>

					  <form action="user.php" method="post">
                      <form class="forms-sample">
                        <div class="form-group">
                          <input class="form-control"name="name" type="hidden" value="<?php  echo"$name" ?>"  >
                        </div>

                        <button type="submit" class="btn btn-success mr-2">HOME</button>





                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-12 stretch-card">


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