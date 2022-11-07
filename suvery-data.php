<!--Innan vi skriver mer PHP-kod så är det bäst att sätta på utskriften av felmessagen. 
Utan felmessage blir det svårt att koda PHP. Lägg följande kod överst i din sida mall.php.

Kod för att sätta på visning av felmessage. Läs mer på https://dbwebb.se/kunskap/kom-i-gang-med-php-pa-20-steg#fel -->
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
    <title>Suvery Data</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Notera att sökvägen blir annorlunda när du länkar in egen styling och script. 
    ".." innebär att du går upp till katalogen ovanför-->
    <link rel="stylesheet" href="../exempelkod/style/jqueryui.css">
    <link rel="stylesheet" href="../exempelkod//style/myCustom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--Notera att sökvägen blir annorlunda när du länkar in egen styling och script. 
    ".." innebär att du går upp till katalogen ovanför-->
    <script src="../exempelkod/script/jqueryui.js"></script>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="moment1.php">Moment 1</a>
        <a href="moment2.php">Moment 2</a>
        <a href="moment3.php">Moment 3</a>
        <a href="moment4.php">Moment 4</a>
        <a href="moment5.php">Moment 5</a>
        <a href="moment6.php">Moment 6</a>
        <a href="LeapYear.php" >Leap Year</a>
    <a href="suvery.php" class="active w3-yellow ">Suvery with new page</a>
    <a href="suvery2.php">Suvery with same page</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="w3-container w3-yellow" id="header">
        <h1>Survey</h1>
        <p>What is your favourite city?</p>
        <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
    </div>

    <div class="w3-padding-large w3-container">

        <div class="w3-third">
            <h3 class="w3-text-cyan"></h3>
            <div class="w3-padding-large ">
            </div>
        </div>
        <div class="w3-third">
            <h3 class="w3-text-cyan">Suvery-data</h3>
            <div class="w3-padding-large">
                <fieldset>
                    <?php
                    echo "<h4><b>Your Input will be displayed here!:</b></h4>";
                    echo "[fname] ", $_POST["fname"];
                    echo "<br>";
                    echo "[ename] ", $_POST["ename"];
                    echo "<br>";
                    echo "[email] ", $_POST["email"];
                    echo "<br>";
                    echo "[message] ", $_POST["message"];
                    echo "<br>";
                    echo "[favouriteCity] ", $_POST["favouriteCity"];
                    ?>
                </fieldset>
                <a href="suvery.php">Back to sender page</a>
            </div>
        </div>
        <div class="w3-third">
            <h3 class="w3-text-aqua"></h3>
            <div class="w3-padding-large">
            </div>
        </div>
    </div>

</body>

</html>