<?php
if (unlink('/xampp/htdocs/BI_20-21_Gr4/files/openFile.txt')) {
  echo "file was successfully deleted";
} else {
  echo "there was a problem deleting the file";
}
?>