<?php
  $file= fopen("hello.txt","r");
 

   // $char=fgetc($file);   -- reads character by character 
   // $char=fgets($file);   -- reads sentence by sentence 

   // $char=fscanf($file,"%s")  -- reads line by line of index 
   //echo $char[0];
 
     while(!feof($file)){

    $line= fgets($file);
    $words= explode(' ', $line);
    print_r ( $words);
  
   echo "<br>";
   }
 fclose($file);
?>