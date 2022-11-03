<?php
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
?>

<!doctype html>
<html lang="sv"> 
<head>
<meta charset="utf-8"/>
<title>php20</title>
</head>
<body>
<h1>Mallsida i PHP</h1>
<?php echo "<p>Now enabled for printing out PHP error messages, and here follows som examples on common PHP error messages.</p>"; ?>

<h2>Felmeddelande av typen NOTICE</h2>
<?php echo $var; // Accessing a uninitiated variable ?>


<h2>Felmeddelande av typen WARNING</h2>
<?php $t = I_AM_NOT_DEFINED; // Accessing a undefined constant ?>


<h2>Felmeddelande av typen WARNING</h2>
<?php floor(); // Funktion is missing one argument ?>

<hr>
<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
<a href="source.php">Källkod</a>
</body>
</html>