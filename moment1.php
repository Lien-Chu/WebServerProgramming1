<!--Innan vi skriver mer PHP-kod så är det bäst att sätta på utskriften av felmeddelanden. 
Utan felmeddelande blir det svårt att koda PHP. Lägg följande kod överst i din sida mall.php.

Kod för att sätta på visning av felmeddelande. Läs mer på https://dbwebb.se/kunskap/kom-i-gang-med-php-pa-20-steg#fel -->
<?php
    error_reporting(-1);              // Report all type of errors
    ini_set('display_errors', 1);     // Display all errors 
    ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
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
    <a href="moment1.php" class="active w3-light-blue">Moment 1</a>
    <a href="moment2.php">Moment 2</a>
    <a href="moment3.php">Moment 3</a>
    <a href="moment4.php">Moment 4</a>
    <a href="moment5.php">Moment 5</a>
    <a href="moment6.php">Moment 6</a>
    <a href="leapYear.php">Leap Year</a>
    <a href="suvery.php">Suvery with new page</a>
    <a href="suvery2.php">Suvery with same page</a>
    <a href="welcome_back.php">Welcome Back</a>
    <a href="login_page.php">Login Page</a>
    <a href="my_birthday_reminder_app.php">Birthday Reminder</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="w3-container w3-light-blue" id="header">
  <h1>Moment 1</h1> 
  <p>Installation och Aktiveringsuppgift</p> 
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-third">
    <h3 class="w3-text-light-blue">Göra en php sida</h3>
    <div class="w3-padding-large w3-border w3-hover-border-light-blue">
      <p>
        Server-sidan innehåller PHP-konstruktionen och när webbläsaren ser sidan 
        så finns det bara HTML-kod. Det är bra att ha koll på dessa två varianter av källkod, dels på serversidan 
        och dels i webbläsaren.
      </p>
      <p>
        Skillnaden mellan en fil med en hemsida som slutar med .html och sidan som slutar på ändelsen .php. Är att den andra
        körs genom PHP’s preprocessor. 
        När preprocessorn hittar PHP-taggar, det vill säga <b>&lt;?php (starttag) och ?&gt; (sluttag)</b>, så tolkas detta 
        som PHP-kod och exekveras. Allt som man då skriver ut i sin PHP-kod hamnar i den slutliga HTML-koden och 
        skickas till webbläsaren.
      </p>
      <p>
      Man går in i “PHP-läge” med starttaggen <b>&lt;?php</b>, därefter tolkas allt som PHP-kod. 
      PHP-läget avslutas med en PHP sluttag <b>?&gt;</b>. Därefter kan man skriva vanlig HTML-kod igen. 
      På detta sätt kan man växla mellan HTML och PHP.      </p>
      <?php
        // PHP starttag, efter denna så kommer PHPkod.
        // Här skriver man sin PHP-kod.
        // Nu kommer PHP sluttag.
      ?>
      </p>
    </div>
  </div>

  <div class="w3-third">
    <h3 class="w3-text-light-blue">Hello World</h3>
    <div class="w3-padding-large w3-border w3-hover-border-light-blue">
      <h1>Min första sida i PHP</h1>
      <?php echo "<p>Hello World from PHP.</p>"; ?>
    </div>
  </div>

  <div class="w3-third">
    <h3 class="w3-text-light-blue">Felutskrifter</h3>
    <div class="w3-padding-large w3-border w3-hover-border-light-blue">
      <p>
        Innan vi skriver mer PHP-kod så är det bäst att sätta på utskriften av felmeddelanden. 
        Utan felmeddelande blir det svårt att koda PHP. 
      </p>
      <p>
      Följande kod hittar du överst i denna sida:
      </p>
      <pre>
&lt;?
error_reporting(-1);              
// Report all type of errors
ini_set('display_errors', 1);     
// Display all errors
ini_set('output_buffering', 0);   
// Do not buffer outputs, write directly
?&gt;
      </pre>
    </div>
  </div>
</div>

</body>
</html>