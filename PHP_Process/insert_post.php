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

	if(empty ($file_name)) {
				$error_img= "Please submit a flyer.";
				$has_error = true;
				} 


	if(empty($_POST['title'])) {
				$error_title = "Please enter title.";
				$has_error = true;
				} else {
					$title = filter_user_input($_POST['title']);
				
				}

	if(empty($_POST['content_event'])) {
				$error_content = "Please enter the event content.";
				$has_error = true;
				} else {
					$content = filter_user_input($_POST['content_event']);
				}
    if(empty($_POST['time'])) {
				$error_time = "Please enter a date.";
				$has_error = true;
				} else {
					$day = filter_user_input($_POST['time']);
				}
    if(empty($_POST['venue'])) {
				$error_venue = "Please enter a venue.";
				$has_error = true;
				} else {
					$venue = filter_user_input($_POST['venue']);
				}

	if(empty($_POST['line_up'])) {
				$error_line_up = "Please enter the line up.";
				$has_error = true;
				} else {
					$line_up = filter_user_input($_POST['line_up']);
				}

                


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
			insert_into_db($title,$content,$day,$venue,$line_up,$file_path);
        } else {
            $error_file = "Sorry, there was a problem uploading your file.";
            $has_error = true;
        }   
	}
}


# Sanitising user input

function filter_user_input($data) {
	$data = trim($data); 	
	$data = addslashes($data);
	
	return $data;
  
} 


//This function inputs all the data into the DATABASE
function insert_into_db($title,$content,$day,$venue,$line_up,$file_path) {
	include_once('dbCon.php');
	global $conn;
	$user_id = $_SESSION['user_id'];


			  $sql=  "INSERT INTO post (user_id, title, postpic, content, day ,venue, lineup)
						values ('$user_id','$title','$file_path','$content','$day','$venue','$line_up')";
			  $result = mysqli_query($conn, $sql);
			  echo "<script>
				function hideForm(){
      				document.getElementById('new_post').style.display = 'none';
      			}
				window.onload=hideForm;
				</script>
                <h3> Your Post has been submitted with success, come back to the<a href= 'index.php'> HOME PAGE </a></h3>";
				
}

	  
  ?>
 


