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
  <title>Moment 5</title>
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
      <button class="dropbtn active w3-purple">Moment 5
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="moment5.php">Moment 5</a>
        <a href="insertdatafromform.php">Insert Data from a Form</a>
        <a href="deletedatafromaform.php">Delete Data from a Form</a>
      </div>
    </div>
    <a href="moment6.php">Moment 6</a>
    <a href="leapYear.php">Leap Year</a>
    <a href="suvery.php">Suvery with new page</a>
    <a href="suvery2.php">Suvery with same page</a>
    <a href="welcome_back.php">Welcome Back</a>
    <a href="login_page.php">Login Page</a>
    <a href="my_birthday_reminder_app.php">Birthday Remander</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="w3-container w3-purple" id="header">
  <h1>Moment 5</h1> 
  <p>Databas</p>
  <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
</div>

<div class="w3-padding-large w3-container">
    <div class="w3-half">
      <h3 class="w3-text-purple"><a name = "formresult">DB and Forms</a></h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <p><b><a name = "formresult">Order By Lastname (PDO)</a></b></p>
        <?php
        echo "<table class = 'w3-table w3-table-all'>";
        echo "<tr class = 'w3-blue'><th>Id</th><th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th></tr>";

        class TableRows extends RecursiveIteratorIterator {
            function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
            }

            function beginChildren() { //Här kan du få ett felaktigt felmeddelande
            echo "<tr>";
            }

            function endChildren() { //Här kan du få ett felaktigt felmeddelande
            echo "</tr>" . "\n";
            }
        }

        $servername = "localhost";
        $username = "vicky";
        $password = "1234";
        $dbname = "myDB";
        $empty = true;

        // Create connection  
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM MyGuests ORDER BY lastname");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
            }
        } catch(PDOException $e) { // Check connection

            echo "Error: " . $e->getMessage();
        }
        $conn = null; // Close connection
        echo "</table>";
        ?>
        </div>
    </div>
    <div class="w3-half">
        <h3 class="w3-text-purple">DB and Forms</h3>
        <div class="w3-padding-large w3-border w3-hover-border-aqua">
            <p><b>Update Data from a Form (OOP)</b></p>

            <?php
            $servername = "localhost";
            $username = "vicky";
            $password = "1234";
            $dbname = "myDB";

            $d_fname = $d_lname = $d_email = "";
            $IDErr = $fnameErr = $lnameErr = $emailErr = "";
            $empty = true;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['find'])) 
                {
                    $d_ID = htmlspecialchars($_REQUEST['d_ID']);

                    if (empty($d_ID)) 
                    {
                        $d_IDErr = "ID is required";
                    } 
                    else 
                    {
                        //$d_ID = test_input($d_ID);
                        $d_ID = intval($d_ID);

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) 
                        {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        else
                        {
                            $sql = "SELECT id, firstname, lastname, email FROM MyGuests WHERE id='$d_ID'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) 
                            {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $d_ID = $row["id"];
                                    $d_fname = $row["firstname"];
                                    $d_lname = $row["lastname"];
                                    $d_email = $row["email"];
                                }
                            }
                            else 
                            {
                                echo $d_IDErr = "0 results";
                            }
                        }
                                $conn->close();
                    }
                }
                if (isset($_POST['update'])) {

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    // sql to delete a record
                    $d_ID = intval(htmlspecialchars($_REQUEST['d_ID'])); // Du måste hämta id:et igen från 
                                                                        // formuläret då $d_ID är en lokal variabel
                    $d_fname = htmlspecialchars($_REQUEST['d_fname']);
                    $d_lname = htmlspecialchars($_REQUEST['d_lname']);
                    $d_email = htmlspecialchars($_REQUEST['d_email']);

                    if (empty($d_fname)) {
                        $fnameErr = "First name is required";
                        $empty = true;
                    } else {
                        $d_fname = test_input($d_fname);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zåäöA-Z-ÅÄÖ' ]*$/",$d_fname)) {
                            $fnameErr = "Only letters and white space allowed";
                            $empty = true;
                        }
                        else {
                            $empty = false;
                        }
                    }
        
                    if (empty($d_lname)) {
                        $lnameErr = "Last name is required";
                        $empty = true;
                    } else {
                        $d_lname = test_input($d_lname);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zåäöA-Z-ÅÄÖ' ]*$/",$d_fname)) {
                            $lnameErr = "Only letters and white space allowed";
                            $empty = true;
                        }
                        else {
                            $empty = false;
                        }
                    }
                    
                    if (empty($d_email)) {
                        $emailErr = "Email is required";
                        $empty = true;
                    } else {
                        $d_email = test_input($d_email);
                        // check if e-mail address is well-formed
                        if (!filter_var($d_email, FILTER_VALIDATE_EMAIL)) {
                            $empty = true;
                            $emailErr = "Invalid email format";
                        }
                        else {
                            $empty = false;
                        }
                    }

                    if($empty == false) {
                        $sql = "UPDATE MyGuests SET firstname='$d_fname', lastname='$d_lname', email='$d_email' WHERE id='$d_ID'";
                        if ($conn->query($sql) === TRUE) {
                            echo "<span class='w3-text-green'><b>" . "Record updated successfully" . "</b></span>";
                            $d_fname = $d_lname = $d_email = "";
                            $empty = true;
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                    }
                    $conn->close();
                }
            }

            // Behöver bara deklareras en gång fungerar globalt
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>

            <p><span class="error">* required field</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#formresult">
                ID: <input type="number" name="d_ID" id="d_ID" value="<?php echo $d_ID;?>">
                <span class="error">* <?php echo $IDErr;?></span>
                <br><br>
                Firstname: <input type="text" name="d_fname" id="d_firstName" value="<?php echo $d_fname;?>">
                <span class="error">* <?php echo $fnameErr;?></span>
                <br><br>
                Lastname: <input type="text" name="d_lname" id="d_lastName" value="<?php echo $d_lname;?>">
                <span class="error">* <?php echo $lnameErr;?></span>
                <br><br>
                E-mail: <input type="text" name="d_email" id="d_emailAddress" value="<?php echo $d_email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                <input type="submit" name="find" value="Find">
                <input type="submit" name="update" value="Update">
            </form>
        </div>
    </div>
</div>

</body>
</html>