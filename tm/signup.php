<?php
  include("Config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $newusername = mysqli_real_escape_string($db,$_POST['name']);
	    $useremail = mysqli_real_escape_string($db,$_POST['email_id']);
      $userpassword = mysqli_real_escape_string($db,$_POST['password']);

	  $userphone= mysqli_real_escape_string($db,$_POST['phone_no']);
	  $s='0';





      $sql = "insert into account_details VALUES('$newusername','$userpassword','$useremail','$userphone','$s')";
       $result = mysqli_query($db,$sql);


         header("location: index.php");

          echo "<script type='text/javascript'>alert('$message');</script>";
      }



?>


<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"></head><body>





<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TM QUIZ</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="index_files/materialdesignicons.css">
  <link rel="stylesheet" href="index_files/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="index_files/font-awesome.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="index_files/style.css">
  <!-- endinject -->




  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">SIGN UP</h3>



              <form>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="name" placeholder="enter user name"class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email_id" placeholder="enter email id"class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" placeholder=" enter password" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Phone number</label>
                  <input type="text" name="phone_no" placeholder="phone number" class="form-control p_input">
                </div>




              </form>





			  <form role="form" method="post" >






				                    <div class="text-center">
                    <button id="saveForm" name="saveForm" type="submit" class="btn btn-primary my-4">Sign up</button>
					<BR>



          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="index_files/jquery.js"></script>
  <script src="index_files/popper.js"></script>
  <script src="index_files/bootstrap.js"></script>
  <script src="index_files/perfect-scrollbar.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="index_files/off-canvas.js"></script>
  <script src="index_files/misc.js"></script>
  <!-- endinject -->



</body></html>
