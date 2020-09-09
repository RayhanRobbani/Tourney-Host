<?php
  function showlist(){
    include_once 'dbc.php';

    $fetchtournament = "SELECT tournamentname FROM tournaments;";
    $resulttournament = mysqli_query($conn, $fetchtournament);

    $tournaments = array();
    $teams = array();
    $temp = '';
    $arraylength = '';

    while($rowtournament = mysqli_fetch_assoc($resulttournament)){
      $tournaments[] = $rowtournament;
    }

    echo '<div class="leftcontainer">';
    for($i = 1; $i < count($tournaments); $i++){
      echo '<div class="boxes"><h1 align="center">' . $tournaments[$i]['tournamentname'] . '</h1><hr><br>';
      $temp = $tournaments[$i]['tournamentname'];

      $fetchteam = "SELECT teamname FROM teams WHERE tournamentname = '$temp';";
      $resultteam = mysqli_query($conn, $fetchteam);

      while($rowteam = mysqli_fetch_assoc($resultteam)){
        $teams[] = $rowteam;
      }

      for($j = 0; $j < count($teams); $j+=2){
        echo '<div class="teamrow"><span class="teams">' . $teams[$j]['teamname'] . '</span><span class="vs"><img src="vs.png" alt="Vs" width="40px"></span><span class="teams">' . $teams[$j+1]['teamname'] . '</span></div>';
      }
      echo '</div>';
      unset($teams);
    }
    echo '</div>';
  }
?>
