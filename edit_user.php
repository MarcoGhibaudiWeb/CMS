<?php

include_once('header.php');

include_once('dbCon.php');

include('PHP_process/upload_process.php'); 

include('PHP_process/edit_user_process.php'); 

echo "
            
<h1 style='text-align:center;'> $username </h1>
<div style='float:left; width:60%; margin-left:10%'>
<img id='profile_pic_user' src='$profile_picture'><br>
Status : $status_print <br></strong></p>
$banned_print
</div>
<div style='float:right; width:20%; margin-right:10%; margin-top:3%'> ";

        
        
        
        //Based on status and admin, it echoes different links with key_strings
        if($status == 'admin'){
            echo "<a href=new_admin.php?user_id=$user_id>Unmod</a><br><br>";
        }else{
            echo "<a href=new_admin.php?user_id=$user_id>Make Admin</a><br><br>";
        }
        if($banned == 'YES'){
            echo"<a href=ban_user.php?user_id=$user_id>unBan user</a><br><br>";
        }else{
            echo"<a href=ban_user.php?user_id=$user_id>Ban user</a><br><br>";
        }
        echo"<a href=delete_user.php?user_id=$user_id>Delete user</a><br><br>";
    

echo "</div>
<div class='clear'></div>";

include_once('footer.php');

?>