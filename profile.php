<?php

    include_once'header.php';

?>



<?php 

//PRINTS THE USER'S DETAILS
if(!$_GET['user_id']){
    header('Location:index.php');
}else{
$user_id = $_GET['user_id'];
    $sql = "select * from user where user_id = '$user_id' ";

    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                    $email = $row['email'];
                    $firstname = $row['firstname'];  
                    $lastname = $row['lastname']; 
                    $username = $row['username'];
                    $profile_picture = $row['profilepic'];  
                    $status = $row['status']; }};
                    if($status == ''){
                    $status = 'User';}};


                   
                     
           
            echo "
            
<h1 style='text-align:center;'> $username </h1>
<img id='profile_pic_user' src='$profile_picture' style='float:left'><br>
<div style='float:left; margin-left:20%;'>
<p style='font-size:1em;'><strong>E-mail : $email<br></p>
<p style='font-size:1em; text-transform: capitalize;'>Full Name : $firstname $lastname<br> <br>
Status : $status <br></strong></p></div>

<div style='float:left; margin-left:20%;'><br>
            <a href='update_username.php'>Change Username</a><br>
            <a href='update_password.php'>Change Password</a><br>
            <a href='update_pic.php'>Change Image</a><br></div>
            
		     
			";
    ?>

<?php

    include_once'footer.php';

?>