<!--Innan vi skriver mer PHP-kod så är det bäst att sätta på utskriften av felmeddelanden. 
Utan felmeddelande blir det svårt att koda PHP. Lägg följande kod överst i din sida mall.php.

Kod för att sätta på visning av felmeddelande. Läs mer på https://dbwebb.se/kunskap/kom-i-gang-med-php-pa-20-steg#fel -->
<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
?>

<?php
session_start();   // Session starts with the help of this function 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hidden Page</title>
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
    <div class="w3-container w3-orange" id="header">
        <h1>Hidden Page</h1>
        <p>Your Secret's Safe With Me! </p>
        <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
    </div>

    <div class="w3-padding-large w3-container">
        <div class="w3-third">
            <h3 class="w3-text-teal"></h3>
            <div class="w3-padding-large ">
            </div>
        </div>
        <div class="w3-third">
            <h3 class="w3-text-teal"></h3>
            <div class="w3-padding-large w3-border w3-hover-border-orange">
                <?php
                if (!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
                {
                    header("Location:Login_page.php");
                }
                // After the page reloads, print out message
                echo "Hey ";
                echo $_SESSION['use'];
                echo "! Your Secret is Safe With Us!!<br><br>";
                // Set a link to access logout.php    
                echo "<button><a href='logout.php'style='text-decoration:none;'> Logout</a></button> ";
                ?>
                <div class="w3-third">
                    <h3 class="w3-text-teal"></h3>
                    <div class="w3-padding-large">
                    </div>
                </div>
            </div>
</body>

</html>