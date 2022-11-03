<?php
    session_start();
    $field1 = isset($_POST['field1']) ? htmlentities($_POST['field1']) : null;
    $field2 = isset($_POST['field2']) ? htmlentities($_POST['field2']) : null;



    if($field1){
        $_SESSION['user'] = $field1;
        if($field1 == "ake"){
            header("location:hemlig.php");
            exit;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=post>
        <fieldset>
            <input type="text" name="field1" value=<?=$field1?>>Namn</input>
            
            <input type="text" name="field2" value=<?=$field2?>>Lösen</input>
            <input type="submit" value="Logga in">
            <?php 
            $str = "<p>text<b>stycke</b>åöä?!</p>";
            echo $str;
            echo "<br>" . htmlentities($str);
            echo "<br>" . strip_tags($str);
            echo "<br> specialchars " . htmlspecialchars($str);
            // echo "&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;";
            ?>
        </fieldset>
    </form>
</body>
</html>