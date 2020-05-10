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

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h4>Welcome <?php session_start(); echo strtoupper($_SESSION['user'])?><h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h4>Home</h4> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h4>Events</h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="users.php"><h4>Users</h4></a>
      </li>
    </ul>
  </div>
</nav>

<div class="col-md-6 login-left">
<div class="container">
<h2> Add a new Event </h2>
         <form action="adding_events.php" method="post">
          <div class="form-group">
             <label><h5>Title</h5></label>
             <input type="text" name="title" class="form-control" required>
             </div>
          <div class="form-group">
              <label><h5>Header</h5></label>
             <input type="text" name="header" class="form-control" required>
             </div>
             <label><h5>Body</h5></label>
          <div class="form-group">
             <textarea name="body" cols="77" rows="5" class="form-control"></textarea>
             </div>
             <button type="submit" class="btn btn-primary"> Proceed </button>
</div>
</div>

<footer class="footer fixed-bottom">
<h4>This website is created with <i class="fa fa-heart"></i> by Aditya Ashvin</h4></footer> 
            
</body>

</html>
