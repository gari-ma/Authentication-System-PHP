<?php
       session_start(); 
      if( isset($_SESSION['loggedIn'])!=1){
         header("location: login.php");
      }
  

      
    ?>