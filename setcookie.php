
<?php
$Month = 84600 + time();
//this adds a day to the current time
setcookie("LastVisit", date("F jS -g:i a"), $Month);
?>
