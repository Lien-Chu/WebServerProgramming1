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
        <a href="updatedatafromaform.php">Update Data from a Form</a>
      </div>
    </div>
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
<div class="w3-container w3-purple" id="header">
  <h1>Moment 5</h1> 
  <p>Databas</p>
  <a href="source.php">Källkod</a> <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Validera din kod</a>
</div>

<div class="w3-padding-large w3-container">
  <h3 class="w3-text-purple">Databasteori </h3>
  <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p>Det finns några bra skäl till varför man ska använda databaser för att lagra information. 
      Bland annat är det mycket lättare att sortera ut den information man vill ha ur en databas. 
      Detta görs med SQL.</p>
    <p><b>Tabeller</b></p>
    <p>En databas innehåller minst en men oftast flera tabeller.
        Dessa tabeller är uppbyggda på samma sätt som tabellerna i ett kalkylprogram, 
        som t.ex. Excel. Varje tabell består av ett antal kolumner, som definieras när 
        tabellen skapas. För en kundtabell kan vi t.ex. specificera kolumnerna namn, 
        adress, postadress, telefon och kundnr. När man specificerar kolumnerna talar 
        man också om för databashanteraren vad för typ av data kolumnen innehåller. 
        För kundnumret använder man t.ex. datatypen INT (heltal) och för de andra 
        kolumnerna antagligen VARCHAR som betyder sträng av valfri längd.  </p>
    <p>En av kolumnerna, eller attributen som kolumnerna också kallas, måste vara 
      nyckel för tabellen. Varje värde i nyckelkolumnen måste vara unkt för en viss
        rad, d.v.s. det får inte förekomma två rader med samma värde i nyckelkolumnen. 
        Varje gång man fyller på kundtabellen med en ny kund skapas en ny rad i tabellen. </p>
        <p><b>Scheman och relationer</b></p>
    <p>Innan man börjar med det rent praktiska arbetet med att skapa databastabellerna, 
      bör man skissa på ett schema för databasen. Detta kan göras med hjälp av ett E-R-diagram, 
      eller genom att helt enkelt skissa upp de tabeller som ska ingå i databasen, och dra 
      pilar mellan tabellerna där kopplingar finns. </p>
      <b><i>kunder</b></i>
    <table class = "w3-table w3-table-all">
      <tbody>
        <tr class = "w3-purple">
          <td><b>KundID </b></td>
          <td><b>Fornamn</b></td>
          <td><b>Efternamn</b></td>
          <td><b>Adress</b></td>
          <td><b>Postnr</b></td>
          <td><b>Postort</b></td>
        </tr>
        <tr>
          <td>1</td>
          <td>Anders</td>
          <td>Andersson</td>
          <td>Storgatan 3</td>
          <td>10521</td>
          <td>Stockholm</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Berit</td>
          <td>Carlsson</td>
          <td>Kungsgatan 14</td>
          <td>41105</td>
          <td>Göteborg</td>
        </tr>
      </tbody>
    </table>
    <br>
    <b><i>order</b></i>
    <table class = "w3-table w3-table-all">
      <tbody>
        <tr class = "w3-purple">
          <td><b>OrderID </b></td>
          <td><b>KundID </b></td>
          <td><b>Summa </b></td>
          <td><b>Datum</b></td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>250</td>
          <td>2005-12-01</td>
        </tr>
        <tr>
          <td>2</td>
          <td>1</td>
          <td>350</td>
          <td>2005-12-01</td>
        </tr>
        <tr>
          <td>3</td>
          <td>2</td>
          <td>420</td>
          <td>2005-12-15</td>
        </tr>
      </tbody>
    </table>

    <p><b>Relationer mellan tabeller</b></p>
    <p>Som ni ser finns det alltid kopplingar eller relationer mellan de två tabellerna. 
      Relationen består här i att CustomerID i tabellen Orders refererar till CustomerID i 
      tabellen Customers. Det finns tre olika typer av relationer: en till en (1:1), 
      en till många (1:N) samt många till många (N:M). Vi har t.ex. en 1:1 relation mellan 
      en kund och en kunds adress. 1:N relation har vi mellan en kund och kundens order, 
      eftersom en kund kan lägga flera order.
      <p>
      <img src="img/OneToOne.png" alt="OneToOne" class="imgboxcenter">
      <span class="imgboxcenter"><b>En</b> person kör <b>en</b> bil (vid varje tillfälle)</span><br>
      <img src="img/ManyToOne.png" alt="OneToOne" class="imgboxcenter">
      <span class="imgboxcenter"><b>Flera</b> personer (kan) bo i  <b>ett</b> hus (kan) ha <b>flera </b>boende</p></span><br>
      <img src="img/ManyToMany.png" alt="OneToOne" class="imgboxcenter">
      <span class="imgboxcenter"><b>Flera</b> personer (kan) äga <b>flera</b> hus eller <b>flera </b>hus (kan) ha <b>flera </b>ägare</p></span>
      </p>
    <p>Många till många relationer ordnar man genom att <b>skapa en mellanliggande tabell</b>. 
      Säg till exempel att vi tabell över böcker och en över författare. 
      Så länge varje bok endast har en författare får vi en 1:N-relation. Men i många fall 
      har vi ju flera författare till en bok. Då har vi stället en N:M relation, 
      och behöver skapa en extra tabell. </p>
    <p><b>Några tips för design av databaser</b></p>
    <p><b><i class="w3-text-blue">Tänk objektorienterat</i></b></p>
    <p>Med detta menas att du oftast behöver en tabell för varje objekt, t.ex. 
      en tabell för kunder en för produkterna etc. </p>
    <p><b><i class="w3-text-blue">Lagra inte samma data på två ställen</i></b></p>
    <p>Ska du t.ex. skapa ett ordersystem så lågg inte adressinformationen i både order- och kundtabellen. 
      Detta innebär att samma information finns på två ställen, dels i ordertabellen, dels i kundtabellen. 
      Om man nu ändrar kundens adress på ett ställe men inte på det andra, får man inkonsisten information
       - man vet inte vilken adress som är riktig av de två. Det är viktigt att tänka efter noga när 
       man designar sin databas, det är mycket, mycket svårare att göra ändringar när väl alla data är 
       inmatade och programmet för att hantera databasen skrivet! </p>
    <p><b><i class="w3-text-blue">Ett värde i varje kolumn</i></b></p>
    <p>Om du har en tabell över order, ska du inte sätta alla varor som beställts i en kolumn. 
      Skapa i stället en ny tabell (orderinnehåll) där du listar vad som beställts. Denna process 
      kallas normalisering, och finns detaljerat beskriven i mer teoretiska databasböcker, som t.ex. 
      Elmasri: Fundamentals of Database Systems. </p>
    <p><b><i class="w3-text-blue">Tänk på frågorna</i></b></p>
    <p>När du designar databasen ska du ha en lista med helst alla frågor som det är aktuellt att ställa 
      till databasen. Kontrollera att det är möjligt att få svar på frågorna med den aktuella designen. </p>
    <p><b><i class="w3-text-blue">Få tomma värden</i></b></p>
    <p>Om vi t.ex. antar att vi utvecklar ett system för en internetbokhandel där kunderna ska kunna 
      lägga in rescensioner, så kan det vid första anblicken verka logiskt att lägga in rescensionerna 
      i boktabellen. Men eftersom denna tabellkolumn kommer att vara tom i de flesta fall är det bättre 
      att bryta ut den kolumnen, och lägga i en separat tabell tillsamans med bokid. </p>
  </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
