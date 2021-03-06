<?php
  include_once "upcominglist.php";
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="author" content="rayhanrobbani1@gmail.com">
    <meta name="description" content="Host your very own Tournament with a few clicks, easy & simple to use. Simplify your tournament hosting with Tourney Host.">
    <meta name="keywords" content="Tournament, Tourney, Host, hosting, join tournament, create tournament, host tournament">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourney Host | Host Tournament</title>
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

    <section class="host">
      <div class="bodycontainer">
        <div class="leftcontainer">
        <form class="boxes boxFadeInLeft" action="tournament.php" method="POST">
            <h1 align="center">Tournament Info</h1>
            <label for="tournamentname">Tournament Name</label><br>
            <input class="input" type="text" id="tournamentname" name="tournamentname" required autofocus><br>
            <label for="hostname">Host Name</label><br>
            <input class="input" type="text" id="hostname" name="hostname" required><br>
            <label for="teamnum">Number of Teams</label><br>
            <select class="input" id="teamnum" name="teamnum" required>
              <option disabled selected hidden>Select</option>
              <option value="16">16</option>
            </select></br>
            <label for="startdate">Starting Date</label><br>
            <input class="input" type="date" id="startdate" name="startdate" required><br>
            <br>
            <h1 align="center">Personal Info</h1>
            <label for="hostemail">E-mail</label><br>
            <input class="input" type="email" id="hostemail" name="hostemail" placeholder="example@example.com" required><br>
            <label for="contacthost">Contact Number</label><br>
            <input class="input" type="tel" id="contacthost" name="contacthost" placeholder="01XXXXXXXXX" pattern="[0-9]{11}" required><br>
            <label for="password">Password</label><br>
            <input class="input" type="password" id="password" name="password" required><br>
            <br>
            <div>
              <input class="button" type="submit" value="Register Tournament">
            </div>
        </form>
        </div>

        <div class="rightcontainer">

          <div class="boxes boxFadeInTop">
            <h1 align="center" style="font-size:47px">Upcoming Tournaments</h1><hr>
            <?php
              upcomingtournaments();
            ?>
          </div>

        </div>

      </div>
    </section>

    <footer>
      <p>Tourney Host, Copyright &copy; 2020</p>
    </footer>

    <script src="host.js"></script>
  </body>

</html>
