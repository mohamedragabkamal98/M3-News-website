<?php
session_start();
include_once 'd.php';
  $admin="boshy@admin.com";
  $_SESSION['admin']=$admin;


?>

<!DOCTYPE html>
<html>

<head>

	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="describtion" content=" web page for me ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="style.css">
	    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                if($(this).scrollTop()>0){
                    $(".navigator ul").css({"opacity":"0.5"})
                }
                else {
                    $(".navigator ul").css({"opacity":"1"})
                }

            })
            
        })
    </script>

</head>

<body>
	<nav class="navigator" >
	<ul >
		<li id="name" class="hed">M<span style="color: #FFFF00;">3</span>NEWS</li>
		<li id="name" class="hed" style="padding-left: 5px;"><img src="favicon.png"></li>
		<li ><div class="join"><a  href="logout.php">Logout</a></div></li>
		<li ><div class="join"><a  href="profile.php">
		<?php
	     if(isset($_SESSION['user name']))
	     {
	     	echo $_SESSION['user name'] ;
	     }
	     else{echo "???";}
        ?>
		</div> </a></li>
		<li ><a  href="football.php">Football</a></li>
		<li  ><a  href="drama.php">Drama</a></li>
		<li><a  href="fashion.php" >Fashion</a></li>
		<li class="home"><a class="home" href="h.php">Home</a></li>
	</ul>
	</nav>
    <br><br><br>
<?php
if(isset($_SESSION['user name']))
{
	if($_SESSION['admin']==$_SESSION['email'])
	{
	   echo 
		'</div>
	    	<div class="operation">
			<a class="op" href="delet.php">DELET POST</a>
			<a class="op" href="update.php">UPDATE POST</a>
			<a class="op" href="post.php">POST</a>
		</div>';
		
    }
}    
?>
	    <br><br><br>

    <?php
    if(isset($_SESSION['user name']))
	{
		$sql1 ="SELECT * FROM `news` WHERE `department` LIKE 'fashion' ORDER BY `id` DESC;";
		$sql2 ="SELECT * FROM `news` WHERE `department` LIKE 'football' ORDER BY `id` DESC;";
		$sql3 ="SELECT * FROM `news` WHERE `department` LIKE 'drama' ORDER BY `id` DESC;";
		$ersutl1 = mysqli_query($conn,$sql1);
		$ersutl2 = mysqli_query($conn,$sql2);
		$ersutl3 = mysqli_query($conn,$sql3);
		$rescheck1 = mysqli_num_rows($ersutl1);
		$rescheck2 = mysqli_num_rows($ersutl2);
		$rescheck3 = mysqli_num_rows($ersutl3);
		$c=1;
		
			if($rescheck1 > 0)
			{
		        while (($row = mysqli_fetch_assoc($ersutl1))&&$c<=3)
		         {
		            
					    echo 
					    '<div class="news">'.
					    "<p class='hd' style='color:white;text-align: left; margin-top:0px; '>".$row['date']."</p>".
					    "<p class='hd' style='color:white;text-align: center;float:right; margin-top:0px;border-color: yellow;border-radius:7px;border-style:solid;'>Fashion</p>".
						'<h3 class="h">'.$row['subjcet'].'</h3>'.
						'<div class="content">'.$row['content'].'</div>'.
					    '</div>';
					    $c=$c+1;
					        	
		        }


			}
            $c=1;     
			if($rescheck2 > 0)
			{   			
		        while (($row = mysqli_fetch_assoc($ersutl2))&&$c<=3)
		         {
		            
					    echo 
                        '<div class="news">'.
					    "<p class='hd' style='color:white;text-align: left; margin-top:0px; '>".$row['date']."</p>".
					    "<p class='hd' style='color:white;text-align: center;float:right; margin-top:0px;border-color: yellow;border-radius:7px;border-style:solid;'>Football</p>".
						'<h3 class="h">'.$row['subjcet'].'</h3>'.
						'<div class="content">'.$row['content'].'</div>'.
					    '</div>';
					    $c=$c+1;

		        }
            echo "<br>";
			}
			$c=1;
			if($rescheck3 > 0)
			{
				
		        while (($row = mysqli_fetch_assoc($ersutl3))&&$c<=3)
		         {
		            
					    echo 
					    '<div class="news">'.
					    "<p class='hd' style='color:white;text-align: left; margin-top:0px; '>".$row['date']."</p>".
					    "<p class='hd' style='color:white;text-align: center;float:right; margin-top:0px;border-color: yellow;border-radius:7px;border-style:solid;'>Drama</p>".
						'<h3 class="h">'.$row['subjcet'].'</h3>'.
						'<div class="content">'.$row['content'].'</div>'.
					    '</div>';
					    $c=$c+1;    	
		        }

			}
    }			
	?>
</body>


</html>