<?php  
session_start();
 require('db_connect.php');

if (isset($_POST['user']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['user'];
$password = $_POST['password'];
}
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM admin WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['user']=$username;
header('location:index.php');
}else{
echo "Invalid Login Credentials";
header('location:Admin_Registration_and_Login_page.php');
}

?>