<?php

    include_once('header.php');

    include_once('PHP_Process/update_password_process.php');//VALIDATIONA ND UPLOAD INTO DB
  


?>

<form action="" method="post" id="reset_password">
<h3> Change Password</h3>
             <table border="0">
            <tr>
                <td><label for="old-password">Old Password</label></td>
                <td><input type="password" name="old-password" placeholder=" ******"> </td>
                <td><?php if(isset($error_old_password)){echo $error_old_password ;} ?></td>
            </tr>
           
            <tr>
                <td><label for="new-password">New Password</label></td>
                <td><input type="password" name="new-password" placeholder=" ******"> </td>
                <td><?php if(isset($error_new_password)){echo $error_new_password ;} ?></td>
            </tr>

             <tr>
                <td><label for="re-password">ReType Password</label></td>
                <td><input type="password" name="re-password" placeholder=" ******"> </td>
                <td><?php if(isset($error_re_password)){echo $error_re_password ;} ?></td>
            </tr>
         
         <tr>
             <td>&nbsp;</td> 
             <td colspan="2"><input type="submit" value="Update"></td> 
             
         </tr>
      
		 
		</table>
        </form>
        
         <?php 
        echo "<a href='profile.php?user_id=$user_id'>GO BACK</a>";
        ?>

       

<?php

    include_once'footer.php';

?>