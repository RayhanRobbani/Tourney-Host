<?php
  include_once 'dbc.php';

  $hostemail = $_POST['hostemail'];
  $fetchemail = "SELECT hostemail FROM tournaments WHERE hostemail = '$hostemail';";
  $resultemail = mysqli_query($conn, $fetchemail);

  $password = $_POST['password'];
  $fetchpass = "SELECT password FROM tournaments WHERE hostemail = '$hostemail' AND password = '$password';";
  $resultpass = mysqli_query($conn, $fetchpass);

  if(!$resultemail){
    echo "<p>Host not found</p>";
  } else {
      if(!$resultpass){
        echo "<p>Wrong Password</p>";
      } else {
          echo "<p>Sucess</p>";
          // while ($row = mysqli_fetch_assoc($resultemail)) {
          //   header("Location: index.html?tournament=success");
          // }
      }
  }

?>
