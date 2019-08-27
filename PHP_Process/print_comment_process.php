<?PHP
  //THIS SQL PRINTS ALL THE COMMENT WITH THE POST_ID OF THE SAME POST
    $sql = "
select post.*, user.*, comment.* 
from post, user, comment
where user.user_id = post.user_id and 
post.post_id = comment.post_id  and
post.post_id = '$post_id' ";
        $result = mysqli_query($conn, $sql);
        
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
                    $comment = $row['comment'];
                    $date = $row['date'];
                    $user_id_post = $row['user_id']; 
                    $comment_id = $row['comment_id'];
                    $username = $row['username'];

                    
                     
           
            $username = $row['username']; 
            if(!$username){
                $username = 'Deleted User';
            }      
            echo "<div class='comment' id='$comment_id'>
                    <p style =' font-size: 2em'>$comment</p><br> 
                    Posted the : $date  By : $username";
            

            //IF THE SESSION_USER IS THE AUTHOR OR AN ADMIN, IT SHOWS THE DELETE BUTTON
            if(isset($_SESSION['user_id'])){
                
                $user_id = $_SESSION['user_id'];

              
                        $status = $row['status'];
    
                if($user_id_post == $user_id || $status == 'admin') {
                    echo "<a href='blog_post.php?post_id=$post_id&delete_comment=$comment_id' id='delete_comment_button'><img src='assets/delete.jpeg' ></a>
                    <div class='clear'></div>";
                }
            }

            echo "</div>";

            
        } //
    }

    ?>