<h3 class="w3-text-aqua">MySQL Database</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Database Queries</b></p>
        <p>A query is a question or a request. We can query a database for specific information 
          and have a recordset returned. Look at the following query (using standard SQL):</p>
          <div class="w3-code w3-border notranslate sqlHigh">
            <div>
              SELECT LastName FROM Employees
            </div>
          </div>
          <p>The query above selects all the data in the &quot;LastName&quot; column from the 
            &quot;Employees&quot;table. To learn more about SQL, please visit W3-schools at <a href="https://www.w3schools.com/sql/default.asp">SQL 
            tutorial</a>.</p>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Connect to MySQL</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Should I Use MySQLi or PDO?</b></p>
        <p>If you need a short answer, it would be "Whatever you like".<br>
      <p>PHP Data Objects, also known as PDO, is an interface for accessing databases in PHP 
        without tying code to a specific database.</p>
          <p>Both MySQLi and PDO have their advantages:</p>
          <ul>
            <li>PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL 
              databases.</li>
            <li>So, if you have to switch your project to use another database, PDO makes the 
              process easy. You only have to change the connection string and a few queries. 
              With MySQLi, you will need to rewrite the entire code - queries included.</li>
            <li>Both are object-oriented, but MySQLi also offers a procedural API.</li>
            <li>Both support Prepared Statements. Prepared Statements protect from SQL injection, 
              and are very important for web application security.</p></li>
          </ul>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
