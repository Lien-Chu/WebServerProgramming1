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
    <title>My Birthday Reminder</title>
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
        <a href="my_birthday_reminder_app.php" class="active w3-pale-red">Birthday Reminder</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="w3-container w3-pale-red id=header">
        <h1>My Birthday Reminder App</h1>
        <p>Funktioner och Texthantering</p>
        <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
    </div>
    </div>
    <div class="w3-padding-large w3-container">

        <h3><a name="formresult">List of myfirends</a></h3>
        <div class="w3-padding-large w3-border w3-hover-border-pale-red">
            <p><b><a name="formresult">Order By Lastname</a></b></p>
            <?php
            echo "<table class = 'w3-table w3-table-all'>";
            echo "<tr class ='w3-pale-red'><th>id</th><th>First name</th>
                    <th>Last name</th><th>Birthday</th><th>Congratulate with</th> </tr>";

            class TableRows extends RecursiveIteratorIterator
            {
                function __construct($it)
                {
                    parent::__construct($it, self::LEAVES_ONLY);
                }

                function current()
                {
                    return "<td style='width:150px;'>" . parent::current() . "</td>";
                }

                function beginChildren()
                { //Här kan du få ett felaktigt felmeddelande
                    echo "<tr>";
                }

                function endChildren()
                { //Här kan du få ett felaktigt felmeddelande
                    echo "</tr>" . "\n";
                }
            }

            $servername = "localhost";
            $username = "vicky";
            $password = "1234";
            $dbname = "my_birthday_reminder_app";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT id, First_name, Last_name, Birthday,Congratulate_with FROM myfriends ORDER BY Last_name");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                    echo $v;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</table>";
            ?>
            <br>
            <button><a href="add_myfriends.php">Add</a></button>
            <button><a href="update_myfriends.php">Update</a></button>
            <button><a href="delete_myfriends.php">Delete</a></button>
        </div>
    </div>
</body>

</html>