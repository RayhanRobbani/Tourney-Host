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

    for($i = 1; $i < count($tournaments); $i++){
      echo '<h1>' . $tournaments[$i]['tournamentname'] . '</h1>';
      $temp = $tournaments[$i]['tournamentname'];

      $fetchteam = "SELECT teamname FROM teams WHERE tournamentname = '$temp';";
      $resultteam = mysqli_query($conn, $fetchteam);

      while($rowteam = mysqli_fetch_assoc($resultteam)){
        $teams[] = $rowteam;
      }

      for($j = 0; $j < count($teams); $j++){
        echo $teams[$j]['teamname'] . '<br>';
      }
      unset($teams);
    }
  }
?>
