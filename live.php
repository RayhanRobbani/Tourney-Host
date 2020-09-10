<?php
  include_once 'livelist.php';
  include_once "upcominglist.php";
  include_once "openlist.php";
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="author" content="rayhanrobbani1@gmail.com">
    <meta name="description" content="Host your very own Tournament with a few clicks, easy & simple to use. Simplify your tournament hosting with Tourney Host.">
    <meta name="keywords" content="Tournament, Tourney, Host, hosting, join tournament, create tournament, host tournament">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourney Host | Welcome</title>
    <link rel="icon" href="TH logo icon.png">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>

  <body>
    <header>
      <div class="headcontainer">
        <div id="branding">
          <a href="index.html"><img src="TH logo.png" alt="Tourney Host Logo" width="100px"><a>
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

    <section class="live">
      <div class="bodycontainer">

        <div class="leftcontainer">
          <div id="liveText01Area">
            <h1 id="liveText01" align="center" style="font-size:100px">Live NOW!</h1>
          </div>
          <?php
            livetournaments();
          ?>
        </div>

        <div class="rightcontainer">
          <div class="boxes boxFadeInTop">
            <h1 align="center" style="font-size:47px">Upcoming Tournaments</h1><hr>
            <?php
              upcomingtournaments();
            ?>
          </div>

          <div class="boxes boxFadeInRight">
            <h1 id="liveText02" align="center" style="font-size:51px">Open for registration!</h1><hr>
            <?php
              opentournaments();
            ?>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>Tourney Host, Copyright &copy; 2020</p>
    </footer>
  </body>

</html>
