<?php
  function upcomingtournaments(){
    include 'dbc.php';

    $fetchtournament = "SELECT * FROM tournaments;";
    $resulttournament = mysqli_query($conn, $fetchtournament);

    $tournaments = array();
    $teams = array();
    $temp = '';

    while($rowtournament = mysqli_fetch_assoc($resulttournament)){
      $tournaments[] = $rowtournament;
    }

    for($i = 1; $i < count($tournaments); $i++){
      if( (strtotime(date("Y-m-d"))) < (strtotime($tournaments[$i]['startdate'])) && $tournaments[$i]['registeredteamnum'] == $tournaments[$i]['teamnum']){
        echo '<br><p align="center" style="font-size:20px">' . $tournaments[$i]['tournamentname'] . '</p>';
      }
    }

    unset($tournaments);
    mysqli_close($conn);
  }
