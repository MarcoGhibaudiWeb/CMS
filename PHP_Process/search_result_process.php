<?php
if($_GET){
$search = $_GET['value'];}


 echo "<h3 style='text-align:center'> Users found for: '$search'  </h3><br><br>";

//THIS SQL PRINTS ALL THE USERS IN THE DATABASE EXCEPT FROM THE USER LOGGED IN 
        $sql = "select * from user where username LIKE '%{$search}%' ";

        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        $username = $row['username']; 
                        $user_id = $row['user_id'];
                        $profile_pic = $row['profilepic'];        
                        echo "<div>
                        <img src='$profile_pic' style = 'width : 5%; margin-left:20%;'> $username";if(($_SESSION)){if($_SESSION['status'] == 'admin'){ echo "<a href='edit_user.php?user_id=$user_id' style='margin-left:10%';>EDIT</a></div>";}}
                }//END OF WHILE
        }else{
                echo "<p style='text-align:center'>No users found for '$search'</p>";
        }

 echo "<h3 style='text-align:center'> Events found for: '$search'  </h3>";

//THIS SQL PRINTS ALL THE USERS IN THE DATABASE EXCEPT FROM THE USER LOGGED IN 
        $sql = "select * from post where title LIKE '%{$search}%' ";

        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        $title = $row['title']; 
                        $post_id = $row['post_id'];
                        $postpic = $row['postpic'];        
                        echo "<div>
                       <a href='blog_post.php?post_id=$post_id style='margin-left:10%';> <img src='$postpic' style = 'width : 5%; margin-left:20%;'>  $title </a></div>";
                }//END OF WHILE
        }else{
                echo "<p style='text-align:center'>No events found for '$search'</p>";
        }
?>