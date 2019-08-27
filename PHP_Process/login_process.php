<?php

include_once('dbCon.php');

//Login Validation
$has_error = false;

if($_POST) {
		if(empty($_POST['email'])) {
				 $error_email = "<div class='validation_arrow_box validation'>Please enter Email</div>";
				 $has_error = true;
		  }
				
					else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
						    $error_email = "<div class='validation_arrow_box validation'>Please enter valid email.</div>";
					        $has_error = true;
					
		} else {
			$email = $_POST['email'];
		}
			
			
		if(empty($_POST['password'])) {
				 $error_password= "<div class='validation_arrow_box validation'>Please enter Password</div>";
				 $has_error = true;
		} else {
			$password = $_POST['password'];
		}
		
		
		
		if(!$has_error){		
			check_user();
		}
		

} 
		
		
//This function checks if the email and the password match in the DB		
function check_user()
		{

			global $conn, $email, $password,$error_email;

			$sql=  "SELECT * FROM user where email='$email' and password=sha1('$password')";
			$result = mysqli_query($conn, $sql);
	
			if(mysqli_num_rows($result) > 0){
			
					while($row = mysqli_fetch_assoc($result)) {
								$user_id = $row['user_id'];
								$activation = $row['activation'];							
									
								if($activation != null){
											$error_email = "<div class='warning_arrow_box warning'> You need to activate your account! Please check the email.</div>";
																	
								} else {
									session_start();
									$_SESSION['user_id'] = $user_id; 	

								
												$_SESSION['status']= $row['status'];
												$_SESSION['profile_picture']= $row['profilepic'];


									header("Location: index.php");
								}
							
					 } # End of while 
					
				} else {												
					$error_email = "<div class='error_arrow_box error'>Invalid email or password!</div>";					
					} # End of if
				
				
	} # End of check_user function

?>

