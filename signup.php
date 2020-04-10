<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cinema_db';
$link = mysqli_connect($servername,$username,$password,$dbname);
if(!$link){
    die('Could not Connect My Sql:' .mysql_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="cinetix.png" type="image/png">
<link rel="stylesheet" href="style/login.css">
<title>Sign Up-CineTix</title>
</head>
<body style= "background:#3a4660;"><center>
<div class="header"> <h1>Sign Up</h1> </div>
<form  method="POST" action="homecopy.php" >
    <div class="input-group">
		<label>First name </label>
		<input type="text" name="fname" required>
	</div>
	<div class="input-group">
		<label>Last name</label>
		<input type="text" name="lname" required>
	</div>
	<div class="input-group">
		<label>Mobile Number</label>
		<input type="text" name="mobile" maxlength="10" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" required></div>
	<div class="input-group">
		<label>Password (Min. 6 characters)</label>
		<input type="password" name="psw" minlength="6" required></div>
	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="psw_2" minlength="6" required>
  	</div>	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="btn">Sign Up</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	
	<?php
if(isset($_POST['btn']))
{
	$fname=$email=$mobile="";
	$fnErr=$emailErr=$mobErr="";

	$fname=$_POST["fname"];
    if(!preg_match("/^[a-zA-Z]*$/",$fname)){
		$fnErr="Name can only contain letters and white spaces";
		echo "<script type='text/javascript'>alert('$fnErr');</script>";
	}
	$email=$_POST["email"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$emailErr="You enter invalid email";
		echo "<script type='text/javascript'>alert('$emailErr');</script>";
	}
	$mobile = $_POST['mobile'];
    if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $mobile)) {
        $mobErr = 'Phone Number can only contain numbers and white spaces';
        echo "<script type='text/javascript'>alert('$mobErr');</script>";
    }

    $qu="INSERT INTO signup(f_name, l_name,mobile,email,password) VALUES ('".$_POST['fname']."','".$_POST["lname"]."',
									'".$_POST["mobile"]."','".$_POST["email"]."','".$_POST["psw"]."')";
	if(mysqli_query($link,$qu))
	{
		header("Location:homecopy.php");
	}
}

?>
</form>
</center>


</body>
</html>                    