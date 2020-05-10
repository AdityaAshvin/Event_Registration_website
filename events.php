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
        <link rel="stylesheet" type="text/css" href="style3.css">
        <link rel="stylesheet" type="text/css"
         href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <h1>Welcome <?php echo strtoupper($_SESSION['user'])?><h1>
        <h2>The participants that are attending the event are,</h2>
        <style>
            table,tr,th,td
            {
                border: 1px solid red;
            }
        </style>
    </head>
    <body>
              <table>
                <tr>
                    <th>Serial Number</th>
                    <th>username</th>
                    <th>email-id</th>
                </tr>

      <!-- filling up the table by taking values from the database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <form action="Admin_Registration_and_Login_page.php" method="post">
        <button type="submit" class="btn btn-success"> Logout </button>

        </form>
        </form>
        <form action="http://localhost/phpmyadmin/sql.php?db=event_registration_participant&table=lists&pos=0" method="post">
        <button type="submit" class="btn btn-primary"> ADD or REMOVE participants </button><br>

        </form>
        </form>
        <form action="LandingPage.html" method="post">
        <button type="submit" class="btn btn-success"> HOMEPAGE </button>

        </form>
        
        
    </body>
</html>
