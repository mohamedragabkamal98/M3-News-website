<?php
include_once 'd.php';


session_start();
  $admin="boshy@admin.com";
  $_SESSION['admin']=$admin;

?>
<!DOCTYPE html>
<html>

<head>

	<title>Drama</title>
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
<script type="text/javascript" src="backNoWork.ja"></script>
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
		<li class="home" ><a class="home" href="drama.php">Drama</a></li>
		<li><a  href="fashion.php" >Fashion</a></li>
		<li ><a  href="h.php">Home</a></li>
	</ul>
	</nav>
	<div class="footback">
		<img class="footback" src="drama.jpg">

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
	
}}
?>	
		<?php
		    if(isset($_SESSION['user name']))
	{
		$sql ="SELECT * FROM `news` WHERE `department` LIKE 'drama' ORDER BY `id` DESC;";
		$ersutl = mysqli_query($conn,$sql);
		$rescheck = mysqli_num_rows($ersutl);
		$c=1;
			if($rescheck > 0)
			{
		        while (($row = mysqli_fetch_assoc($ersutl))&&$c<=15)
		         {
		            
					    echo 
					    '<div class="news">'.
					    "<p class='hd' style='color:white;text-align: left; margin-top:0px; '>".$row['date']."</p>".
						'<h3 class="h">'.$row['subjcet'].'</h3>'.
						'<div class="content">'.$row['content'].'</div>'.
					    '</div>';  
					    $c=$c+1;  	
					        	
		        }

			}}
	?>

</body>


</html>