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
  <title>Moment 3</title>
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
    <a href="moment3.php" class="active w3-aqua">Moment 3</a>
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

<div class="w3-container w3-aqua" id="header">
  <h1>Moment 3</h1> 
  <p>PHP med Formulär</p>
  <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-half">
      <h3 class="w3-text-aqua">Form Handling</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <p><b>A Simple HTML Form with the <b>POST</b> method</b></p>
        <p>The example below displays a simple HTML form with two input fields and a submit button:</p>
        <form action="#welcome" method="post"> <!-- Notera Action som är en paragraf här. -->
        <p>Name: <input type="text" name="name"></p>
        <p>E-mail: <input type="text" name="email"></p>
        <input type="submit">
        </form>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Form Handling</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>This is the receiving page:</b></p>
        <p>When the user fills out the form to the left and clicks the submit button, the form data is sent 
        for processing to a paragraph Welcome. The form data is sent with the HTTP POST method.</p>
        <p><b>Welcome</b></p>
        <p>
          <?php echo "Your name is : " . $_POST["name"] . "<br>" .
          "Your email address is: " . $_POST["email"]; ?>
        </p>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-half">
    <h3 class="w3-text-aqua">Form Handling</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <p><b>A Simple HTML Form</b></p>
        <p>The same result could also be achieved using the HTTP <b>GET</b> method:</p>
        <form action="welcome_get.php" method="get"> <!-- Notera Action som är en fil här. -->
        <p>Name: <input type="text" name="name"></p>
        <p>E-mail: <input type="text" name="email"></p>
        <input type="submit">
        </form>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Form Handling</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua w3-yellow">
      <p><b>Think SECURITY when processing PHP forms!</b></p>
        <p>This page does not contain any form validation, it just shows how you can send and retrieve form data.

            However, next we will show how to process PHP forms with security in mind! 
            Proper validation of form data is important to protect your form from hackers and spammers!</p>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-third">
    <h3 class="w3-text-aqua">Form Handling</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>GET vs. POST</b></p>
        <p>Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). 
          This array holds key/value pairs, where keys are the names of the form controls and values 
          are the input data from the user.</p>
          <p>Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they 
            are always accessible, regardless of scope - and you can access them from any function, 
            class or file without having to do anything special.</p>
          <p>$_GET is an array of variables passed to the current script via the URL parameters.</p>
          <p>$_POST is an array of variables passed to the current script via the HTTP POST method.</p>
      </div>
    </div>
  <div class="w3-third">
  <h3 class="w3-text-aqua">Form Handling</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>When to use GET?</b></p>
        <p>Information sent from a form with the GET <b>method is visible to everyone </b>
          (all variable names and values are displayed in the URL). 
          GET also has limits on the amount of information to send. 
          The limitation is about 2000 characters. However, because the variables are displayed in the URL, 
          it is possible to bookmark the page. This can be useful in some cases.</p>
        <p>GET may be used for sending non-sensitive data.</p>
        <p><b>Note:</b> GET should NEVER be used for sending passwords or other sensitive information!</p>
      </div>
    </div>
    <div class="w3-third">
    <h3 class="w3-text-aqua">Form Handling</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>When to use POST?</b></p>
        <p>Information sent from a form with the POST method is invisible to others 
          (all names/values are embedded within the body of the HTTP request) 
          and has no limits on the amount of information to send.</p>
        <p>Moreover POST supports advanced functionality such as support for 
          multi-part binary input while uploading files to server.</p>
        <p class = "w3-yellow w3-padding">Developers prefer POST for sending form data.</p>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-twothird">
    <h3 class="w3-text-aqua" id = "Complete Form">Form Validation and Security</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>The HTML form we will be working at here, contains various input fields: 
        required and optional text fields, radio buttons, and a submit button. <span class = "w3-text-orange"> Det här är det
        slutgiltiga resultat när vi har implementerat alla funktionalitet som beskrivs på denna sida:</span></b></p>
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }
          }
          
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }
            
          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "Invalid URL";
            }
          }

          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }

          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        <h4>PHP Form Validation Example</h4>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["moment4.php"]);?> 
          Name: <input type="text" name="name" value="<?php echo $name;?>">
          <span class="error">* <?php echo $nameErr;?></span>
          <br><br>
          E-mail: <input type="text" name="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span>
          <br><br>
          Website: <input type="text" name="website" value="<?php echo $website;?>">
          <span class="error"><?php echo $websiteErr;?></span>
          <br><br>
          Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
          <br><br>
          Gender:
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
          <span class="error">* <?php echo $genderErr;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>
    </div>  
  </div>
  <div class= "w3-third">
    <div class= "w3-containter w3-padding">
    <h3 class= "w3-text-aqua"><a name = "formresult">Form Validation and Security</a></h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <?php
          echo "<h4><b>Your Input will be displayed here!:</b></h4>";
          echo "[name] ", $name;
          echo "<br>";
          echo "[email] ", $email;
          echo "<br>";
          echo "[website] ", $website;
          echo "<br>";
          echo "[comment] ", $comment;
          echo "<br>";
          echo "[gender] ", $gender;
        ?>
      </div>
    </div>
    <div class= "w3-containter w3-padding">
        <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <p><b>Think security</b></p>
          <div class = "w3-yellow w3-padding">        
            <p><b>Think SECURITY when processing PHP forms!</b></p>
            <p>These pages will show how to process PHP forms with security in mind. 
              Proper validation of form data is important to protect your form from hackers and spammers!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
  <h3 class= "w3-text-aqua">Form Validation and Security</h3>
  <div class = "w3-container"> 
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Text Fields</b></p>
      <p>The name, email, and website fields are text input elements, 
        and the comment field is a textarea. The HTML code looks like this:</p>
