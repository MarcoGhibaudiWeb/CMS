<?php

//Form Validation
    $has_error = false;
$user_id = $_SESSION['user_id'];
if(isset($_POST['old-password'])){

    if(empty($_POST['old-password'])){
		$error_old_password= "<div class='validation_arrow_box validation' >Please enter Password</div>";
		$has_error = true;
	} else {
		$old_password = $_POST['old-password'];
	}

    if(empty($_POST['new-password'])){
		$error_new_password= "<div class='validation_arrow_box validation' >Please enter Password</div>";
		$has_error = true;
	} else {
		$new_password = $_POST['new-password'];
	}


    if($_POST['new-password'] <> $_POST['re-password']){
		$error_re_password= "<div class='validation_arrow_box validation' >The passwords don't match</div>";
		$has_error = true;}

		//IF there are no errors, it changes the password with a sha1() in theD DB

		if(!$has_error){
            include_once('dbCon.php');

			$sql = "SELECT * from user where user_id='$user_id'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            $password = $row['password'];}}
            

            if($password != sha1($old_password)){
                $has_error = true;
                $error_old_password= "<div class='validation_arrow_box validation' >The password dont match with the one in the system, cunt!</div>";
               
               
               

            }else{
                $password = sha1($new_password);
                $sql = "UPDATE user set password = '$password'";
            $result = mysqli_query($conn ,$sql);
            echo "<script>
				function hideForm(){
      				document.getElementById('reset_password').style.display = 'none';
      			}
				window.onload=hideForm;
				</script>
                Your password has changed";
                echo "<br>";}
		} 
} 

?>