<!--Innan vi skriver mer PHP-kod så är det bäst att sätta på utskriften av felmeddelanden. 
Utan felmeddelande blir det svårt att koda PHP. Lägg följande kod överst i din sida mall.php.

Kod för att sätta på visning av felmeddelande. Läs mer på https://dbwebb.se/kunskap/kom-i-gang-med-php-pa-20-steg#fel -->
<?php
    error_reporting(-1);              // Report all type of errors
    ini_set('display_errors', 1);     // Display all errors 
    ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
?>
<?php
if (isset($_SESSION['namn'])) {
  session_start(); // Startar sessionen
  $_SESSION['namn'] = "test";
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Moment 4</title>
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
      <a href="counter.php">Övning 1</a>
    </div>
  </div>
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

<div class="w3-container w3-cyan" id="header">
  <h1>Moment 4</h1> 
  <p>Cookies och Sessions</p>
  <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
</div>

<div class="w3-padding-large w3-container">
  <h3 class="w3-text-aqua">Sessions</h3>
  <div class="w3-padding-large w3-border w3-hover-border-aqua">
  <p>A session is a way to store information (in variables) to be used across 
    multiple pages. Unlike a cookie, the information is not stored on the users 
    computer.</p>

  <p><b>What is a PHP Session?</b></p>
    <p>When you work with an application, you open it, do some changes, 
      and then you close it. This is much like a Session. 
      The computer knows who you are. It knows when you start the application 
      and when you end. But on the internet there is one problem: 
      the web server does not know who you are or what you do, 
      because the HTTP address doesn't maintain state.</p>
      <p>Session variables solve this problem by storing user information to be 
        used across multiple pages (e.g. username, favorite color, etc). 
        By default, session variables last until the user closes the browser.</p>
      <p>So; Session variables hold information about one single user, and are available 
        to all pages in one application.</p>
  </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
<h3 class="w3-text-aqua">Sessions</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Start a PHP Session</b></p>
        <p>A session is started with the <span class = "w3-text-red">session_start()</span> function. Session 
          variables are set with the PHP global variable: $_SESSION.</p>
        <p>Now, let's create a new page called "demo_session1.php". 
          In this page, we start a new PHP session and set some session variables:</p>
          <pre><i>&lt;?php
// Start the session
session_start();
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "start_session.php">Start your own session</a>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Sessions</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Get PHP Session Variable Values</b></p>
        <p>Next, we create another page called "demo_session2.php". 
          From this page, we will access the session information we set on 
          the first page ("demo_session1.php"). Notice that session variables 
          are not passed individually to each new page, instead they are 
          retrieved from the session we open at the beginning of each page 
          (session_start()).</p>
          <p>Also notice that all session variable values are stored 
            in the global $_SESSION variable:</p>
          <pre><i>&lt;?php
session_start();
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".&lt;br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "get_session.php">Get session variable values</a>
    </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
<h3 class="w3-text-aqua">Sessions</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p>Another way to show all the session variable values for 
        a user session is to run the following code:</p>
        <pre><i>&lt;?php
session_start();
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;?php
print_r($_SESSION);
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "print_session.php">Print session</a>
        <div class="w3-padding w3-pale-yellow">
          <p><b>How does it work? How does it know it's me?</b></p> 
          Most sessions set a user-key on the user's computer that looks something like this: 
          765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, 
          it scans the computer for a user-key. If there is a match, it accesses that session, 
          if not, it starts a new session.
        </div>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Sessions</h3>
        <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <p><b>Modify a PHP Session Variable</b></p> 
        <p>To change a session variable, just overwrite it:</p>
            <pre><i>
&lt;?php
session_start();
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "start_session.php">Modify your session</a>
    </div>
  </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
<h3 class="w3-text-aqua">Sessions</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Destroy a PHP Session</b></p> 
      <p>To remove all global session variables and destroy 
        the session, use <span class = "w3-text-red">session_unset()</span> and <span class = "w3-text-red">session_destroy()</span></p>
        <pre><i>&lt;?php
session_start();
?>
&lt;!DOCTYPE html>
&lt;html>
&lt;body>

&lt;?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "destroy_session.php">Destroy your session</a>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua"></h3>
  </div>
</div>

<div class="w3-padding-large w3-container">
    <h3 class="w3-text-aqua">Cookies</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>What is a Cookie?</b></p>
        <p>A cookie is often used to identify a user. 
          A cookie is a small file that the server embeds on the user's computer. 
          Each time the same computer requests a page with a browser, it will 
          send the cookie too. With PHP, you can both create and retrieve cookie values.</p>
          <p><b>Create Cookies With PHP</b></p>
          <p>A cookie is created with the <span class = "w3-text-red">setcookice()</span> function.</p>
          <p><i>

<xmp>setcookie(name, value, expire, path, domain, secure, httponly);
</xmp>
          </i></p>
          <p>Only the name parameter is required. All other parameters are optional.</p>
      </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
  <h3 class="w3-text-aqua">Cookies</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>PHP Create/Retrieve a Cookie</b></p>
        <p>The following example creates a cookie named "user" with the value 
          "John Doe". The cookie will expire after 30 days (86400(24*60*60) * 30). 
          The "/" means that the cookie is available in entire website 
          (otherwise, select the directory you prefer).</p>
        <p>We then retrieve the value of the cookie "user" 
          (using the global variable $_COOKIE). We also use the isset() 
          function to find out if the cookie is set:</p>
          <pre><i>&lt;?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), 
"/"); // 86400 = 1 day
?>
&lt;html>
&lt;body>

&lt;?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!&lt;br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "create_cookie.php">Execute code</a>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Cookies</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Modify a Cookie Value</b></p>
        <p>To modify a cookie, just set (again) the cookie using the <span class = "w3-text-red">setcookice()</span> 
          function:</p>
          <pre><i>&lt;?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), 
"/"); // 86400 = 1 day
?>
&lt;html>
&lt;body>

&lt;?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!&lt;br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "modify_cookie.php">Execute code</a>
    </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
  <h3 class="w3-text-aqua">Cookies</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Delete a Cookie</b></p>
        <p>To delete a cookie, use the <span class = "w3-text-red">setcookice()</span> function with 
          an expiration date in the past:</p>
          <pre><i>&lt;?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
&lt;html>
&lt;body>

&lt;?php
echo "Cookie 'user' is deleted.";
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "delete_cookie.php">Execute code</a>
    </div>
  </div>
  <div class="w3-half">
    <h3 class="w3-text-aqua">Cookies</h3>
        <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <p><b>Check if Cookies are Enabled</b></p>
          <p>The following example creates a small script that checks whether cookies are enabled. 
            First, try to create a test cookie with the <span class = "w3-text-red">setcookice()</span>  function, then count the $_COOKIE array variable:</p>
            <pre><i>
&lt;?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
&lt;html>
&lt;body>

&lt;?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

&lt;/body>
&lt;/html>
        </i></pre>
        <p><a href = "check_if_cookie.php">Execute code</a>
    </div>
  </div>
</div>

</body>
</html>