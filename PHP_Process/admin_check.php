
<?php
//THIS VERIFICATION FIRES WHEN USERS TRY TO ACCESS TO AN ADMIN ONLY PAGE AND CHECKS THEIR STATUS
    if(!$_SESSION){
        header('location:index.php');
        }else{
		    if(!$_SESSION['status']){
				header('location:index.php');
        }
    }
?>