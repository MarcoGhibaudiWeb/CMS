<?php
$has_error = false;
$user_id = $_SESSION['user_id'];
if(isset($_POST['username'])){

    if(empty($_POST['username'])){
		$error_username= "<div class='validation_arrow_box validation' >Please enter new username</div>";
		$has_error = true;
	} else {
		$username = $_POST['username'];
	}


		if(!$has_error){
            include_once('dbCon.php');

			$sql = "UPDATE user set username = '$username' where user_id = '$user_id' ";
            $result = mysqli_query($conn, $sql);
            
            echo "<script>
				function hideForm(){
      				document.getElementById('new_username').style.display = 'none';
      			}
				window.onload=hideForm;
				</script>
                Your username has changed";
                echo "<br>";}
		} 
  //else if (isset($_POST['username']))
  ?>