<?php
if(isset($_COOKIE['LastVisit']))
{
$last=$_COOKIE['LastVisit'];
echo "Welcome back! You last visited on $last";
}
else{
echo "Welcome to the site!";
}
?>
