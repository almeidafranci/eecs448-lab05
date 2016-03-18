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
        <h1>User Posts</h1>
        <table class="table">
          <tr>
            <th>Post Content</th>
          </tr>
            <?php 
              $id = $_POST['user_id'];
              include 'conex.php';
              $query = "SELECT * FROM posts WHERE author_id = '$id'";

              if ($result = $mysqli->query($query)) {

                  /* fetch associative array */
                  while ($row = $result->fetch_assoc()) {
                      echo '<tr><td>'.$row["content"].'</td></tr>';
                  }

                  /* free result set */
                  $result->free();
              }

              /* close connection */
              $mysqli->close();
            ?>
        </table>
      </div>

    </div>
  </body>
</html>

