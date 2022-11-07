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
    <a href="moment4.php">Moment 4</a>
    <a href="moment5.php">Moment 5</a>
    <a href="moment6.php">Moment 6</a>
    <a href="leapYear.php">Leap Year</a>
    <a href="suvery.php" class="active w3-yellow ">Suvery with new page</a>
    <a href="suvery2.php">Suvery with same page</a>
    <a href="welcome_back.php">Welcome Back</a>
    <a href="login_page.php">Login Page</a>
    <a href="my_birthday_reminder_app.php">Birthday Reminder</a>
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
      <h3 class="w3-text-yellow"></h3>
      <div class="w3-padding-large ">
      </div>
    </div>
    <div class="w3-third">
      <?php
      // define variables and set to empty values
      $fnameErr = $enameErr = $emailErr = $messageErr = $favouriteCityErr = "";
      $fname = $ename = $email = $message = $favouriteCity = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
          // Set error message for invalid format.
          $fnameErr = "Please enter your first name.";
        } else {
          // Call the test_input function.
          $fname = test_input($_POST["fname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            // Set error message for invalid format.
            $fnameErr = "Only letters and white space allowed";
          }
        }

        if (empty($_POST["ename"])) {
          // Set error message for invalid format.
          $enameErr = "Please enter your efter name.";
        } else {
          // Call the test_input function.
          $ename = test_input($_POST["ename"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/", $ename)) {
            // Set error message for invalid format.
            $enameErr = "Only letters and white space allowed";
          }
        }

        if (empty($_POST["email"])) {
          // Set error message for invalid format.
          $emailErr = "Please enter your E-mail.";
        } else {
          // Call the test_input function.
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set error message for invalid format.
            $emailErr = "Invalid email format";
          }
        }

        if (empty($_POST["message"])) {
          $messageErr = "Next destination is required";
        } else {
          // Call the test_input function.
          $message = test_input($_POST["message"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/", $message)) {
            $messageErr = "Invalid input";
          }
        }

        if (empty($_POST["favouriteCity"])) {
          // Set error message for invalid format.
          $favouriteCityErr = "Please Choose a city";
        } else {
          // Call the test_input function.
          $favouriteCity = test_input($_POST["favouriteCity"]);
        }
      }

      // Set test_input function.
      function test_input($data)
      {
        // Strip whitespace (or other characters) from the beginning and end of a string.
        $data = trim($data);
        // Un-quotes a quoted string.
        $data = stripslashes($data);
        // Convert special characters to HTML entities.
        $data = htmlspecialchars($data);
        return $data;
      }
      ?>
      <h3 class="w3-text-cyan"></h3>
      <div class="w3-padding-large w3-border w3-hover-border-yellow">
        <form method="post" action="suvery-data.php">
          <fieldset>
            <legend>Contact details</legend>
            <p for="fname">First name:</p>
            <input type="text" name="fname" value="<?php echo $fname; ?>" />
            <!-- Add span that appear error massages when the send button is pressed.  -->
            <span class="error">* <?php echo $fnameErr; ?></span>
            <p for="ename">Surname:</p>
            <input type="text" name="ename" value="<?php echo $ename; ?>" />
            <!-- Add span that appear error massages when the send button is pressed.  -->
            <span class="error">* <?php echo $enameErr; ?></span>
            <p for="epost">E-mail:</p>
            <input type="text" name="email" value="<?php echo $email; ?>" />
            <!-- Add span that appear error massages when the send button is pressed.  -->
            <span class="error">* <?php echo $emailErr; ?></span>
          </fieldset> <br>
          <fieldset>
            <p for="message">What is your next travel destinatino?: </p>
            <textarea name="message" rows="5" cols="35" <?php echo $message; ?>></textarea>
            <!-- Add span that appear error massages when the send button is pressed.  -->
            <span class="error">* <?php echo $messageErr; ?></span>
          </fieldset>
          <fieldset>
            <legend>Favourite City</legend>
            <!-- Determine if a variable is declared and is different than null. -->
            <input type="radio" name="favouriteCity" <?php if (isset($favouriteCity) && $favouriteCity == "London") echo "checked"; ?> value="London" />
            <label for="london">London</label>
            <input type="radio" name="favouriteCity" <?php if (isset($favouriteCity) && $favouriteCity == "Paris") echo "checked"; ?> value="Paris" />
            <label for="paris">Paris</label> <br>
            <input type="radio" name="favouriteCity" <?php if (isset($favouriteCity) && $favouriteCity == "Tokyo") echo "checked"; ?> value="Tokyo" />
            <label for="tokyo">Tokyo</label> <br>
            <input type="radio" name="favouriteCity" <?php if (isset($favouriteCity) && $favouriteCity == "Other") echo "checked"; ?> value="Other" />
            <label for="other">Other</label>
            <!-- Add span that appear error massages when the send button is pressed.  -->
            <span class="error">* <?php echo $favouriteCityErr; ?></span>
          </fieldset>
          <br>
          <!-- Create a submit button. -->
          <input type="submit" name="submit" value="Submit"> <br>
        </form>
      </div>
    </div>
    <div class="w3-third">
      <h3 class="w3-text-cyan"></h3>
      <div class="w3-padding-large">

      </div>
    </div>
  </div>


</body>

</html>