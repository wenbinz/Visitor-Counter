#!/usr/local/bin/php
<?php 
exec("python ~/html/cgi-bin/read.py", $output);
echo "Total visitors: $output[0].\n";
$output[0]=$output[0]+1;
exec("python ~/html/cgi-bin/update.py $output[0]");
include("last_visit.php");
include("setcookie.php");
?>
