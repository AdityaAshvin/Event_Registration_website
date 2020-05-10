<?php
$link = mysqli_connect("localhost", "root","", "event_registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Set parameters
    $title = $_POST['title'];
    $header = $_POST['header'];
    $body = $_POST['body'];

$sql = "INSERT INTO events (title, header, body) VALUES ('$title', '$header', '$body')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>


