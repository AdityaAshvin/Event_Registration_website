<?php
$link = mysqli_connect("localhost", "root", "", "event_registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO admin (username, email, password) VALUES (?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
    
    // Set parameters
    $username = $_REQUEST['user'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        header('Location:admin_registration_successfull.html');
    } else{
        header('Location:admin_registration_failed.html');
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
$duplicate=mysqli_query($link,"select * from admin where username='$user' or email='$email'");
if (mysqli_num_rows($duplicate)>0)
{
header("Location: admin_registration_failed.html");
}
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?>