<xmp>
Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Website: <input type="text" name="website">
</xmp>
        </pre></i></p>
      </div>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Radio Buttons</b></p>
        <p>The gender fields are radio buttons and the HTML code looks like this:</p>
          <p><i>
<xmp>Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other</xmp>
          </i></p>
      </div>
    </div>
  </div>
  <div class="w3-half">
  <h3 class= "w3-text-aqua">Form Validation and Security</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p><b>The Form Element</b></p>
      <p>The HTML code of the form looks like this:</p>
        <p><i>
<pre>form method="post" action="&lt;?php echo 
    htmlspecialchars($_SERVER["PHP_SELF"])?>"></pre>        
        </i></p>
      <p>When the form is submitted, the form data is sent with method="post".</p>
      <div class = "w3-yellow w3-padding">        
            <p><b>What is the $_SERVER["PHP_SELF"] variable?</b></p>
            <p>The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.</p>
      </div>
      <p>So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, 
        instead of jumping to a different page. This way, the user will get error messages on the same page as the form.</p>
        <div class = "w3-orange w3-padding">        
            <p><b>What is the htmlspecialchars() function?</b></p>
            <p>The htmlspecialchars() function converts special characters to HTML entities. 
              This means that it will replace HTML characters like < and > with &amplt; and &ampgt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.</p>
      </div>
    </div>
  </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-half">
  <h3 class= "w3-text-aqua">Form Validation and Security</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p><b>Big Note on PHP Form Security</b></p>
      <p>The $_SERVER["PHP_SELF"] variable can be used by hackers!</p>
      <p>If PHP_SELF is used in your page then a user can enter a slash (/) and 
        then some Cross Site Scripting (XSS) commands to execute.</p>
      <div class = "w3-orange w3-padding">        
            <p><b>Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. 
              XSS enables attackers to inject client-side script into Web pages viewed by other users.</b></p>
            <p>The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.</p>
      </div>
      <p>Assume we have the following form in a page named "test_form.php":</p>
        <p><i>
<pre>form method="post" action="&lt;?php echo $_SERVER["PHP_SELF"])?>"></pre>       
        </i></p>     
      <p>Now, if a user enters the normal URL in the address bar like 
        "http://www.example.com/test_form.php", the above code will be translated to:</p>
<pre>form method="post" action="test_form.php"></pre>       
      <p>So far, so good. However, consider that a user enters the following URL in the address bar:</p>
<pre>http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert
    ('hacked')%3C/script%3E</pre>
      <p>In this case, the above code will be translated to:</p>
