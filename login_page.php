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
if (isset($_SESSION['use']))   // Checking whether the session is already there or not 
// True header redirect to the secret page directly 
{
    header("Location:secret_page.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
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
        <a href="login_page.php" class="active w3-green">Login Page</a>
        <a href="my_birthday_reminder_app.php">Birthday Remander</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="w3-container w3-green" id="header">
        <h1>Login Page</h1>
        <p>welcome </p>
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
            <div class="w3-padding-large w3-border w3-hover-border-green">
                <form action="" method="post">
                    <?php
                    // Checking whether the user clicked login button or not 
                    if (isset($_POST['login'])) {

                        // Get and set variables from from's input
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];

                        // Check if user and password are equal to default   
                        if ($_POST['user'] == "vicky" && $_POST['pass'] == "1234") {

                            // Set $_SESSION variables
                            $_SESSION['use'] = "vicky";
                            $_SESSION['pass'] =  "1234";

                            // On Successful Login redirects to secret_page.php
                            echo '<script type="text/javascript"> window.open("secret_page.php","_self");</script>';
                        } else {
                            echo "<br>invalid UserName or Password<br><br>";
                        }
                    }
                    ?>
                    <label> User Name:</label><br>
                    <input type="text" name="user" placeholder="vicky"> <br><br>
                    <label> Password: </label><br>
                    <input type="password" name="pass" placeholder="1234"> <br><br><br>
                    <input type="submit" name="login" value="LOGIN">
                </form>
            </div>
        </div>
        <div class="w3-third">
            <h3 class="w3-text-teal"></h3>
            <div class="w3-padding-large">
            </div>
        </div>
    </div>
</body>

</html>