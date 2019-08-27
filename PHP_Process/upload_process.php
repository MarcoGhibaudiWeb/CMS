<?php

if($_POST){

    $has_error = false;

    $file_name = $_FILES["upload_file"]["name"]; 
    $file_tmp_location = $_FILES["upload_file"]["tmp_name"]; 
    $file_type = $_FILES["upload_file"]["type"]; 
    $file_size = $_FILES["upload_file"]["size"]; 
    $file_error_msg = $_FILES["upload_file"]["error"]; 
    $upload_location  = "assets";
    $file_path = $upload_location."/".$file_name;


  //  $split = explode(".", $file_name); // Split file name into an array using the dot
 //   $file_extension = end($split); 

    if (!$file_name) { // if file not chosen
            $error_file ="Please browse for a file before clicking the upload button.";
            $has_error = true;
        
            } else if($file_size > 5242880) { // if > 5 Megabytes (5242880 Byte)
                    $error_file ="Your file was larger than 5 Megabytes in size.";
                    $has_error = true;
                    unlink($file_tmp_location); 
                    
                            } else if (!preg_match("/.(gif|jpg|png|GIF|JPG|PNG)$/i", $file_name) ) {    
                                    $error_file = "File must be .gif, .jpg, or .png. format!";
                                    $has_error = true;
                                    unlink($file_tmp_location); 
                                    
                                        } else if ($file_error_msg == 1) { // if file upload error key is equal to 1
                                            $error_file = "An error occured while processing the file. Try again.";
                                            $has_error = true;
                                            
                                            /// Remove this last (else if) if you want to overwrite the existing file with tyhe same name.
                                            }

    if(!$has_error){
        $move_file = move_uploaded_file($file_tmp_location, $file_path);

        if($move_file){
             $user_id = $_SESSION['user_id'];

	 $sql = "UPDATE user set profilepic = '$file_path' where user_id = '$user_id'";
    

    $result = mysqli_query($conn, $sql);


    echo "<script>
				function hideForm(){
      				document.getElementById('upload-image').style.display = 'none';
      			}
				window.onload=hideForm;
				</script>
                Your profile pic has changed";
                echo "<br>";
    

        } else {
            $error_file = "Sorry, there was a problem uploading your file.";
            $has_error = true;
        }           

    }
               

        
}

?> 