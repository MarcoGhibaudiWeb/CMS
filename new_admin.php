<?php

include('header.php');

include_once('dbCon.php');

include('PHP_Process/admin_check.php'); //CHECKS IS USER LOGGED IN IS ADMIN
	
include('PHP_Process/new_admin_process.php');//MAKE ADMIN/MAKE USER
    
include('footer.php');

?>