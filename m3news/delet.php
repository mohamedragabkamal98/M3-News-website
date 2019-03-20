<!DOCTYPE html>
<html>

<head>

	<title>Delet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="describtion" content=" web page for me ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="post.css">
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
		<li ><a  href="football.php">Football</a></li>
		<li  ><a  href="drama.php">Drama</a></li>
		<li><a  href="fashion.php" >Fashion</a></li>
		<li class="home"><a class="home" href="h.php">Home</a></li>
	</ul>
	</nav>
	<h1 class="h" style="margin-top: 100px; font-size: 50px;">DELET</h1>
	<div class="postdiv">
	   <form class="postform" method="POST"  action="deletvertify.php" >
	   	<p class="s">Subject Of The Post You Want To Delet</p>
		<textarea id="subject" class="subject" name="subject" placeholder="Enter The Subject"></textarea>
		<p class="d">Department</p>
		<select class="department" name="department">
			<option class="option1" value="fashion">Fashion</option>
			<option class="option1" value="drama">Drama</option>
			<option class="option1" value="football">Football</option>
		</select>
		<br>
        <input type="submit" name="delet" value="DELET" class="post">
	   </form>
    </div>

</body>


</html>