<div class="w3-half">
<h3 class="w3-text-aqua">Create a MySQL Database</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
        <p>A database consists of one or more tables.
          You will need special CREATE privileges to create or to delete a MySQL database.</p>
        <p><b>Using MySQLi</b></p>
          <p>The CREATE DATABASE statement is used to create a database in MySQL.
            <p><b>O.B.S Du måste först aktivera MySQL i XAMPP och följa början på instruktionerna i Classroom i 
            i dokumentet "Moment 5.SQL.docx.</b> </p>
            The following examples create a database named "myDB":</p>
            <p><a href="dbexamplecode/createDB.php">Create DB OOP</a></p>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Create a MySQL Database</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Should I Use MySQLi or PDO?</b></p>
        <p>If you need a short answer, it would be "Whatever you like".<br>
          Both MySQLi and PDO have their advantages:
          <ul>
            <li>PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL 
              databases.</li>
            <li>So, if you have to switch your project to use another database, PDO makes the 
              process easy. You only have to change the connection string and a few queries. 
              With MySQLi, you will need to rewrite the entire code - queries included.</li>
            <li>Both are object-oriented, but MySQLi also offers a procedural API.</li>
            <li>Both support Prepared Statements. Prepared Statements protect from SQL injection, 
              and are very important for web application security.</p></li>
          </ul>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-half">
    <h3 class="w3-text-aqua">Create Table</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p>A database table has its own unique name and consists of columns and rows.</p>
      <p><b>Create a MySQL Table Using MySQLi</b></p>
      <p>The CREATE TABLE statement is used to create a table in MySQL.
        We will create a table named "MyGuests", with five columns: 
        "id", "firstname", "lastname", "email" and "reg_date":</p>
        The following examples create a database named "myDB":</p>
        <div class="w3-code w3-border notranslate sqlHigh">
          <div>
            <pre style="font-size: 75%;">
CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
</pre>
          </div>
        </div>
        <b>Notes on the table above:</b><br>
        <p>The data type specifies what type of data the column can hold. 
          For a complete reference of all the available data types, go to W3 schools 
          <a href="https://www.w3schools.com/sql/sql_datatypes.asp">Data Types reference.</a></p>
          <p>After the data type, you can specify other optional attributes for each column:</p>
          <ul>
            <li>NOT NULL - Each row must contain a value for that column, null values are not allowed</li>
            <li>DEFAULT value - Set a default value that is added when no other value is passed</li>
            <li>UNSIGNED - Used for number types, limits the stored data to positive numbers and zero</li>
            <li>AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added</li>
            <li>PRIMARY KEY - Used to uniquely identify the rows in a table. The column with 
              PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT</li>
          </ul>
          <p>Each table should have a primary key column (in this case: the "id" column). Its value must 
            be unique for each record in the table.</p>
          <p>The following examples shows how to create the table in PHP:</p>
          <p><a href="dbexamplecode/createtableoop.php">Create table OOP</a></p>
    </div>
  </div>
  <div class="w3-half">
  <h3 class="w3-text-aqua">Insert Data</h3>
      <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p><b>Using MySQLi OOP</b></p>
        <p>After a database and a table have been created, we can start adding data in them.</p>
        <p>Here are some syntax rules to follow:</p>
          <ul>
            <li>The SQL query must be quoted in PHP</li>
            <li>String values inside the SQL query must be quoted</li>
            <li>Numeric values must not be quoted</li>
            <li>The word NULL must not be quoted</li>
          </ul>
        <p>The INSERT INTO statement is used to add new records to a MySQL table:</p>
        <div class="w3-code w3-border notranslate sqlHigh">
          <div>
            <pre style="font-size: 75%;">
INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)
</pre>
          </div>
        </div>
        <p>To learn more about SQL, visit W3 schools <a href="https://www.w3schools.com/sql/default.asp">SQL tutorial.</a></p>
        <p>In the previous chapter we created an empty table named "MyGuests" with five columns: 
          "id", "firstname", "lastname", "email" and "reg_date". Now, let us fill the table with data.</p>
        <div class="w3-padding w3-pale-yellow">
          <p><b>Note:</b> If a column is AUTO_INCREMENT (like the "id" column) or TIMESTAMP with default 
            update of current_timesamp (like the "reg_date" column), it is no need to be specified 
            in the SQL query; MySQL will automatically add the value.</p>
        </div>
            <p><a href="dbexamplecode/insertdata.php">Insert Data OOP</a></p>
      </div>
    </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-half">
    <h3 class="w3-text-aqua">Get Last Inserted ID</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p>If we perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, we can get 
          the ID of the last inserted/updated record immediately.</p>
        <p>In the table "MyGuests", the "id" column is an AUTO_INCREMENT field:</p>
        <div class="w3-code w3-border notranslate sqlHigh">
          <div>
            <pre style="font-size: 75%;">
CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
</pre>
        </div>
      </div>
        <p>The following examples are equal to the previous 
        example (Insert Data), except that we have added one single 
        line of code to retrieve the ID of the last inserted record. We also 
        echo the last inserted ID:</p>
        <p><a href="dbexamplecode/getlastid.php">Get Last ID OOP</a></p>
    </div>
  </div>
  <div class="w3-half">
    <h3 class="w3-text-aqua">Insert Multiple Records</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p>Multiple SQL statements must be executed with the <span class="w3-text-red">mysqli_multi_query()</span>
        function.</p>
      <p>The following examples add three new records to the "MyGuests" table:</p>
      <p><a href="dbexamplecode/insertMultiple.php">Insert Multiple OOP</a></p>
  </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-half">
    <h3 class="w3-text-aqua">Select Data</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p>The SELECT statement is used to select data from one or more tables:</p>
        <div class="w3-code w3-border notranslate sqlHigh">
          <div>
            <pre style="font-size: 75%;">
SELECT column_name(s) FROM table_name
</pre>
        </div>
      </div>
    <p>or we can use the * character to select ALL columns from a table:</p>
        <div class="w3-code w3-border notranslate sqlHigh">
          <div>
            <pre style="font-size: 75%;">
SELECT * FROM table_name
</pre>
        </div>
      </div>
      <a href="https://www.w3schools.com/sql/default.asp">SQL tutorial</a></p>
      <p>The following example selects the id, firstname and lastname columns from 
        the MyGuests table and displays it on the page:</p>
        <p><a href="dbexamplecode/selectdataoop.php">Select Data OOP</a></p>
    </div>
  </div>
  <div class="w3-half">
    <h3 class="w3-text-aqua">The WHERE Clause</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p>The WHERE clause is used to filter records. The WHERE clause is used to extract 
        only those records that fulfill a specified condition.</p>
      <div class="w3-code w3-border notranslate sqlHigh">
        <div>
          <pre style="font-size: 75%;">
SELECT column_name(s) FROM table_name WHERE column_name operator value 
</pre>
        </div>
      </div>
      <p>The following example selects the id, firstname and lastname columns from the 
        MyGuests table where the lastname is "Doe", and displays it on the page:</p>
        <p><a href="dbexamplecode/selectfilteroop.php">Filter Data OOP</a></p>
    </div>
  </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-half">
    <h3 class="w3-text-aqua">The ORDER BY Clause</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p>The ORDER BY clause is used to sort the result-set in ascending or descending order.</p>
    <p>The ORDER BY clause sorts the records in ascending order by default. 
      To sort the records in descending order, use the DESC keyword.</p>
        <div class="w3-code w3-border notranslate sqlHigh">
          <div>
            <pre style="font-size: 75%;">
SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC 
</pre>
        </div>
      </div>
      <a href="https://www.w3schools.com/sql/default.asp">SQL tutorial</a></p>
      <p>The following example selects the id, firstname and lastname columns from 
        the MyGuests table. The records will be ordered by the lastname column:</p>
        <p><a href="dbexamplecode/orderbyoop.php">Order By OOP</a></p>
    </div>
  </div>
  <div class="w3-half">
    <h3 class="w3-text-aqua">Delete Data</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p>The DELETE statement is used to delete records from a table:</p>
      <div class="w3-code w3-border notranslate sqlHigh">
        <div>
          <pre style="font-size: 75%;">
