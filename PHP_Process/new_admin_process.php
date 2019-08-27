<?php
//If the user is admin, it becomes user and other way around. If the user is admin, cannot be banned
$user_id = $_GET['user_id'];

	$sql = "select * from user where user_id = '$user_id' ";

    $result = mysqli_query($conn, $sql);
    
    
            $row = mysqli_fetch_assoc($result);
            $status = $row['status'];
			$banned = $row['banned'];
			$previous = $_SERVER['HTTP_REFERER'];

			if($banned == 'YES'){
				echo " A banned user cant be admin, <a href='$previous'>GO BACK</a>";}

			elseif($status != 'admin'){
			  $sql= "UPDATE user set status = 'admin' where user_id = '$user_id'";
			  $result = mysqli_query($conn, $sql);
			  echo "
                <h3>New Admin added, <a href='$previous'>GO BACK</a></a>";}
				else{$sql= "UPDATE user set status = '' where user_id = '$user_id'";
			  $result = mysqli_query($conn, $sql);
			  echo "
                <h3>The user is no longer admin, <a href='$previous'>GO BACK</a> ";}
?>