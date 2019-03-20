<?php
if(isset($_POST['delet']))
{   
   include_once 'd.php';
   session_start();
   $email=$_SESSION['email'];
   $admin="boshy@admin.com";
   if($email==$admin)
   {     
        $subject=mysqli_real_escape_string($conn,$_POST["subject"]);
	    $dep=mysqli_real_escape_string($conn,$_POST['department']);
   	    $ck=mysqli_query($conn,"SELECT * FROM `news` WHERE `news`.`subjcet` = '$subject';");
        if(mysqli_num_rows($ck)>0)
        {
          
	      $sql ="DELETE FROM `news` WHERE `news`.`subjcet` = '$subject';";
	      $ersutl = mysqli_query($conn,$sql);
	      echo "<script type='text/javascript'>
	            alert('DELETE is done');
                 window.location="."'".$dep.".php'".";        
                  </script>";
        }          
        else
        {
        	echo "<script type='text/javascript'>
	            alert('Not Found This Post');
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
	    
