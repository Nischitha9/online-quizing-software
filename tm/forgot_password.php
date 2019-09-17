<?php
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
	$connection=new mysqli("localhost","root","","techquiz");
if($_POST)
{
$email=$_POST['email_id'];
$selectquery=mysqli_query($connection,"select * from account_details where email_id='{$email}'") or die(mysqli_error($connection));
$count=mysqli_num_rows($selectquery);
echo $count;
}
?>


<html>
	<body>
		<form method="post">
			Email : <input type="email" name="email_id">
			<br/>
			<input type="submit">
		</form>

</body>
</html>