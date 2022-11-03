<?php
 session_start(); // session starts with the help of this function 
  
  echo "Logout Successfully ";  // Print out message
  session_destroy();   // function that Destroys Session 

  header("Location: Login_page.php"); // true header redirect to login page
?>