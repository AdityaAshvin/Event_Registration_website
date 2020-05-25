<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Dashboard</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="dashboard_style.css">
    <link rel="stylesheet" type="text/css"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h4>Welcome <?php session_start(); echo strtoupper($_SESSION['username'])?><h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h4>Events</h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Participant_Login_and_Registration_page.php"><h4>Logout</h4></a>
      </li>
    </ul>
  </div>
</nav>

<?php


$query = "SELECT * FROM events";
$search_result = Table($query);


// function to connect and execute the query
function Table($query)
{
    $connect = mysqli_connect("localhost", "root", "", "event_registration");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<div class= "container my-3">
  <h1 class="text-center my-3"> Upcoming Events </h1>
  <div class="row">
  
    <?php while($row = mysqli_fetch_assoc($search_result)){

    $title = $row['title'];
    $body = $row['body'];
    echo '<div class= "col-md-4 my-2">
    <div class="card" style="width: 18rem;">
    <img src="https://source.unsplash.com/1600x900/?' .$title. '" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">' .$title. '</h5>
    <p class="card-text"> ' . substr($body, 0,100). '...</p>
    <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div> ';

}

?>

<footer class="footer fixed-bottom">
<h4>This website is created with <i class="fa fa-heart"></i> by Aditya Ashvin</h4>
</footer> 
            
</body>

</html>
