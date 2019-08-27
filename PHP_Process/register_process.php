<?php

include_once('dbCon.php');

//Registration validation

$has_error = false;

if($_POST){
	

	if(empty($_POST['firstname'])){
		$error_firstName = "<div class='validation_arrow_box validation' >Please enter First Name</div>";
		$has_error = true;
	} else {
		$firstName = $_POST['firstname'];
	}
				
	if(empty($_POST['lastname'])) {
		$error_lastName = "<div class='validation_arrow_box validation' >Please enter Last Name</div>";
		$has_error = true;
	} else {
		$lastName = $_POST['lastname'];
	}

	if(empty($_POST['username'])) {
		$error_username = "<div class='validation_arrow_box validation' >Please enter Last Name</div>";
		$has_error = true;
	} else {
		$username = $_POST['username'];
	}

	if(empty($_POST['email'])) {
		$error_email = "<div class='validation_arrow_box validation' >Please enter Email</div>";
		$has_error = true;
		} else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$error_email = "<div class='validation_arrow_box validation'>Please enter valid email.</div>";
			} else {
				$email = $_POST['email'];
			}


	if(empty($_POST['password'])){
		$error_password= "<div class='validation_arrow_box validation' >Please enter Password</div>";
		$has_error = true;
	} else {
		$password = trim($_POST['password']);
	}

	if($_POST['password'] <> $_POST['re-password']){
		$error_re_password= "<div class='validation_arrow_box validation' >The passwords don't match</div>";
		$has_error = true;}

		if(!$has_error){
			insert_into_db();
		}   

			
		
}	

//This Function input all the data into the DB and Sends a random generated link to the user's email
function insert_into_db(){
		global $firstName, $lastName, $email, $password, $conn, $error_email, $username ;
				
			$sql=  "SELECT * FROM user where email='$email'";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
					$error_email = "<div class='error_arrow_box error'>Sorry This email already exists!</div>";
				}
			else{
				$activation = sha1(uniqid(rand(), true));

				$sql=  "INSERT INTO user (firstname, lastname, password,email,username,activation)
				values ('$firstName','$lastName',sha1('$password'), '$email','$username','$activation')";
				$result = mysqli_query($conn, $sql);

			


				# Send the email.
				$to  = $email;
                $subject = "Registration Confirmation";
               
                $headers  = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";     
                $headers .= "To: ".$email . "\r\n";
                $headers .= "From: 94238uk@saeinstitute.edu " . "\r\n";        
                
                $message = " To activate your account, please click on this link:\n\n";
                $message .= "<a href='".WEBSITE_URL . "/email_activation.php?email=" . urlencode($email) . "&key=$activation '>Click Here</a>";
                
                mail($to, $subject, $message, $headers);
				
				# To hide the form after submission. 
				
				echo "<script>
				function hideForm(){
      				document.getElementById('form').style.display = 'none';
      			}
				window.onload=hideForm;
				</script>";
				
				
	
                echo "<div class='success_arrow_box success'>Thank you for registering! A confirmation email has been sent to ".$email
				." Please click on the activation Link to activate your account. </div>";
                			
				
				
				} 
		
		
		
		} 
				
	
?>

