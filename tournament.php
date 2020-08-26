<?php
  include_once 'dbc.php';

  $tournamentname = $_POST['tournamentname'];
  $hostname = $_POST['hostname'];
  $teamnum = $_POST['teamnum'];
  $startdate = $_POST['startdate'];
  $hostemail = $_POST['hostemail'];
  $contacthost = $_POST['contacthost'];
  $password = $_POST['password'];

  $sql = "INSERT INTO tournaments (tournamentname, hostname, teamnum, startdate, hostemail, contacthost, password) VALUES ('$tournamentname', '$hostname', '$teamnum', '$startdate', '$hostemail', '$contacthost', '$password');";
  mysqli_query($conn, $sql);
  header("Location: index.html?tournament=success");

?>
