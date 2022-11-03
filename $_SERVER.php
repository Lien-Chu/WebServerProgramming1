<?php
echo "<p>IP-adress till den som öppnade denna sidan: " . htmlentities($_SERVER['REMOTE_ADDR']);
echo "<p>I HTTP_USER_AGENT går det att utläsa vilken webbläsare som används: " . htmlentities($_SERVER['HTTP_USER_AGENT']);
echo "<p>Allt innehåll i arrayen \$_SERVER:<br><pre>" . htmlentities(print_r($_SERVER, 1)) . "</pre>";
?>
<p><a href = "moment3.php">Tillbaka till exempelkod Moment 3.</a></p>
