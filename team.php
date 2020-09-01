<?php
  include_once 'dbc.php';

  $tournamentname = $_POST['tournamentname'];
  $teamname = $_POST['teamname'];
  $teamtag = $_POST['teamtag'];
  $teammail = $_POST['teammail'];
  $contactteam = $_POST['contactteam'];

  $sql = "INSERT INTO teams (tournamentname, teamname, teamtag, teammail, contactteam) VALUES ('$tournamentname', '$teamname', '$teamtag', '$teammail', '$contactteam');";
  mysqli_query($conn, $sql);
  header("Location: index.html?team=success");
?>
