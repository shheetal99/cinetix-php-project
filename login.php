<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'cinema_db';
$link=mysqli_connect($servername,$username,$password,$dbname);
if(!$link){
    die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['email']))
{
    $uname=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM signup where email='".$uname."' AND password='".$pass."' limit 1";
    $result = mysqli_query($link,$sql);

    if(mysqli_num_rows($result)==1)
	{
		header("Location:homecopy.php");
    }
    else{
        $Err="Your email or password is incorrect";
        echo "<script type='text/javascript'>alert('$Err');</script>";
    }
}
?>
<html>
<head>
<link rel="icon" href="cinetix.png" type="image/png">
<link rel="stylesheet" href="style/login.css">
<title>Login-Cinetix</title>
</head>		
<body style= "background:#3a4660;">
<div class="header"><h1>Login</h1></div>
   <center>
   <form method="post" action="homecopy.php">    
      <div class="input-group">
  		<label>Email ID</label>
  		<input type="text" name="email" required>
  	  </div><br>
  	  <div class="input-group">
  		<label>Password</label>
  		<input type="password" name="pass" required>
      </div>
      <div class="fp"><a href="#">Forgot password?</a></div>
      <br>  
  	  <div class="input-group">
  		<button type="submit" class="btn" name="submit">Login</button>
  	  </div>
  	  <p>
  		Don't have an account yet? <a href="signup.php">Sign up</a>
  	  </p>
    </form>
    </center>
</body>
</html>