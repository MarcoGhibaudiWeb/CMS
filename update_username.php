<?php

    include_once('header.php');

    include_once('PHP_Process/update_username_process.php');//VALIDATIONA ND UPLOAD INTO DB
?> 
<form action="" method="post" id="new_username">
<h3> Change Username</h3>
             <table border="0">

             <tr>
                 <td><label for="username">Username </label></td>
                 <td><input type="text" value="<?php if(isset($username)){echo $username;} ?>" name="username" placeholder="Doe"> </td>
			     <td><?php if(isset($error_username)){echo $error_username;} ?></td>  
            </tr>
         
         <tr>
             <td>&nbsp;</td> 
             <td colspan="2"><input type="submit" value="Update"></td>

             
             
         </tr>
      
		 
		</table>
        </form>
        
<?php 
echo "<a href='profile.php?user_id=$user_id'>GO BACK</a>";
        
include_once('footer.php');

?>