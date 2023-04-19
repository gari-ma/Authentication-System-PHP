<?php
  $file= fopen("hello.txt","w");
  fwrite($file,"hello\n");
 
  fwrite($file,"I am garima bhattarai");
  fclose($file);
?>