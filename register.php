<?php

    include_once'header.php';

?>

<?php

	include('PHP_Process/register_process.php');//VALIDATION AND UPLOAD
		
?>


<form action="" method="post" id="form">
             <table border="0">
             <tr>
             	<td><label for="firstname">First Name </label></td>
             	<td><input type="text" value="<?php if(isset($firstName)){echo $firstName;} ?>" name="firstname" placeholder="Sam"> </td>
			    <td><?php if(isset($error_firstName)){echo $error_firstName; } ?></td>             
             </tr>
             
             <tr>
                 <td><label for="lastname">Last Name </label></td>
                 <td><input type="text" value="<?php if(isset($lastName)){echo $lastName;} ?>" name="lastname" placeholder="Smith"> </td>
			     <td><?php if(isset($error_firstName)){echo $error_lastName;} ?></td>  
            </tr>

            <tr>
                 <td><label for="username">Username </label></td>
                 <td><input type="text" value="<?php if(isset($username)){echo $username;} ?>" name="username" placeholder="Sam_Smith"> </td>
			     <td><?php if(isset($error_username)){echo $error_username;} ?></td>  
            </tr>
            
             <tr>
                 <td><label for="email">Email </label></td>
                 <td><input type="text" value="<?php if(isset($email)){echo $email;} ?>" name="email" placeholder="sam@gmail.com"> </td> 
			     <td><?php if(isset($error_email)) { echo $error_email;} ?> </td>
            </tr>
           
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" placeholder=" ******"> </td>
                <td><?php if(isset($error_password)){echo $error_password ;} ?></td>
            </tr>

             <tr>
                <td><label for="re-password">ReType Password</label></td>
                <td><input type="password" name="re-password" placeholder=" ******"> </td>
                <td><?php if(isset($error_re_password)){echo $error_re_password ;} ?></td>
            </tr>
         
         <tr>
             <td>&nbsp;</td> 
             <td colspan="2"><input type="submit" value="Register    |"> &nbsp <a href="login.php">Login</a></td> 
             
         </tr>
      
		 
		</table>
		</form>

<?php

    include_once'footer.php';

?>