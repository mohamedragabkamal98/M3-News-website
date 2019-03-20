	  
<?php
session_start();
session_destroy();

unset($_SESSION['user name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['mobile']);
echo "<script language='javascript' type='text/javascript'>alert('You Are Logout');
window.history.forward();
fun();
    function fun() {
window.location='register1.php';
setTimeout=('fun()',3000)
}
 setTimeout(3000);        
</script>";


?>
