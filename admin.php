
<?php

include_once('header.php');

//THIS SECTION IS ADMIN ONLY, THIS PHP CHECKS THEIR STATUS
include_once ('PHP_process/admin_check.php');

include_once('dbCon.php');
?>

<h3 style='text-align:center'> USERS :  </h3>
<?php
//THIS SQL PRINTS ALL THE USERS IN THE DATABASE EXCEPT FROM THE USER LOGGED IN 
        $sql = "select * from user where user_id != '$user_id' ";

        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        $username = $row['username']; 
                        $user_id = $row['user_id'];
                        $profile_pic = $row['profilepic'];        
                        echo "<div>
                        <img src='$profile_pic' style = 'width : 5%; margin-left:20%;'>$username <a href='edit_user.php?user_id=$user_id' style='margin-left:10%';>EDIT</a></div>";
                }//END OF WHILE
        }//END OF IF

include_once('footer.php');
?>