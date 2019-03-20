<?php
session_start();
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
		</div></a></li>
		<li ><a  href="football.php">Football</a></li>
		<li  ><a  href="drama.php">Drama</a></li>
		<li><a  href="fashion.php" >Fashion</a></li>
		<li class="home"><a class="home" href="h.php">Home</a></li>
	</ul>
	</nav>
	<br><br><br><br><br>
	     <h1 style="text-align: center;color: white;font-weight: bold;font-size: 40px;">PROFILE</h1>
	<div class="news">
		<p class="h">Name : <?php
	     if(isset($_SESSION['user name']))
	     {
	     	echo $_SESSION['user name'] ;
	     }
	     else{echo "???";}
        ?>
		</p>
		<p class="h">Email : <?php
	     if(isset($_SESSION['email']))
	     {
	     	echo $_SESSION['email'] ;
	     }
	     else{echo "???";}
        ?>
		</p>
		<p class="h">Mobile : <?php
	     if(isset($_SESSION['mobile']))
	     {
	     	echo $_SESSION['mobile'] ;
	     }
	     else{echo "???";}
        ?>
		</p>
		
	</div>

</body>


</html>