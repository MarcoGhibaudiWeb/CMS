 <?php

 //This process gets details on the user from the database to print in their profile page
 $user_id = $_GET['user_id'];

    if(isset($_SESSION['user_id'])){

        $sql = "select * from user where user_id = '$user_id' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
                $banned = $row['banned'];
                $status = $row['status'];
                $username = $row['username'];
                $profile_picture = $row['profilepic']; 
                if($status == ''){
                    $status_print = 'User';
                }else{$status_print = 'Admin';}

                if($banned == 'YES'){
                    $banned_print = 'Banned from Commenting';
                }else{$banned_print = '';}
    }
?>