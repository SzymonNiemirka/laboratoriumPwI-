<?php

echo "to jest zawartość 33"
    
$fp = fopen("32.php", "r");
$stareDane = fread($fp, filesize("32.php."));
fclose($fp)
$fp = fopen("33.php", "r");
$noweDane  = fread($fp, filesize("33.php."));
fclose($fp)
$stareDane .= $noweDan;
$fp = fopen("32.php", "w");
fputs($fp, $noweDane);
fclose($fp);
?>
