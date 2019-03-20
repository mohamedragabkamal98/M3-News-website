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
	<nav class="navigator">
	<ul>
		<li id="name" class="hed">M<span style="color: #FFFF00;">3</span>NEWS</li>
		<li id="name" class="hed" style="padding-left: 5px;"><img src="favicon.png"></li>
		<li  ><div class="join"><a href="register1.php">SIGN IN</a></div></li>
		<li class="home" ><a class="home" href="">Home</a></li>
	</ul>
	</nav>
    <div class="f1heddiv">
    	<h1 class="f1hed">Welcome To Our M3News Page</h1>
    </div>
    <div class="alldes">
    <div class="dess">
    	<span class="dess1" >FASHION</span>
    	<span class="dess1" >FOOTBALL</span>
    	<span class="dess1">DRAMA</span>
    </div>
    <div class="im">
    	<img class="im1" src="fashionb.jpg">
    	<img class="im1" src="footballb.jpg">
    	<img class="im1" src="dramab.jpg">
    </div>
    <div class="des">
    	<span class="des1">Find Out All New Hacks In The Fashion World</span>
    	<span class="des2">Find Out All New News In The Green Field</span>
    	<span class="des3">Find Out All New News And Secrets And All About The Small Screen </span>
    </div>
    </div>
</body>


</html>