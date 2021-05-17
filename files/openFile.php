<?php
$select = "Freshness Restaurant";
if (empty($select))
    echo "Nothing to write";
    else{
//$file = fopen("/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt", "a");
//BY 'w' we specify that we will be writing to the file. If the file doesn’t exist, it’ll be created right away.
$file = fopen('/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt', 'w'); 
$pieces = str_split($select, 1024 * 4);
foreach($pieces as $piece){
    fwrite($file,$piece,strlen($piece));
}
//fwrite($file, "\n");
//fwrite($file  , $select);
echo "data successfully entered";
fclose($file );}