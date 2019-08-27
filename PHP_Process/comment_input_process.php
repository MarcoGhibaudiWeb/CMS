 <?php
 // IF A USER IS LOGGED IN AND HE'S NOT BANNED, IT SHOWS THE INPUT FOR A NEW COMMENT
    if(isset($_SESSION['user_id'])){

        $user_id = $_SESSION['user_id'];
            $sql = "select * from user where user_id = '$user_id' ";
            $result = mysqli_query($conn, $sql);
    
    
            $row = mysqli_fetch_assoc($result);
            $banned = $row['banned'];
        
        if(isset($deleted)){
            echo"The post has been deleted, come back to the <a href='index.php'>Home Page</a>";
        }else{if($banned != 'YES'){
            echo "
            <div id='new_comment' style='text-align:center'>
            <form method='post' action=''>
            <h2> New Comment : </h2>
                  <input type='text' name='comment'>
                  <input type='submit' value='Submit'>
                  </form>
                  </div>";
        }else{
            echo"You are banned from commenting";
        }
    }
}?>