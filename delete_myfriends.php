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
    <title>Delete Data From My Birthday Reminder</title>
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
        <div class="dropdown">
            <button class="dropbtn">Moment 5
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="moment5.php">Moment 5</a>
                <a href="insertdatafromform.php">Insert Data from a Form</a>
                <a href="updatedatafromaform.php">Update Data from a Form</a>
            </div>
        </div>
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
    <div class="w3-container w3-pale-red" id="header">
        <h1>Delete Data From My Birthday Reminder</h1>
        <p>Databas</p>
        <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
    </div>

    <div class="w3-padding-large w3-container">
        <div class="w3-half">
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
            </div>
        </div>

        <div class="w3-half">
            <h3><a name="formresult">Delete Data from myfriends</a></h3>
            <div class="w3-padding-large w3-border w3-hover-border-pale-red">
                <p><b>Please fill in the form</b></p>

                <?php
               //Set variable to connect to the database
                $servername = "localhost";
                $username = "vicky";
                $password = "1234";
                $dbname = "my_birthday_reminder_app";
                $d_fname = $d_lname = $d_birthday = $d_congratulateWith = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    if (isset($_POST['find'])) {
                        $d_ID = htmlspecialchars($_REQUEST['d_ID']);

                        if (empty($d_ID)) {
                            $d_IDErr = "ID is required";
                        } else {
                            //$d_ID = test_input($d_ID);
                            $d_ID = intval($d_ID);

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } else {
                                $sql = "SELECT id, First_name, Last_name, Birthday, Congratulate_with FROM myfriends WHERE id='$d_ID'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $d_ID = $row["id"];
                                        $d_fname = $row["First_name"];
                                        $d_lname = $row["Last_name"];
                                        $d_birthday = $row["Birthday"];
                                        $d_congratulateWith = $row["Congratulate_with"];
                                    }
                                } else {
                                    echo $d_IDErr = "0 results";
                                }
                            }
                            $conn->close();
                        }
                    }
                    if (isset($_POST['delete'])) {
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // sql to delete a record
                        $d_ID = intval(htmlspecialchars($_REQUEST['d_ID'])); // Du måste hämta id:et igen från 
                        // formuläret då $d_ID är en lokal variabel

                        $sql = "DELETE FROM myfriends WHERE id='$d_ID'";

                        if ($conn->query($sql) === TRUE) {
                            echo "<span class='w3-text-green'><b>" . "Record deleted successfully" . "</b></span>";
                            $d_fname = $d_lname = $d_email = "";
                        } else {
                            echo "Error deleting record: " . $conn->error;
                        }
                        $conn->close();
                    }
                }

                // Behöver bara deklareras en gång fungerar globalt
                function test_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                ?>

                <p><span class="error">* required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#formresult">
                    ID: <input type="number" name="d_ID" id="d_ID" value="<?php echo $d_ID; ?>">
                    <!--<span class="error">* <?php echo $d_IDErr; ?></span>-->
                    <br><br>
                    Firstname: <input type="text" name="d_fname" id="d_firstName" value="<?php echo $d_fname; ?>" disabled>
                    <!--<span class="error">* <?php echo $fnameErr; ?></span>-->
                    <br><br>
                    Lastname: <input type="text" name="d_lname" id="d_lastName" value="<?php echo $d_lname; ?>" disabled>
                    <!--<span class="error">* <?php echo $lnameErr; ?></span>-->
                    <br><br>
                    Birthday: <input type="date" name="d_birthday" id="birthday" value="<?php echo $d_birthday; ?>" disabled>
                    <!--<span class="error">*<?php echo $birthdayErr; ?></span>-->
                    <br><br>
                    Congratulation method: <input type="text" name="d_congratulateWith" id="congratulation" value="<?php echo $d_congratulateWith; ?>" disabled>
                    <!--<span class="error">* <?php echo $congratulateWithErr; ?></span>-->
                    <br> <br>
                    <input type="submit" name="find" value="Find">
                    <input type="submit" name="delete" value="Delete">
                    <button><a href="my_birthday_reminder_app.php" style="text-decoration:none;">Check Result</a></button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>