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
        <a href="deletedatafromaform.php">Delete Data from a Form</a>
        <a href="updatedatafromaform.php">Update Data from a Form</a>
      </div>
    </div>
    <a href="moment6.php">Moment 6</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="w3-container w3-purple" id="header">
  <h1>Moment 5</h1> 
  <p>Databas</p>
</div>

<div class="w3-padding-large w3-container">
    <h3 class="w3-text-purple"><a name = "formresult">My Birthday Reminder App</a></h3>
    <div class="w3-padding-large w3-border w3-hover-border-aqua">
    <table class = "w3-table w3-table-all">
      <tbody>
        <tr class = "w3-purple">
          <td><b>id </b></td>
          <td><b>First name</b></td>
          <td><b>Last name</b></td>
          <td><b>Birthday</b></td>
          <td><b>Congratulate with</b></td>
        </tr>
        <tr>
          <td>1</td>
          <td>John</td>
          <td>Doe</td>
          <td>1992-04-02</td>
          <td>card</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Mary</td>
          <td>Moe</td>
          <td>1967-12-20</td>
          <td>phone</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Julie</td>
          <td>Dooley</td>
          <td>1988-01-30</td>
          <td>facebook</td>
        </tr>
      </tbody>
    </table>
    <p>
    <button>Add</button>
    <button>Update</button>
    <button>Delete</button>
    </p>
    </div>
  </div>
</div>

</body>
</html>