<pre>&lt;form method="post" action="test_form.php/"&gt;
&lt;script&gtalert('hacked')&lt;/script&gt</pre>       
        <p>This code adds a script tag and an alert command. And when the page loads, the JavaScript code 
          will be executed (the user will see an alert box). 
          This is just a simple and harmless example how the PHP_SELF variable can be exploited.</p>
          <p>Be aware of that <b>any JavaScript code can be added inside the 
            &lt;script&gt;</b> tag! A hacker can redirect the user to a file on another server, 
            and that file can hold malicious code that can alter the global variables or submit the form to 
            another address to save the user data, for example.</p>
    </div>
  </div>
  <div class="w3-half">
  <h3 class= "w3-text-aqua">Form Validation and Security</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p><b>How To Avoid $_SERVER["PHP_SELF"] Exploits?</b></p>
      <p>$_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.
        The form code should look like this:</p>
        <pre>&lt;form method="post" action="&lt;?php echo 
    htmlspecialchars($_SERVER["PHP_SELF"])?>"></pre>        
      <p>The htmlspecialchars() function converts special characters to HTML entities. 
        Now if the user tries to exploit the PHP_SELF variable, it will result in the following output:</p>
        <pre>&lt;form method="post" action="test_form.php/&ampquot;&ampgt;&amplt;
          script&ampgt;alert('hacked')&lt;/script&gt;"&gt</pre>
          <p>The exploit attempt fails, and no harm is done!</p>
    </div>
  </div>
</div>

<div class="w3-padding-large w3-container">
  <h3 class= "w3-text-aqua">Form Validation and Security</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p><b>Validate Form Data With PHP</b></p>
      <p>The first thing we will do is to pass all variables through PHP's htmlspecialchars() function.
        When we use the htmlspecialchars() function; then if a user tries to submit the following in a text field:</p>
        <pre>&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;</pre>
        <p>- this would not be executed, because it would be saved as HTML escaped code, like this:</p>
        <pre>&amplt;script&ampgt;location.href('http://www.hacked.com')&amplt;/script&ampgt;</pre>
        <p>The code is now safe to be displayed on a page or inside an e-mail.</p>
        <p>We will also do two more things when the user submits the form:</p>
        <ol type="1">
          <li>Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)</li>
          <li>Remove backslashes (\) from the user input data (with the PHP stripslashes() function)</li>
        </ol>
        <p>The next step is to create a function that will do all the checking for us (which is much more convenient 
          than writing the same code over and over again). We will name the function test_input(). Now, we can check 
          each $_POST variable with the test_input() function, and the script looks like this:</p>

<i><pre>&lt;?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input2($_POST["name"]);
  $email = test_input2($_POST["email"]);
  $website = test_input2($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input2($_POST["gender"]);
}

function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?></pre></i>
        <p>Notice that at the start of the script, we check whether the form has been submitted using $_SERVER["REQUEST_METHOD"]. 
          If the REQUEST_METHOD is POST, then the form has been submitted - and it should be validated. 
          If it has not been submitted, skip the validation and display a blank form. However, in the example above, 
          all input fields are optional. The script works fine even if the user does not enter any data. The next step is to 
          make input fields required and create error messages if needed.</p>
  </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-half">
  <h3 class= "w3-text-aqua">Required Fields</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p><b>Required Fields</b></p>
    <table class = "w3-table w3-table-all">
      <tbody>
        <tr class = "w3-yellow">
          <td><b>Field</b></td>
          <td><b>Validation Rules</b></td>
        </tr>
        <tr>
          <td>Name</td>
          <td>Required. + Must only contain letters and whitespace</td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td>Required. + Must contain a valid email address (with @ and .)</td>
        </tr>
        <tr>
          <td>Website</td>
          <td>Optional. If present, it must contain a valid URL</td>
        </tr>
        <tr>
          <td>Comment</td>
          <td>Optional. Multi-line input field (textarea)</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>Required. Must select one</td>
        </tr>
      </tbody>
    </table>
      <p>In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, 
        and $websiteErr. These error variables will hold error messages for the required fields. 
        We have also added an <span class = "w3-text-red">if else</span> statement for each $_POST variable. 
        This checks if the $_POST 
        variable is empty (with the PHP <span class = "w3-text-red">empty()</span> function). If it is empty, an error message 
        is stored in the different error variables, and if it is not empty, it sends the user 
        input data through the <span class = "w3-text-red">test_input()</span> function:</p>

        <i><pre>&lt;?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?></pre></i>
    </div>
  </div>
  <div class="w3-half">
  <h3 class= "w3-text-aqua">Required Fields</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p><b>Display The Error Messages</b></p>
      <p>Then in the HTML form, we add a little script after each required field, 
        which generates the correct error message if needed 
        (that is if the user tries to submit the form without filling out the required fields):</p>
