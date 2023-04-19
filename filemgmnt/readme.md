 fopen ( $filename, $mode)          mode  -  'a'  'r+'
 fwrite($file , $data)                    -   'r'  'w+'
 fclose($file)                            -   'w'   'a'
 fread



1. eof($file) : returns TRUE if we reached last line.

while(!feof($file)){
 $char=fgetc($file);
echo $char;
echo "<br>";
}
