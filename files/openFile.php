<?php
$select = "Freshness Restaurant";
if (empty($select))
    echo "Nothing to write";
    else{
$file = fopen("/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt", "a");
fwrite($file, "\n");
fwrite($file  , $select);
echo "data successfully entered";
fclose($file );}