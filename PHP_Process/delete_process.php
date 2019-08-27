 
 <?php

 //THIS PROCESS DELETES POST OR COMMENTS, BASED ON WHICH KEY IS IN THE QUERY_STRING
 if(isset($_GET['delete_post'])){

    $delete_post = $_GET['delete_post'];

    if($delete_post){
        // THE POST IS DELETED
        $sql =  "DELETE FROM post
                WHERE post_id='$delete_post'";

        $result = mysqli_query($conn,$sql);

        //ALL THE COMMENTS OF THE POST ARE DELETED
        $sql =  "DELETE FROM comment
                WHERE post_id='$delete_post'";

        $result = mysqli_query($conn,$sql);
   //INNER HTML OF ALL THE DIV????
         //THIS SCRIPT HIDES THE POST ON THE FIRST RELOAD
         echo"<script>
			    function hidePost(){
      			    document.getElementById('$delete_post').style.display = 'none';
                    
      			}
				window.onload=hidePost;
               
               
				</script>";
                $deleted = true;
    }

 }
 if(isset($_GET['delete_comment'])){

    $delete_comment = $_GET['delete_comment'];

    if($delete_comment){

        ///THE COMMENT IS DELETED
        $sql =  "DELETE FROM comment
                WHERE comment_id='$delete_comment'";

            $result = mysqli_query($conn,$sql);

        //THIS SCRIPT HIDES THE COMMENT ON THE FIRST RELOAD
        echo"<script>
				function hideComment(){
      			    document.getElementById('$delete_comment').style.display = 'none';
      			}
				window.onload=hideComment;
				</script>";
    }
}

?>