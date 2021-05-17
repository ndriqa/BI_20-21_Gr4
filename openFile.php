<?php
/*$select =stripslashes($_POST['feedback-text']); 

if (empty($select))
    echo "Nothing to write";
    else{
$file = fopen("/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt", "a");
fwrite($file, "\n");
fwrite($file  , $select);
echo "data successfully entered";
fclose($file );}*/
if(isset($_POST['feedback-text']))
{
$data=$_POST['feedback-text'];
$fp = fopen('openFile.txt', 'a');
fwrite($fp, "\n");
fwrite($fp, $data);
echo "data successfully entered";
fclose($fp);
}
else{
    echo "Nothing to write";
}

              
             
              
?>