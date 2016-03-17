<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="EECS 448 - Spring 2016">
    <meta name="author" content="Francinaldo Almeida" >

    <title>Francinaldo Almeida - EECS 448 Lab 05 Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">EECS 448 - Lab 05</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="CreateUser.html">Create User</a></li>
            <li><a href="CreatePost.html">Create Post</a></li>
            <li><a href="AdminHome.html">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div>
        <h1>Users</h1>
        <table class="table">
          <tr>
            <th>User ID</th>
          </tr>
          <tr>
            <?php 
              include 'conex.php';
              $query = "SELECT user_id FROM users";

              if ($result = $mysqli->query($query)) {

                  /* fetch associative array */
                  while ($row = $result->fetch_assoc()) {
                      echo '<td>'.$row["user_id"].'</td>';
                  }

                  /* free result set */
                  $result->free();
              }

              /* close connection */
              $mysqli->close();
            ?>
          </tr>
        </table>
      </div>

    </div>
  </body>
</html>

