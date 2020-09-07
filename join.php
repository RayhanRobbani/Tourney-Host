<?php
  include_once 'dbc.php';
  $sql = "SELECT tournamentname FROM tournaments WHERE registeredteamnum < teamnum ORDER BY tournamentname ASC;";
  $result = mysqli_query($conn, $sql);
  $option = '';
  while($row = mysqli_fetch_assoc($result)){
    $option .= '<option value = "' . $row['tournamentname'] . '">' . $row['tournamentname'] . '</option>';
  }
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="author" content="rayhanrobbani1@gmail.com">
    <meta name="description" content="Host your very own Tournament with a few clicks, easy & simple to use. Simplify your tournament hosting with Tourney Host.">
    <meta name="keywords" content="Tournament, Tourney, Host, hosting, join tournament, create tournament, host tournament">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourney Host | Join Tournament</title>
    <link rel="icon" href="TH logo icon.png">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>

  <body>
    <header>
      <div class="headcontainer">
        <div id="branding">
          <a href="index.html"><img src="TH logo.png" alt="Tourney Host Logo" width="100px"></a>
        </div>
        <div>
          <h1>Tourney Host</h1>
        </div>
        <nav>
          <ul>
            <li>
                <a class="button" href="live.php">Live Tournaments!</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="join">
      <div class="bodycontainer">
        <form class="boxleft" action="team.php" method="POST">
            <h1>Team Info</h1>
            <label for="tournamentname">Select a Tournament</label><br>
            <select class="input" id="tournamentname" name="tournamentname" required autofocus>
              <option disabled selected hidden>Select</option>
              <?php
              echo "$option";
              ?>
            </select></br>
            <label for="teamname">Team Name</label><br>
            <input class="input" type="text" id="teamname" name="teamname" required><br>
            <label for="teamtag">Team Tag</label><br>
            <input class="input" type="text" id="teamtag" name="teamtag" required><br>
            <label for="teamemail">E-mail</label><br>
            <input class="input" type="email" id="teamemail" name="teamemail" placeholder="example@example.com" required><br>
            <label for="contactteam">Contact Number</label><br>
            <input class="input" type="tel" id="contactteam" name="contactteam" placeholder="01XXXXXXXXX" pattern="[0-9]{11}" required><br>
            <br>
            <div>
              <input class="button" type="submit" value="Register Team">
            </div>
        </form>
      </div>
    </section>

    <footer>
      <p>Tourney Host, Copyright &copy; 2020</p>
    </footer>
  </body>

</html>
