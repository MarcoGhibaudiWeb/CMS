<?php
$serverName='localhost';
$userName='root';
$password='';
$dbName='94238_CMS';


ini_set('SMTP', "send.one.com"); 

DEFINE('EMAIL', '94238uk@saeinstitute.com');

DEFINE('WEBSITE_URL', 'http://localhost/94238_CMS');



$conn = mysqli_connect($serverName, $userName, $password,$dbName);



?>
