<?php
  $file= fopen("hello.txt","a");

  fwrite($file," This is Flutter demo \n");
 
  fclose($file);
?>