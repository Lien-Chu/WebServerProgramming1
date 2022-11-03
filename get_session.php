<!--Innan vi skriver mer PHP-kod så är det bäst att sätta på utskriften av felmeddelanden. 
Utan felmeddelande blir det svårt att koda PHP. Lägg följande kod överst i din sida mall.php.

Kod för att sätta på visning av felmeddelande. Läs mer på https://dbwebb.se/kunskap/kom-i-gang-med-php-pa-20-steg#fel -->
<?php
    error_reporting(-1);              // Report all type of errors
    ini_set('display_errors', 1);     // Display all errors 
    ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
?>
<?php
  session_start(); // Startar sessionen
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Moment 1</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="myStyle/myCustom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="script/jqueryui.js"></script>
  <script src="script/myScript.js"></script> 
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="moment1.php">Moment 1</a>
    <a href="moment2.php">Moment 2</a>
    <a href="moment3.php">Moment 3</a>
    <div class="dropdown">
    <button class="dropbtn active w3-cyan">Moment 4
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="moment4.php">Moment 4</a>
      <a href="start_session.php">Start Session</a>
      <a href="get_session.php">Get Session variables</a>
      <a href="print_session.php">Print Session</a>
      <a href="destroy_session.php">Destroy Session</a>
      <a href="create_cookie.php">Create/Retrieve Cookie</a>
      <a href="modify_cookie.php">Modify Cookie</a>
      <a href="delete_cookie.php">Delete Cookie</a>
      <a href="check_if_cookie.php">Check Cookie Enabled</a>
    </div>
  </div>
    <a href="moment5.php">Moment 5</a>
    <a href="moment6.php">Moment 6</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<div class="w3-container w3-cyan" id="header">
  <h1>Moment 4</h1> 
  <p>Cookies och Sessions</p>
  <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-half">
      <h3 class="w3-text-aqua">Get Session Variables</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <?php
        echo "<b>Session variables:</b><br>";
        echo "First Name: ", $_SESSION["fname"], "<br>";
        echo "Last Name: ", $_SESSION["lname"], "<br>";
        echo "Password: ", $_SESSION["passw"], "<br>";
        echo "Session Name: ", $_SESSION["sessname"];
      ?>
    </div>
  </div>
  <div class="w3-half">
  </div>
</div>


</body>
</html>