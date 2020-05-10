<?php

session_start();

$query = "SELECT * FROM participant";
$search_result = Table($query);


// function to connect and execute the query
function Table($query)
{
    $connect = mysqli_connect("localhost", "root", "", "event_registration");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Participants List</title>
        <link rel="stylesheet" type="text/css" href="users_style.css">
        <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            table,tr,th,td
            {
                border: 2px solid black;
                margin-left: 300px;
                margin-top: 50px;
                text-align:center;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h4>Welcome <?php echo strtoupper($_SESSION['user'])?><h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h4>Home</h4> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="events.php"><h4>Events</h4></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="users.php"><h4>Users</h4></a>
      </li>
    </ul>
  </div>
</nav>
<div class="header">
        <h1>List of  participants who have registered</h1>
        </div>
    <div class="container">
              <table>
                <tr>
                    <th><h3>Serial Number</h3></th>
                    <th><h3>Username</h3></th>
                    <th><h3>Email-id</h3></th>
                </tr>

      <!-- filling up the table by taking values from the database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                   <td><h5><?php echo $row['id'];?></h5></td>
                    <td><h5><?php echo $row['username'];?></h5></td>
                    <td><h5><?php echo $row['email'];?></h5></td>
                </tr>
                <?php endwhile;?>
            </table>
            </div>
<footer class="footer fixed-bottom">
<h4>This website is created with <i class="fa fa-heart"></i> by Aditya Ashvin</h4></footer>
    </body>
</html>
