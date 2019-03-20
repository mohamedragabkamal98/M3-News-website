<?php

if(isset($_POST['Create']))
{
        session_start();
           include_once 'd.php';
           $admin="boshy@admin.com";
          $_SESSION['admin']=$admin;
        $email=mysqli_real_escape_string($conn,$_POST["email"]);
        $password=mysqli_real_escape_string($conn,$_POST["password"]);
        $query= mysqli_query($conn,"SELECT * FROM `info` WHERE `email`='$email';");
        $pwd=mysqli_query($conn,"SELECT 'password' FROM `info` WHERE `email`='$email';");
        if(mysqli_num_rows($query)>0)
        {
           if($row=mysqli_fetch_assoc($query))
           { 

            if ($password!=$row['password']) {
                echo "<script type='text/javascript'>alert('The password You Entered Is Incorrect!!');
                        fun();
                        function fun() 
                        {
                        window.location='register1.php';
                        setTimeout=('fun()',3000)
                        }
                        setTimeout(3000);        
                        </script>";
              }
              elseif($password==$row['password'])
              {
                   $_SESSION['user name']=$row['user name'];
                   $_SESSION['email']=$row['email'];
                   $_SESSION['password']=$row['password'];
                   $_SESSION['mobile']=$row['mobil'];
                   if(isset($_POST["remember"]))
                   {
                    setcookie("email",$_SESSION['email'],time()+31556926,'/');
                    setcookie("username",$_SESSION['user name'],time()+31556926,'/');
                    setcookie("password",$_SESSION['password'],time()+31556926,'/');
                    setcookie("mobil",$_SESSION['mobile'],time()+31556926,'/');
                   }


               echo "<script type='text/javascript'>
                        window.location='h.php';        
                        </script>"; 

              }

            
          }

        }
        else
        {
                echo "<script type='text/javascript'>alert('The Email You Entered Is Not Exist');
                fun();
                function fun()
                {
                    window.location='register1.php';
                    setTimeout=('fun()',3000)
                }
                setTimeout(3000);        
                </script>";
       }

}
?>