DELETE FROM table_name
WHERE some_column = some_value 
</pre>
        </div>
      </div>
      <div class="w3-padding w3-pale-yellow">
        <p><b>Notice the WHERE clause in the DELETE syntax:</b> The WHERE clause specifies which 
        record or records that should be deleted. If you omit the WHERE clause, 
        all records will be deleted!</p>
      </div>
      <p>Let's look at the "MyGuests" table:</p>
      <table class = "w3-table w3-table-all">
      <tbody>
        <tr class = "w3-purple">
          <td><b>id </b></td>
          <td><b>firstname</b></td>
          <td><b>lastname</b></td>
          <td><b>email</b></td>
          <td><b>req_date</b></td>
        </tr>
        <tr>
          <td>1</td>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
          <td>2014-10-22 14:26:15</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Mary</td>
          <td>Moe</td>
          <td>mary@example.com</td>
          <td>2014-10-23 10:22:30</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Julie</td>
          <td>Dooley</td>
          <td>julie@example.com</td>
          <td>2014-10-26 10:48:23</td>
        </tr>
      </tbody>
    </table>
      <p>The following examples delete the record with id=3 in the "MyGuests" table:</p>
        <p><a href="dbexamplecode/deletedataoop.php">Delete Data OOP</a></p>
    </div>
  </div>
</div>

<div class="w3-padding-large w3-container">
  <div class="w3-half">
    <h3 class="w3-text-aqua">Update Data</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <p>The UPDATE statement is used to update existing records in a table:</p>
        <div class="w3-code w3-border notranslate sqlHigh">
          <div>
            <pre style="font-size: 75%;">
UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value </pre>
        </div>
      </div>
      <div class="w3-padding w3-pale-yellow">
        <p><b>Notice the WHERE clause in the UPDATE syntax:</b> The WHERE clause 
        specifies which record or records that should be updated. 
        If you omit the WHERE clause, all records will be updated!</p>
      </div>
      <p>Let's look at the "MyGuests" table:</p>
      <table class = "w3-table w3-table-all">
      <tbody>
        <tr class = "w3-purple">
          <td><b>id </b></td>
          <td><b>firstname</b></td>
          <td><b>lastname</b></td>
          <td><b>email</b></td>
          <td><b>req_date</b></td>
        </tr>
        <tr>
          <td>1</td>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
          <td>2014-10-22 14:26:15</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Mary</td>
          <td>Moe</td>
          <td>mary@example.com</td>
          <td>2014-10-23 10:22:30</td>
        </tr>
      </tbody>
    </table>
      <a href="https://www.w3schools.com/sql/default.asp">SQL tutorial</a></p>
      <p>The following examples update the record with id=2 in the "MyGuests" table:</p>
        <p><a href="dbexamplecode/updatedataoop.php">Update Data OOP</a></p>
        <p>After the record is updated, the table will look like this:</p>
      <table class = "w3-table w3-table-all">
      <tbody>
        <tr class = "w3-purple">
          <td><b>id </b></td>
          <td><b>firstname</b></td>
          <td><b>lastname</b></td>
          <td><b>email</b></td>
          <td><b>req_date</b></td>
        </tr>
        <tr>
          <td>1</td>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
          <td>2014-10-22 14:26:15</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Mary</td>
          <td>Doe</td>
          <td>mary@example.com</td>
          <td>2014-10-23 10:22:30</td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="w3-half">
    <h3 class="w3-text-aqua">Limit Data Selections</h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
      <p>MySQL provides a LIMIT clause that is used to specify the number of records to return.</p>
      <p>The LIMIT clause makes it easy to code multi page results or pagination with SQL, and is 
        very useful on large tables. Returning a large number of records can impact on performance.</p>
        <p>Assume we wish to select all records from 1 - 30 (inclusive) from a table called "Orders". 
          The SQL query would then look like this:</p>
      <div class="w3-code w3-border notranslate sqlHigh">
        <div>
          <pre style="font-size: 75%;">
$sql = "SELECT * FROM Orders LIMIT 30";
</pre>
        </div>
      </div>
      <p>When the SQL query above is run, it will return the first 30 records. What if we want to 
        select records 16 - 25 (inclusive)? Mysql also provides a way to handle this: by using OFFSET.</p>
      <p>The SQL query below says "return only 10 records, start on record 16 (OFFSET 15)":</p>
      <div class="w3-code w3-border notranslate sqlHigh">
        <div>
          <pre style="font-size: 75%;">
$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";
</pre>
        </div>
      </div>
      <p>You could also use a shorter syntax to achieve the same result:</p>
      <div class="w3-code w3-border notranslate sqlHigh">
        <div>
          <pre style="font-size: 75%;">
$sql = "SELECT * FROM Orders LIMIT 15, 10";
</pre>
        </div>
      </div>
      <p>Notice that the numbers are reversed when you use a comma.</p>
    </div>
  </div>
</div>

</body>
</html>