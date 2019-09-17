<?php
   include("Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  $s='1';
	   
      
      $sql = "SELECT email_id FROM account_details WHERE name = '$myusername' and password = '$mypassword' and admin='$s'";
       $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index1.html");
      }else {
          

          $message = "Your Login Name or Password is invalid";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
   }
?>



<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"></head><body>
      
   



<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
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
              <h3 class="card-title text-left mb-3">Admin Login</h3>
          
			  <form role="form" method="post" >
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni"></i></span>
                      </div>
                      <input name="name" class="form-control" placeholder="Admin Name" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend"><span class="input-group-text"><em></em></span></div>
                      <input  name="password" class="form-control"  id="customCheckLogin" placeholder="Password" type="password">
                    </div>
                  </div>
				                    <div class="text-center">
                    <button id="saveForm" name="saveForm" type="submit" class="btn btn-primary my-4">Sign in</button>
                  </div>
            </div>
			
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