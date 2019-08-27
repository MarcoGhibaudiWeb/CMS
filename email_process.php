<?php

include_once('header.php');

	//If the query_strings are not set, it heads to index.php
	if(!isset($_GET['email']) && !isset($_GET['key']) ){
	  header("Location: index.php");
    }
  
include_once ('dbCon.php');

	//The two vars $email and $key are taken from the query_string
	if (isset($_GET['email']) && filter_var(rawurldecode($_GET['email']), FILTER_VALIDATE_EMAIL)) {
		$email = $_GET['email'];
	}

	if (isset($_GET['key']) && (strlen($_GET['key']) == 40)) {
		$key = $_GET['key'];
	}

	//If both vars are set, it sets NULL the 'activation' in the Database
	if (isset($email) && isset($key)) {

		$sql = "UPDATE user SET Activation = NULL WHERE(Email ='$email' AND Activation='$key')LIMIT 1";
		$result = mysqli_query($conn, $sql) ;
		
		//If the activation is set NULL, it sets the var $_SESSION, to log in the current user.
		if (mysqli_affected_rows($conn) == 1) {
			
			echo "Your account is now active. Go to HomePage <a href='index.php'>HERE</a></div>";
			
			$sql=  "SELECT * FROM user where email='$email'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
					$user_id = $row['user_id'];
					$status = $row['status'];
			
			
			$_SESSION['status']= $status;
			$_SESSION['user_id'] = $user_id;
			$_SESSION['profile_picture']= $row['profilepic'];
						
		}else{
			echo "<div class='warning_arrow_box warning'>Oops !Your account could not be activated. Please recheck the link or contact the system administrator.</div>";
		}
					
		mysqli_close($conn);

	} else {
		
		echo "<div class='error_arrow_box error'>Error Occured .</div>";
	}

include_once'footer.php';

?>



