<?php
$myfile = fopen("info.txt", "a+");
fwrite($myfile, "\rhi");
fclose($myfile);

$myfile = fopen("info.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("info.txt"));
fclose($myfile);


?>