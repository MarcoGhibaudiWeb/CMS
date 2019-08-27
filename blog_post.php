<?php

include_once('header.php');

include_once('dbCon.php'); 

include_once('PHP_process/comment_process.php'); //THIS PROCESS INSERTS A NEW COMMENT IN THE DB

include_once('PHP_process/delete_process.php'); //THIS PROCESS DELETES A COMMENT OR A POST IN THE DB

include_once('PHP_process/print_post_process.php'); //THIS PROCESS PRINTS THE SELECTED POST

include_once('PHP_process/comment_input_process.php'); //THIS PRINT A FORM FOR THE INPUT OF A NEW COMMENT IF THE USER IS NOT BANNED

include_once('PHP_process/print_comment_process.php');  //THIS PROCESS PRINTS ALL THE COMMENT WITH THE POST_ID SELECTED
    
include_once('footer.php');
?>