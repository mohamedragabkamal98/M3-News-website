<?php
if(isset($_POST['Create']))
{
   include_once 'd.php';
    session_start();
  $admin="boshy@admin.com";
  $_SESSION['admin']=$admin;
	$email=mysqli_real_escape_string($conn,$_POST["email"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);
	$mobile=mysqli_real_escape_string($conn,$_POST["mobile"]);
    $user_name=mysqli_real_escape_string($conn,$_POST["username"]);
    $query= mysqli_query($conn,"SELECT email FROM `info` WHERE `email`='$email';");
    if(mysqli_num_rows($query)>0){
        echo "<script type='text/javascript'>alert('The Email You Entered Already Exist');
        fun();
            function fun() {
        window.location='login.html';
        setTimeout=('fun()',3000)
    }
         setTimeout(3000);        
        </script>";

    }
    else{
         $sql ="INSERT INTO `info` (`id`, `user name`, `email`, `paassword`, `mobil`) VALUES (NULL, '$user_name', '$email', '$password', '$mobile');";
      $ersutl = mysqli_query($conn,$sql);
                   $_SESSION['user name']=$user_name;
                   $_SESSION['email']=$email;
                   $_SESSION['password']=$password;
                   $_SESSION['mobile']=$mobile;
        echo "<script type='text/javascript'>
        fun();
            function fun() {
        window.location='h.php';
        setTimeout=('fun()',3000)
    }
                
        </script>";


    }
}
?>


