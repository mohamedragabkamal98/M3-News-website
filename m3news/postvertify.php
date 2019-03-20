<?php
if(isset($_POST['post']))
{   
   include_once 'd.php';
   session_start();
   $email=$_SESSION['email'];
   $admin="boshy@admin.com";
  $_SESSION['admin']=$admin;
   if($email==$admin)
   {
          $content=mysqli_real_escape_string($conn,$_POST["content"]);
	      $subject=mysqli_real_escape_string($conn,$_POST["subject"]);
	      $dep=mysqli_real_escape_string($conn,$_POST['department']);
        $date=mysqli_real_escape_string($conn,$_POST['date']);
	      $cks=mysqli_query($conn,"SELECT * FROM `news` WHERE `news`.`subjcet` = '$subject';");
	      $ckc=mysqli_query($conn,"SELECT * FROM `news` WHERE `news`.`content` = '$content';");
        if(mysqli_num_rows($cks)==0)
        {
          if(mysqli_num_rows($ckc)==0)
          {
	      $sql ="INSERT INTO `news` (`id`, `department`, `subjcet`, `content`, `date`) VALUES (NULL, '$dep', '$subject', '$content','$date');";
	      $ersutl = mysqli_query($conn,$sql);
	      echo "<script type='text/javascript'>
	            alert('The Post Is Added');
                 window.location="."'".$dep.".php'".";        
                  </script>";
          }
          else
          {
             echo "<script type='text/javascript'>
        	     alert('This Post Content Already Exist');
                 window.location="."'".$dep.".php'".";        
                  </script>";
          }       
        }
        else
        {
        	 echo "<script type='text/javascript'>
        	     alert('This Post Subject Already Exist');
                 window.location="."'".$dep.".php'".";        
                  </script>";
        }          

   }
	     	else{
	                echo "<script type='text/javascript'>alert('You Are Not Admin');
			         fun();
			         function fun() {
			           window.location='register.html';
			           setTimeout=('fun()',3000)
			          }
			         setTimeout(3000);        
			         </script>";
	     	}

}
	    
