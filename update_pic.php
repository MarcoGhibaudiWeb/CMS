<?php

    include_once('header.php');

    include('PHP_Process/upload_process.php');//VALIDATIONA ND UPLOAD INTO DB
?>
<div id='upload-image'>
							<p class='error'>
                            <?php if(isset($error_file)){echo $error_file;}?> </p>									
							<form  id='upload_form'  method='post' enctype='multipart/form-data' action=''>
								<input type='file' id='upload_file' name='upload_file' />
								<input type='submit' value='Submit' name='submit-upload' id='submit-upload'><br>
							</form> 							
						
						
</div>
<?php
   
        echo "<a href='profile.php?user_id=$user_id'>GO BACK</a>";

include_once('footer.php');

?>