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
  <title>Moment 2</title>
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
    <a href="moment2.php" class="active w3-blue">Moment 2</a>
    <a href="moment3.php">Moment 3</a>
    <a href="moment4.php">Moment 4</a>
    <a href="moment5.php">Moment 5</a>
    <a href="moment6.php">Moment 6</a>
    <a href="welcome_back.php">Welcome Back</a>
    <a href="login_page.php">Login Page</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<div class="w3-container w3-blue" id="header">
    <h1>Moment 2</h1> 
    <p>Introduktion PHP</p> 
    <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
</div>    

<div class="w3-padding-large w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">Variables, Output and Declaration</h3>
        <div class="w3-padding-large w3-border w3-hover-border-blue">
            <!--The PHP echo statement is often used to output data to the screen.<br>
            Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.
            The following example will show how to output text and a variable:-->
            <p><b>Declare a variable and echo.</b></p>
            <?php
                $txt = "Astar.com"; //Declaration
                echo "I love $txt!"; //Output
            ?>
            <!--Rules for PHP variables:
            - A variable starts with the $ sign, followed by the name of the variable
            - A variable name must start with a letter or the underscore character
            - A variable name cannot start with a number
            - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
            - Variable names are case-sensitive ($age and $AGE are two different variables) -->
        </div>
    </div>    
    <div class="w3-third">
        <h3 class="w3-text-blue">Display Text</h3>
        <div class="w3-padding-large w3-border w3-hover-border-blue">
            <!--The following example shows how to output text with the echo command (notice that the text can contain HTML markup):-->
            <p><b>Display Text.</b></p>
            <?php
                echo "<h2>PHP is Fun!</h2>";
                echo "Hello world!<br>"; //Includes HTML markup
                echo "I'm about to learn PHP!<br>"; //Includes HTML markup
                echo "This ", "string ", "was ", "made ", "with multiple parameters."; //Multiple parameters separated by comma
            ?>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Display Variables</h3>
        <div class="w3-padding-large w3-border w3-hover-border-blue">
            <!--The following example shows how to output text and variables with the echo statement:-->
            <?php
                $txt1 = "Learn PHP";
                $txt2 = "Astar.com";
                $x = 5;
                $y = 4;

                echo "<h2>" . $txt1 . "</h2>"; //Separated by period
                echo "Study PHP at " . $txt2 . "<br>";//Mix of string and variables
                echo $x + $y;//Mix variables and operand
            ?>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">Global and Local Scope</h3>
        <div class="w3-padding-large w3-border w3-hover-border-blue">
            <!--A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:-->
            <?php
            echo "<h5><b>Variable with global scope:</b></h5>";
                $a = 5; // global scope

                function myTest1() {
                // using x inside this function will generate an error
                echo "<p>Variable a inside function is: $a</p>";
                }
                myTest1();

                echo "<p>Variable a outside function is: $a</p>";
            ?>
            <?php
            echo "<h5><b>Variable with local scope:</b></h5>";
            function myTest2() {
                $b = 5; // local scope
                echo "<p>Variable b inside function is: $b</p>";
                }
                myTest2();

                // using x outside the function will generate an error
                echo "<p>Variable b outside function is: $b</p>";
            ?>
        </div>
    </div>  
    <div class="w3-third">
        <h3 class="w3-text-blue">Global and Local Scope</h3>
        <div class="w3-container">
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <p>
                The global keyword is used to access a global variable from within a function.
                To do this, use the global keyword before the variables (inside the function):<br>
            </div>
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <p>
                Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
                </p>
                To do this, use the static keyword when you first declare the variable:<br>
                Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
                <br><b>Note:</b> The variable is still local to the function.
            </div>
        </div>
        <div class="w3-container">
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <p><b>global</b></p>
                <?php
                    $k = 5;
                    $l = 10;

                    function myTest3() {
                    global $k, $l;
                    $l = $k + $l;
                    }

                    myTest3();
                    echo $l; // outputs 15
                ?>
            </div> 
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
            <p><b>static</b></p>
            <?php
                function myTest4() {
                static $m = 0;
                echo "<br>", $m;
                $m++;
                }

                myTest4();
                myTest4();
                myTest4();
            ?>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Data Types</h3>
            <div class="w3-container">
                <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                    <p>
                    PHP supports the following data types:
                    <ul>
                    <li>String</li>
                    <li>Integer</li>
                    <li>Float (floating point numbers - also called double)</li>
                    <li>Boolean</li>
                    <li>Array</li>
                    <li>Object</li>
                    <li>NULL</li>
                    <li>Resource</li>
                    </ul>
                    </p>
                </div> 
                <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                    <?php
                        echo "<p><b>String</b></p>";
                        $c = "Hello world!";
                        $d = 'Hello world!';

                        echo $c;
                        echo "<br>";
                        echo $d;
                        echo "<br>";
                        var_dump($c);
                        echo "<br>";
                        var_dump($d);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">Data Types</h3>
        <div class="w3-padding-large">
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
            <?php
                echo "<p><b>Integer</b></p>";

                $e = 5985;
                var_dump($e);
            ?>
            </div>
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <?php
                echo "<p><b>Float</b></p>";

                $f = 10.365;
                    var_dump($f);
                ?>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Data Types</h3>
        <div class="w3-padding-large">
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <?php
                    echo "<p><b>Boolean</b></p>";
                    $g = true;
                    $h = false;
                    var_dump($g);
                    echo "<br>";
                    var_dump($h);
                ?>
            </div>
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <?php
                    echo "<p><b>Arrays</b></p>";
                    $cars = array("Volvo","BMW","Toyota");
                    var_dump($cars);
                ?>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Data Types</h3>
        <div class="w3-padding-large w3-border w3-hover-border-blue">
            <?php
                echo "<p><b>Null Value</b></p>";

                echo "<p>A variable of data type NULL is a variable that has no value assigned to it.

                Tip: If a variable is created without a value, it is automatically assigned a value of NULL.</p>";
                $i = "Hello world!";
                $i = null;
                var_dump($i);
            ?>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-half">
        <h3 class="w3-text-blue">Data Types</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>Object</b></p>"
                <p>
                    Classes and objects are the two main aspects of object-oriented programming.
                </p>
                <p>
                    A class is a template for objects, and an object is an instance of a class.
                <p>
                </p>
                    When the individual objects are created, they inherit all the properties and behaviors from the class, 
                    but each object will have different values for the properties.
                </p>
                </p>
                    <i>Vi kommer inte lära ut objektorienterad PHP i den här kursen.</i>
                </p>
            </div>
        </div>
    </div>
    <div class="w3-half">
        <h3 class="w3-text-blue">Data Types</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
            <p><b>Object</b></p>
                <p>
                    The special resource type is not an actual data type. It is the storing of a reference to functions 
                    and resources external to PHP.
                </p>
                <p>
                    A common example of using the resource data type is a database call.
                <p>
                </p>
                    <i>Vi återkommer till Databaser i Moment 5</i>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">String Functions</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p>
                    PHP har ett stort antal inbyggda funktioner som underlättar livet som PHP-programmerare. 
                    Finns det funktioner så använder man dem istället för att skriva egna. Det är viktigt att lära sig 
                    hur man slår upp och letar reda på funktioner. Manualens sökfunktionen hjälper dig på vägen.
                </p>
                <p>
                    Varje funktion har en egen sida i PHP-manualen, slå upp de två funktioner vi använt så här långt, 
                    echo() och var_dump(), läs om dem och studera upplägget för manualsidan. 
                    <a href="https://www.php.net/manual/en/">https://www.php.net/manual/en/</a>
                    Använda sökfunktionen på manualsidan för att hitta de funktioner du letar efter.
                </p>
                <p>
                    Det finns en stor mängd inbyggda funktioner, det finns funktioner för datum och tid, matematiska funktioner, 
                    funktioner för stränghantering, kryptering, funktioner för att hämta information från andra webbplatser, 
                    för att komma åt databaser och så vidare.
                </p>
            </div>
        </div>
    </div>
    <div class="w3-third">
    <h3 class="w3-text-blue">String Functions</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <?php
                    echo "<p><b>Return the Length of a String</b></p>";
                    echo "Hello world! har längden ", strlen("Hello world!"); // outputs 12
                ?>
            </div>
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
            <?php
                    echo "<p><b>Count Words in a String</b></p>";
                    echo "Hello world! innehåller ", str_word_count("Hello world!"), " ord.";
                ?>
            </div>
        </div>
        <div class="w3-container w3-padding-large">
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <?php
                    echo "<p><b>Reverse a String</b></p>";
                    echo "Hello world! baklänges blir ", strrev("Hello world!");
                ?>
            </div>
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
            <?php
                    echo "<p><b>Search For a Text Within a String</b></p>";
                    echo "world börja på position ", strpos("Hello world!", "world"), " i  Hello world!.";
            ?>
            </div>
        </div>
        <div class="w3-container w3-padding-large">
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
                <?php
                    echo "<p><b>Replace Text Within a String</b></p>";
                    echo "Om vi ersätter world med Dolly blir det ", str_replace("world", "Dolly", "Hello world!"); 
                ?>
            </div>
            <div class="w3-half w3-padding-large w3-border w3-hover-border-blue">
            <p><b>String Reference</b></p>
            <p>
                For a complete reference of all string functions, go to our 
                <a href="https://www.w3schools.com/php/php_ref_string.asp">complete PHP String Reference.</a>
            <p>
            </p>
                The PHP string reference contains description and example of use, for each function!
                </p>
            </div>
        </div>
    </div>
    <div class="w3-third">
    <h3 class="w3-text-blue">Numbers</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>About Numbers</b></p>
                <p>
                    One thing to notice about PHP is that it provides automatic data type conversion.
                </p>
                <p>
                    So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. 
                    Then, if you assign a string to the same variable, the type will change to a string.
                </p>
                <p>
                    This automatic conversion can sometimes break your code.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">Integers</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p>
                    2, 256, -256, 10358, -179567 are all integers.                </p>
                <p>
                    An integer is a number without any decimal part.
                </p>
                <p>
                    An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, 
                    and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. 
                    A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
                </p>
                <p>
                    <b>Note:</b> Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, 
                    because one of the operands is a float (2.5).
                </p>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Integers</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                Here are some rules for integers:
                <ul>
                    <li>An integer must have at least one digit</li>
                    <li>An integer must NOT have a decimal point</li>
                    <li>An integer can be either positive or negative</li>
                    <li>Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - 
                        prefixed with 0x) or octal (8-based - prefixed with 0)</li>
                </ul>
                PHP has the following predefined constants for integers:
                <ul>
                    <li>PHP_INT_MAX - The largest integer supported</li>
                    <li>PHP_INT_MIN - The smallest integer supported</li>
                    <li>PHP_INT_SIZE -  The size of an integer in bytes</li>
                    <li>Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - 
                        prefixed with 0x) or octal (8-based - prefixed with 0)</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w3-third">
    <h3 class="w3-text-blue">Integers</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>Check if Integer</b></p>
                PHP has the following functions to check if the type of a variable is integer:
                <ul>
                    <li>is_int()</li>
                    <li>is_integer() - alias of is_int()</li>
                    <li>is_long() - alias of is_int()</li>
                </ul>
                <p><b>is_int()</b></p>
                <?php
                    $j = 5985;
                    var_dump(is_int($j));
                    echo "<br>";
                    $j = 59.85;
                    var_dump(is_int($j));
                ?>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">Float</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p>
                    A float is a number with a decimal point or a number in exponential form.
                </p>
                <p>
                    2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
                </p>
                <p>
                    The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), 
                    and have a maximum precision of 14 digits.
                </p>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Float</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                HP has the following predefined constants for floats (from PHP 7.2):
                <ul>
                    <li>PHP_FLOAT_MAX - The largest representable floating point number</li>
                    <li>PHP_FLOAT_MIN - The smallest representable positive floating point number</li>
                    <li>PHP_FLOAT_MAX - The smallest representable negative floating point number</li>
                    <li>PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a 
                        float and back without precision loss</li>
                    <li>PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="w3-third">
    <h3 class="w3-text-blue">Infinity</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
                PHP has the following functions to check if a numeric value is finite or infinite:
                <ul>
                    <li>is_finite()</li>
                    <li>is_infinite()</li>
                </ul>
                <p><b>Check if a numeric value is finite or infinite:</b></p>
                <?php
                    $x = 1.9e411;
                    var_dump($x);
                ?>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">NaN</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p>
                    NaN stands for Not a Number.
                </p>
                <p>
                    NaN is used for impossible mathematical operations.
                </p>
                    PHP has the following functions to check if a value is not a number:
                    <ul>
                        <li>is_nan()</li>
                </ul>
                <p><b>Invalid calculation will return a NaN value:</b></p>
                <?php
                    $x = acos(8);
                    var_dump($x);
                ?>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Numerical Strings</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                The PHP is_numeric() function can be used to find whether a variable is numeric. 
                The function returns true if the variable is a number or a numeric string, false otherwise.
                <p><b>Check if the variable is numeric:</b></p>
                <?php
                    $x = 5985;
                    var_dump(is_numeric($x));

                    $x = "5985";
                    var_dump(is_numeric($x));

                    $x = "59.85" + 100;
                    var_dump(is_numeric($x));

                    $x = "Hello";
                    var_dump(is_numeric($x));
                ?>
            </div>
        </div>
    </div>
    <div class="w3-third">  
    <h3 class="w3-text-blue">Casting Strings and Floats to Integers</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
            Sometimes you need to cast a numerical value into another data type.
            The (int), (integer), or intval() function are often used to convert a value to an integer.
                <p><b>Cast float and string to integer:</b></p>
                <?php
                    // Cast float to int
                    $x = 23465.768;
                    $int_cast = (int)$x;
                    echo $int_cast;

                    echo "<br>";

                    // Cast string to int
                    $x = "23465.768";
                    $int_cast = (int)$x;
                    echo $int_cast;
                ?>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-quarter">
        <h3 class="w3-text-blue">Math</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p>
                    PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
                </p>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
        <h3 class="w3-text-blue">pi() Function</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>The pi() function returns the value of PI:</b></p>
                &lt;?php<br>echo(pi()); <br>?&gt;
                <p><b>Returns:</b></p>
                <?php
                    echo(pi()); // returns 3.1415926535898
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">min() and max() Functions</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>The min() and max() functions can be used to find the lowest or highest value in a list of arguments:</b></p>
                &lt;?php<br>echo(min(0, 150, 30, 20, -8, -200));<br>
                echo(max(0, 150, 30, 20, -8, -200));<br>?&gt;
                <p><b>Returns:</b></p>
            <?php
                echo(min(0, 150, 30, 20, -8, -200));  // returns -200
                echo  "<br>";
                echo(max(0, 150, 30, 20, -8, -200));  // returns 150
            ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">abs() Function</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>The abs() function returns the absolute (positive) value of a number:</b></p>
                &lt;?php<br>echo(abs(-6.7));<br>?&gt;
                <p><b>Returns:</b></p>
                <?php
                    echo(abs(-6.7));  // returns 6.7
                ?>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-quarter">
        <h3 class="w3-text-blue">sqrt() Function</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>The sqrt() function returns the square root of a number:</b></p>
                &lt;?php<br>echo(sqrt(64));<br>?&gt;
                <p><b>Returns:</b></p>
                <?php
                    echo(sqrt(64));  // returns 8
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
        <h3 class="w3-text-blue">round() Function</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>The round() function rounds a floating-point number to its nearest integer::</b></p>
                &lt;?php<br>echo(round(0.60));<br>
                echo(round(0.49));<br>?&gt;
                <p><b>Returns:</b></p>
                <?php
                    echo(round(0.60));  // returns 1
                    echo "<br>";
                    echo(round(0.49));  // returns 0
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">Random Numbers</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>The rand() function generates a random number:</b></p>
                &lt;?php<br>echo(rand());<br>
                ?&gt;
                <p><b>Returns (uppdatera sidan några gånger (F5)):</b></p>
                <?php
                    echo(rand());
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">Complete PHP Math Reference</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
            <p></p>For a complete reference of all math functions, go to our complete <a href="https://www.w3schools.com/php/php_ref_math.asp">PHP Math Reference.</a>
            </p>
            The PHP math reference contains description and example of use, for each function.
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-third">
        <h3 class="w3-text-blue">Constants</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p>Constants are like variables except that once they are defined they cannot be changed or undefined.
                    <br>
                    A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
                    <br>
                    A valid constant name starts with a letter or underscore (no $ sign before the constant name).
                    <br>
                    <b>Note:</b> Unlike variables, constants are automatically global across the entire script.
                </p>
            </div>
        </div>
    </div>
    <div class="w3-third">
        <h3 class="w3-text-blue">Create a Constant</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>To create a constant, use the define() function.</b></p>
                <h5>Syntax</h5>
                <p><i>define(name, value)</i></p>
                <ul>
                    <li><i>name: </i>Specifies the name of the constant
                    <li><i>value: </i>Specifies the value of the constant
                </ul>
            </div>
        </div>
    </div>
    <div class="w3-third">
    <h3 class="w3-text-blue">Constant example</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p><b>Create a constant with a case-insensitive name:</b></p>
                &lt;?php<br>define("GREETING", "Welcome to W3Schools.com!");<br>
                echo greeting;<br>
                ?&gt;
                <p><b>Returns:</b></p>
                <?php
                    define("GREETING", "Welcome to W3Schools.com!");
                    echo GREETING;
                ?>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-quarter">
        <h3 class="w3-text-blue">The if Statement</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <h5>Syntax</h5>
                <p><i><pre>