<pre><i>
&lt;form&gt; method="post" action="&lt;?php echo htmlspecialchars
($_SERVER["PHP_SELF"]);?>">

  Name: &lt;input type="text" name="name">
  &lt;span class="error"&gt;* &lt;?php echo $nameErr;?></span>
  &lt;br>&lt;br>
  E-mail:
  &lt;input type="text" name="email">
  &lt;span class="error">* &lt;?php echo $emailErr;?></span>
  &lt;br>&lt;br>
  Website:
  &lt;input type="text" name="website">
  &lt;span class="error">&lt;?php echo $websiteErr;?></span>
  &lt;br>&lt;br>
  Comment: &lt;textarea name="comment" rows="5" cols="40"></textarea>
  &lt;br>&lt;br>
  Gender:
  &lt;input type="radio" name="gender" value="female">Female
  &lt;input type="radio" name="gender" value="male">Male
  &lt;input type="radio" name="gender" value="other">Other
  &lt;span class="error">* &lt;?php echo $genderErr;?></span>
  &lt;br>&lt;br>
  &lt;input type="submit" name="submit" value="Submit">

</form>
</i></pre>
    </div>
  </div>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-half">
    <h3 class="w3-text-aqua">Validate E-mail and URL</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Validate Name</b></p>
        <p>The code below shows a simple way to check if the name field only 
          contains letters, dashes, apostrophes and whitespaces. 
          If the value of the name field is not valid, then store an error message:</p>
          <i><pre>
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters 
  and white space allowed";
}
        </pre></i>
        <p class = "w3-yellow w3-padding">The preg_match() function 
          searches a string for pattern, returning true if the pattern exists, and false otherwise.</p>
      </div>
    </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Validate E-mail and URL</h3>
  <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Validate E-mail</b></p>
        <p>The easiest and safest way to check whether an email address is well-formed is 
          to use PHP's filter_var() function. In the code below, if the e-mail address is not well-formed, 
          then store an error message:</b>
        <i><pre>
