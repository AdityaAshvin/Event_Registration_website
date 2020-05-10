<html>
<head>
       <title> Sign Up and Login Page </title>
       <link rel="stylesheet" type="text/css" href="login_style.css">
       <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Custom Fonts -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
<h1> Welcome ADMIN </h1>
</div>
<div class="main">
<div class="container">
    <div class="Login-box">
     <div class="row">
     <div class="col-md-6 login-left">
         <h2> Login Here </h2>
         <form action="admin_login_and_authentication.php" method="post">
          <div class="form-group">
             <label><h5>Username</h5></label>
             <input type="text" name="user" class="form-control" required>
             </div>
          <div class="form-group">
              <label><h5>password</h5></label>
             <input type="password" name="password" class="form-control" required>
             </div>
             <button type="submit" class="btn btn-primary"> Login </button>
         </form>
     </div>

<div class="col-md-6 login-right">                                
         <h2> Register Here </h2>
         <form action="admin_registration.php" method="post">
          <div class="form-group">
             <label><h5>Username</h5></label>
             <input type="text" name="user" class="form-control" required>
             </div>
          <div class="form-group">
              <label><h5>email-id</h5></label>
             <input type="email" name="email" class="form-control" required>
             </div>
          <div class="form-group">
              <label><h5>password</h5></label>
             <input type="password" name="password" class="form-control" required>
             </div>
             <button type="submit" class="btn btn-primary"> Register </button>
</form>
</div>     
</div>  
<footer class="footer fixed-bottom">
<h4>This website is created with <i class="fa fa-heart"></i> by Aditya Ashvin</h4></footer>                                                                            
</body>
