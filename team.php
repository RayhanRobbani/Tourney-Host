<?php
  include_once 'dbc.php';

  $tournamentname = $_POST['tournamentname'];
  $teamname = $_POST['teamname'];
  $teamtag = $_POST['teamtag'];
  $teamemail = $_POST['teamemail'];
  $contactteam = $_POST['contactteam'];

  $sql = "INSERT INTO teams (tournamentname, teamname, teamtag, teamemail, contactteam) VALUES ('$tournamentname', '$teamname', '$teamtag', '$teamemail', '$contactteam');";
  mysqli_query($conn, $sql);
  $sqlupdate = "UPDATE tournaments SET registeredteamnum = registeredteamnum + 1 WHERE tournamentname = '$tournamentname';";
  mysqli_query($conn, $sqlupdate);
  header("Location: index.html?team=success");
?>
