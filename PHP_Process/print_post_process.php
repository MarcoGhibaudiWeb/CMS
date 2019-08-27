<?PHP
//THE VAR '$post_id' IS TAKEN FROMA QUERY_STRING
    $post_id = $_GET['post_id'];

    //THIS SQL PRINTS ALL THE DETAILS OF THE POST FROM THE DATABASE
    $sql = "select * from post where post_id = '$post_id' ";
        $result = mysqli_query($conn, $sql);
        
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
                $title = $row['title'];
                $content = $row['content'];  
                $date = $row['day']; 
                $venue = $row['venue']; 
                $postpic = $row['postpic'];  
                $user_id_post = $row['user_id']; 
                $line_up = $row['lineup']; 

            echo" <div class='news_post'> 
				        <div >
						    <a href='blog_post.php?post_id=$post_id'><img id='event_pic' src='$postpic'></a>
                            <div class='post_content'>
						    <h3 style='font-size: 2.5em; text-align:center;'>$title</h3>
						    <p style='font-size: 1em'>$content<br><br><h4> When : $date<br>Where : $venue<br>Line Up : $line_up</h4></p>
					   </div></div>
                </div>";

            //IF THE SESSION_USER IS THE AUTHOR OF THE POST, IT SHOWS THE DELETE BUTTON
            if(isset($_SESSION['user_id'])){// even admin should be able to delete post!!!1

                if($user_id_post == $_SESSION['user_id'] || $_SESSION['status'] == 'admin' ){
                
                    echo "<a href='blog_post.php?post_id=$post_id&delete_post=$post_id' id='delete_post_button' ><img src='assets/delete.jpeg'></a>";
                }
            
            }
            echo"<div class='clear'</div>";

        }

    }
    ?>