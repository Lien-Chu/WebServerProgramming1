<!--Innan vi skriver mer PHP-kod så är det bäst att sätta på utskriften av felmeddelanden. 
Utan felmeddelande blir det svårt att koda PHP. Lägg följande kod överst i din sida mall.php.

Kod för att sätta på visning av felmeddelande. Läs mer på https://dbwebb.se/kunskap/kom-i-gang-med-php-pa-20-steg#fel -->
<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

session_start();   // Session starts with the help of this function 
if (isset($_SESSION['use']))   // Checking whether the session is already there or not 
// True header redirect to the home page directly 
{
    header("Location:home.php");
}

if (isset($_POST['login']))   // Checking whether the user clicked login button or not 
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "vicky" && $pass == "1234")  // Username is set to "vicky" and password is set to 1234 by default     
    {
        $_SESSION['use'] = $user;
        // On Successful Login redirects to home.php
        echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
    } else {
        echo "invalid UserName or Password";
    }
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
        <a href="welcome_back.php">Welcome Back</a>
        <a href="login_page.php" class="active w3-green">Login Page</a>
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
            <div class="w3-padding-large w3-border w3-hover-border-aqua">
                <form action="" method="post">
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