$email = test_input($_POST["email"]);
if (!filter_var($email, 
FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
        </pre></i>
        <p>GET may be used for sending non-sensitive data.</p>
        <p><b>Note:</b> GET should NEVER be used for sending passwords or other sensitive information!</p>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-half">
    <h3 class="w3-text-aqua">Validate E-mail and URL</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Validate URL</b></p>
        <p>The code below shows a way to check if a URL address syntax is valid (this regular expression 
          also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:</p>
          <i><pre>
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp)
:\/\/|www\.)[-a-z0-9+&@#\/%?=~_|
!:,.;]*[-a-z0-9+&@#\/%=~_|]
/i",$website)) {
  $websiteErr = "Invalid URL";
}
        </pre></i>
      </div>
    </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Validate E-mail and URL</h3>
  <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Validate Name, E-mail, and URL</b></p>
        <p>Now, the script looks like this:</b>
<pre><i>&lt;?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular 
    expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/
    |www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*
    [-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>
</i></pre>

      <p>The next step is to show how to prevent the form from 
          emptying all the input fields when the user submits the form.</p>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
  <h3 class= "w3-text-aqua">Complete Form Example</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p><b>Keep The Values in The Form</b></p>
      <p>To show the values in the input fields after the user hits the submit button, 
        we add a little PHP script inside the value attribute of the following input fields: 
        name, email, and website. In the comment textarea field, we put the script between 
        the &lt;textarea> and &lt;/textarea> tags. The little script outputs the value of 
        the $name, $email, $website, and $comment variables. </p>
        <p>Then, we also need to show which radio button that was checked. 
          For this, we must manipulate the checked attribute 
          (not the value attribute for radio buttons):</p>

          <pre><i>
Name: &lt;input type="text" name="name" value="<?php echo $name;?>">

E-mail: &lt;input type="text" name="email" value="<?php echo $email;?>">

Website: &lt;input type="text" name="website" value="<?php echo $website;?>">

Comment: &lt;textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
&lt;input type="radio" name="gender"
&lt;?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
&lt;input type="radio" name="gender"
&lt;?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
&lt;input type="radio" name="gender"
&lt;?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
</i></pre>
<p><b><a href = "#Complete Form">Gå till en full implementation av all funktionalitet förklarad på denna sida</a></b></p>
  </div>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-half">
    <h3 class="w3-text-aqua">Fördefinierade array variabler</h3>
      <div class="w3-container w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Variabler</b></p>
        <p>PHP har <a href = "http://php.net/manual/en/reserved.variables.php">fördefinierade variabler</a> som innehåller användbar information. 
          Följande lista visar ett par av de vanliga variablerna som du kommer i kontakt med som webbutvecklare.</p>
          <ul>
            <li>$_SERVER</li>
            <li>$_GET</li>
            <li>$_POST</li>
            <li>$_SESSION</li>
            <li>$_COOKIE</li>
          </ul>
          <p>Variablerna är <a href = "https://dbwebb.se/kunskap/kom-i-gang-med-php-pa-20-steg#array">arrayer</a>, dvs att de innehåller flera värden. 
            Låt oss titta på ett par exempel där vi skriver ut innehållet i respektive variabel.</p>
      </div>
      <div class="w3-container w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>$_SERVER</b></p>
        <p>$_SERVER ger information om själva anropet och om den som anropade sida. 
          Det är information som anroparens ip-adress, 
          vilken klient (webbläsare) som användes och vilken url som efterfrågas.</p>
          <p>Följande kod skriver ut anroparens ip-adress och information om användarens klient.</p>
<pre><i>&lt;?php
echo "&ltp>IP-adress till den som öppnade denna sidan: 
  " . htmlentities($_SERVER['REMOTE_ADDR']);
echo "&ltp>I HTTP_USER_AGENT går det att utläsa 
vilken webbläsare som används:  
" . htmlentities($_SERVER['HTTP_USER_AGENT']);
echo "&ltp>Allt innehåll i arrayen \$_SERVER:&ltbr>&ltpre>"
   . htmlentities(print_r($_SERVER, 1)) . "&lt/pre>";
?>
</i></pre>
<p><a href = "$_SERVER.php">Resultatet av ovanstående kod:</a></p>
          <p>Informationen som kommer i $_SERVER är delvis sådan som kommer från den som anropar sidan, 
            det är information som skickas i http-headern, i själva protokollanropet. 
            Det betyder att anroparen kan påverka innehållet i $_SERVER. 
            Därför är det viktigt att inte lita på innehållet i $_SERVER. 
            Använd alltid funktionen <a href = "http://php.net/manual/en/function.htmlentities.php">htmlentities()</a> när du skriver ut innehåll som du inte litar på.</p>
      </div>
    </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Fördefinierade array variabler</h3>
  <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Skicka parametrar till en sida</b></p>
        <p>$_GET är en array som innehåller de argument som skickas via länken efter ?-tecknet.(query-delen). 
          Detta brukar också kallas querystring.</b>
<pre><i>&lt;?php
if(empty($_GET)) {
  echo "&lt;p>Du har inte skickat några parametrar till sidan&lt;/p>";
}

if(isset($_GET['hej'])) {
  echo "&lt;p>Hej på dej själv!&lt;/p>";
}

if(isset($_GET['namn'])) {
  echo "&lt;p>Ah, så ditt namn är '" . htmlentities($_GET['namn']) . "'. 
  Mitt namn är Mumintrollet.&lt;/p>";
}

echo "&lt;p>Allt innehåll i arrayen \$_GET:&lt;br>&lt;pre>" . 
htmlentities(print_r($_GET, 1)) . "<&lt;/pre>";?>
</i></pre>
<p><a href = "$_GET.php">Resultatet av ovanstående kod:</a></p>
      <p>Man kan använda funktionerna <a href = " http://php.net/manual/en/function.empty.php">empty()</a> 
      och <a href = "http://php.net/manual/en/function.isset.php">isset()</a> för att kontrollera om det är 
      några specifika argument som skickats med till sidan. 
      På det sättet kan du få en webbsida att bete sig olika beroende på 
      de parametrar som skickas med i länken.</p>
      <p>Som du ser i länkarna i koden ovan så kan parametrarna som skickas ha ett värde eller ej. 
        Man separerar parametrarna med &-tecknet, eller dess motsvarande HTML-entitet, &amp;amp, 
        när det skrivs i HTML-koden (annars går det inte igenom HTML valideringen).</p>
      </div>
    </div>
</div>
