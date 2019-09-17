<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'techquiz');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

$name = $_REQUEST['name'];
$count='1';
$s='1';
$op1='0';
$op2='0';
$op3='0';
$op4='0';
$cr='0';
$s='1';
$abc='0';
$q12='0';
$q='0';
$abcd='0';


$query = "SELECT quiz_name FROM quiz_details where enable='$s'";
																	$var=mysqli_query($dbh,$query);
																    while ($arr=mysqli_fetch_row($var))	
																	$abc=$arr[0];

?>
<?php
																
$query = "INSERT INTO quiz_participants VALUES('$name','$abc',NOW(),NOW(),1,0,0,NOW(),NOW(),0)";
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
					<form action="attendquiz1.php" method="post">
                      <h4 class="card-title">ATTEND QUIZ</h4>
					  
					  
					  
				        </div>
			
<?php

$query = "SELECT quiz_name from quiz_details where enable='$s' ";
																	$var=mysqli_query($dbh,$query);																   
																   while ($srr=mysqli_fetch_row($var))
																   {
																		$abc=$srr[0];																		
																   }
?>

<?php 

$query = "UPDATE  quiz_participants set datetime1=NOW() WHERE quiz_name='$abc' AND name='$name'";
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
   <?php  $query = "SELECT set_time FROM quiz_details where quiz_name='$abc' ";
																	$var=mysqli_query($dbh,$query);
																    while ($arr=mysqli_fetch_row($var))
																	$abcd=$arr[0];
																  
																	
 ?>	
<?php
if($min>=$abcd)							
	$query = "UPDATE  quiz_participants set submit='$s' WHERE quiz_name='$abc' AND name='$name'";
	$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh))						
?>		


		
						<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: right;
  font-size: 20px;
  margin-top: 0px;
}
</style>
</head>
<body>

<p id="demo"></p>

<script>
var n=<?php echo "$abcd" ?>;
var s=<?php echo "$min" ?>;
var r=<?php echo "$sec" ?>;


var dt = new Date();
         dt.setMinutes( dt.getMinutes() + n - s );
         dt.setSeconds( dt.getSeconds()  - r );
         

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = dt - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =  "Time  " + hours + "h "
  + minutes + "m " + seconds + "s   remaining";

 //If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
	  
                     
                         
						  
					
										<?php
						
						$query = "SELECT question,option1,option2,option3,option4,correct_answer FROM questions_table  where quiz_name='$abc' and number='$count'";
															      $var=mysqli_query($dbh,$query);
															      while ($arr=mysqli_fetch_row($var))
																  {
										$q=$arr[0];
										$op1=$arr[1];
										$op2=$arr[2];
										$op3=$arr[3];
										$op4=$arr[4];
										$cr=$arr[5];
																  }
										
						?>
                        <?php echo"$count" ?>
							<div class="form-group">	  
                          <input class="form-control"name="question" type="hidden" value="<?php  echo"$q" ?>"  >
                        </div>
						<div class="form-group">	  
                          <input class="form-control"name="count" type="hidden" value="<?php  echo"$count" ?>"  >
                        </div>
						<div class="form-group">	  
                          <input class="form-control"name="name" type="hidden" value="<?php  echo"$name" ?>"  >
                        </div>
                           
                         
                            <?php echo"$q" ?>
                        </div>
                  
							<input type="radio" name="correct_answer"  value="1"> <?php echo"$op1" ?>  <br>
							<input type="radio" name="correct_answer"  value="2"> <?php echo"$op2" ?>  <br>
							<input type="radio" name="correct_answer"  value="3"> <?php echo"$op3" ?> <br>
							<input type="radio" name="correct_answer"  value="4"> <?php echo"$op4" ?> <br>
						  
                           
						
                        <button type="submit" class="btn btn-link btn-fw">Next</button>
                        
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
</body>
</html>