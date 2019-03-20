
<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
<script language="javascript" type="text/javascript">
  window.history.forward();
 </script>
<script>
function validateForm() {

      if (document.forms["login"]["email"].value == "") {
    alert("Email must be filled out");
    return false;
  }


    if (document.forms["login"]["password"].value == "") {
    alert("Password must be filled out");
    return false;
  }


}
</script>


<div class="login_page">
	<div class="form" >
		<form class="login" id="login"  onsubmit="return validateForm()" method="POST"  action="register.php">
			<p>Email</p>
			<input type="text" id="email" name="email" placeholder="Email">
			<p>Password </p>
            <input type="password" name="password"  placeholder="Password" id="password">
            <span>Remember me</span>
            <input type="checkbox" name="remember" value="remember" >
            <input type="submit" name="Create" value="LOGIN" class="create">
            <p class="message">Not Registered?  <a href="login.html" >Register</a></p>
		</form>
	</div>

</div>
</body>
</html>
<?php
      if(isset($_COOKIE['email'])){
        $email=$_COOKIE['email'];
        $password=$_COOKIE['password'];
      echo "<script type='text/javascript'>
      document.getElementById('email').value='$email';
      document.getElementById('password').value='$password';
      </script>";

      }
        ?>