<?php

// THIS PROCESS INPUTS NEW COMMENTS FROM THE $_POST
if(isset($_POST['comment'])){

	$post_id = $_GET['post_id'];
	$comment = $_POST['comment'];
	$user = $_SESSION['user_id'];
		
	$sql=  "INSERT INTO comment (post_id, user_id, comment)
				
			values ('$post_id','$user','$comment')";
	
		$result = mysqli_query($conn, $sql);
}
?>

