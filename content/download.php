<?php
$file = $_GET['path'];
if (file_exists($file))
{
  header ("Content-Type: application/octet-stream");
  header ("Accept-Ranges: bytes");
  header ("Content-Length: ".filesize($file));
  header ("Content-Disposition: attachment; filename=".$file);  
  readfile($file);
}
else echo "Ошибка";
?>