<?php
$file = fopen('/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt', 'r');

$contents = fread($file, filesize('/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt'));
fclose($file);
//$contents = file_get_contents('/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt');

?>