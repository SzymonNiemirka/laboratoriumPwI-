<?php
$noweDane  = "Hello World";
$fp = fopen("plik.txt", "w");
fputs($fp, $noweDane);
fclose($fp);
?>