if (condition) {
    code to be executed
    if condition is true;
} else {
    code to be executed 
    if condition is false;
}
                </pre></i></p>
                <pre>
&lt;?php
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    }
?&gt;
                </pre>
                <p><b>Returns:</b></p>
                <?php
                    $t = date("H");

                    if ($t < "20") {
                      echo "Have a good day!";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
        <h3 class="w3-text-blue">The if...else Statement</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <h5>Syntax</h5>
                <p><i><pre>
if (condition) {
    code to be executed 
    if condition is true;
} else {
    code to be executed 
    if condition is false;
}
                </pre></i></p>
                <pre>
&lt;?php
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?&gt;
               </pre></i></p>
                <p><b>Returns:</b></p>
                <?php
                $t = date("H");

                if ($t < "20") {
                echo "Have a good day!";
                } else {
                echo "Have a good night!";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">The if...elseif...else Statement</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <h5>Syntax</h5>
                <p><i><pre>
if (condition) {
    code to be executed if this
    condition is true;
} elseif (condition) {
    code to be executed if first 
    condition is false and this 
    condition is true;
} else {
    code to be executed if all 
    conditions are false;
}                </pre></i></p>
<pre>
&lt;?php
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?&gt;
               </pre></i></p>
                <p><b>Returns:</b></p>
                <?php
                $t = date("H");

                if ($t < "10") {
                echo "Have a good morning!";
                } elseif ($t < "20") {
                echo "Have a good day!";
                } else {
                echo "Have a good night!";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">The switch Statement</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <h5>Syntax</h5>
                <p>Use the switch statement to select one of many blocks of code to be executed.</p>
                <p><i><pre>
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;<
    case label3:
        code to be executed if n=label3;
        break;
        ...<
    default:
        code to be executed if n is
        different from all labels;
    }
                </pre></i></p>
                <pre>
&lt;?php
    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color 
        is neither red, blue, nor green!";
    }
?&gt;
               </pre></i></p>

                </pre></i></p>
                <p><b>Returns:</b></p>
                <?php
    $favcolor = "red";

        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color 
            is neither red, blue, nor green!";
        }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="w3-padding-large w3-border w3-container">
    <div class="w3-quarter">
        <h3 class="w3-text-blue">The while Loop</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
                <p>The while loop executes a block of code as long as the specified condition is true.</p>
                <h5>Syntax</h5>
                <p><i><pre>
