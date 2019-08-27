<?php

            // THE VAR '$user_id' is taked from the query_string
			$user_id = $_GET['user_id'];

			//THIS SQL CHECKS IN THE DATABASE FOR THE COL. 'status'  AND 'admin' 
			$sql = "select * from user where user_id = '$user_id' ";

			$result = mysqli_query($conn, $sql);
			
			
					$row = mysqli_fetch_assoc($result);
					$status = $row['status'];
					$banned = $row['banned'];

			$previous = $_SERVER['HTTP_REFERER'];

			//IF THE USER SELECTED IS ADMIN, HE CANNOT BE BANNED
			if($status == 'admin'){

						echo " An admin cant be banned , <a href='$previous'>GO BACK</a>";
			}elseif($banned != 'YES'){ //IF THE USER IS NOT BANNED

						$sql= "UPDATE user set banned = 'YES' where user_id = '$user_id'";
									$result = mysqli_query($conn, $sql);

						echo "<h3>User banned, <a href='$previous'>GO BACK</a>";
			}else{ //IF THE USER IS BANNED
						
						$sql= "UPDATE user set banned = 'NO' where user_id = '$user_id'";
									$result = mysqli_query($conn, $sql);
						
					
       
						echo "<h3>user unbanned, <a href='$previous'>GO BACK</a>";
			}
?>