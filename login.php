<?php

    include_once('header.php');

?>

<?php

	include('PHP_Process/login_process.php');
		
?>

<!-- FORM -->
<form action="" method="post">
                <table border="0">
                    <tr>
                        <td> <label for="email">Email </label> </td>
                        <td> <input type="text" value="<?php if(isset($email)){ echo $email;} ?>" name="email" placeholder="john@gmail.com"> </td> 
                        <td> <?php if(isset($error_email)) { echo $error_email; } ?> </td>
                    </tr>
                
                    <tr>
                        <td> <label for="password">Password </label> </td>
                        <td> <input type="password" name="password" placeholder="******"> </td> 
                        <td> <?php if(isset($error_password)) { echo $error_password; } ?> </td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                        <td colspan="2"> <input type="submit" value="Login   |"> <a href="register.php">Register</a>  </td>
                    </tr>
                    
            </table>
</form>

<?php

    include_once('footer.php');

?>