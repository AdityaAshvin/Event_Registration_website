<?php  
session_start();
require('db_connect1.php');

if (isset($_POST['user']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['user'];
$password = $_POST['password'];
}
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `participant` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username']=$username;
header('location:participant_dashboard.php');
}else{
echo "Invalid Login Credentials";
header('location:Participant_Login_and_Registration_page.php');
}

?>