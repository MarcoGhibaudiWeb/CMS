<?php

    include_once('header.php');



?>

<h1 style="text-align:center"> Events </h1>

<?php 

include_once('dbCon.php'); 
    $sql = "select * from post order by post_id desc";

    $result = mysqli_query($conn, $sql);
    
    
    if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                    $title = $row['title'];
                    $content = $row['content'];  
                    $date = $row['day']; 
                    $venue = $row['venue'];
                    $postpic = $row['postpic'];
                    $post_id = $row['post_id']; 
                    $line_up = $row['lineup'];  

            echo"<div class='content'>
                    <div class='news'> 
				        <div class='hover-event'>
						    <a href='blog_post.php?post_id=$post_id'><img src='$postpic'></a>
						    <h3 style='font-size: 2em'>$title</h3>
						    <h4> When : $date<br>Where : $venue<br>Line Up : $line_up</h4>
					    </div>
				    </div>
                </div>";
            }
    }
    

    
        
    ?>

<?php

    include_once('footer.php');

?>