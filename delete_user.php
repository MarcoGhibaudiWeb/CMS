<?php

include_once('header.php');

include_once('dbCon.php');

	//THIS SQL DELETES THE ALL FROM  USER WHERE THE USER_ID = KEY IN THE QUERY_STRING
    $user_id = $_GET['user_id'];
	
	
              
	$sql= "DELETE FROM user  where user_id = '$user_id'";
		$result = mysqli_query($conn, $sql);

	$previous = $_SERVER['HTTP_REFERER'];
              
	echo "<h3>USER DELETED, <a href='$previous'>GO BACK</a>";

include_once('footer.php');

?>