while (condition is true) {
  code to be executed;
}
                </pre></i></p>
                <pre>
&lt;?php
    $x = 1;

    while($x <= 5) {
    echo "The number is: $x";
    $x++;
    }
?&gt;
                </pre>

                <p><b>Returns:</b></p>
                <?php
                $x = 1;

                while($x <= 5) {
                echo "The number is: $x <br>";
                $x++;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
        <h3 class="w3-text-blue">The do...while Loop</h3>
        <div class="w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
            <p>The do...while loop will always execute the block of code once, 
                it will then check the condition, and repeat the loop while 
                the specified condition is true.</p>
                <h5>Syntax</h5>
                <p><i><pre>
do {
  code to be executed;
} while (condition is true);
                </pre></i></p>
                <pre>
&lt;?php
    $x = 1;

    do {
        echo "The number is: $x";
        $x++;
    } while ($x <= 5);
?&gt;
                </pre>
                <p><b>Returns:</b></p>
                <?php
                $x = 1;

                do {
                echo "The number is: $x <br>";
                $x++;
                } while ($x <= 5);
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">The for Loop</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
            <p>The for loop is used when you know in advance how many times the script should run.</p>
                <h5>Syntax</h5>
                <p><i><pre>
for (init counter; test counter; 
    increment counter) {
  code to be executed for each iteration;
}
                </pre></i></p>
                <ul>
                    <li><i>init counter: </i>Initialize the loop counter value</li>
                    <li><i>test counter: </i>Evaluated for each loop iteration. 
                    If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.</li>
                    <li><i>increment counter: </i>Increases the loop counter value</li>
                </ul>
                <pre>
&lt;?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x";
}                
?&gt;
                </pre>
                <p><b>Returns:</b></p>
                <?php
                for ($x = 0; $x <= 10; $x++) {
                    echo "The number is: $x <br>";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="w3-quarter">
    <h3 class="w3-text-blue">The foreach Loop</h3>
        <div class="w3-container w3-padding-large">
            <div class="w3-padding-large w3-border w3-hover-border-blue">
            <p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</p>
                <h5>Syntax</h5>
                <p><i><pre>
foreach ($array as $value) {
  code to be executed;
}
                </pre></i></p>
                <pre>
$colors = array("red", "green", 
                "blue", "yellow");

foreach ($colors as $value) {
  echo "$value";
}
                </pre>
                <p><b>Returns:</b></p>
                <?php
                $colors = array("red", "green", 
                                "blue", "yellow");

                foreach ($colors as $value) {
                echo "$value <br>";
                }
                ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>