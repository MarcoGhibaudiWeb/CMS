<?php

include_once('header.php');

include_once ('PHP_process/admin_check.php');//CHECKS IF THE USER LOGGED IN IS ADMIN

include_once ('PHP_process/insert_post.php')?><!--VALIDATION AND UPLOAD OF POST-->

 <form id ="new_post"  action="" method="post" enctype='multipart/form-data'>
                <table>
                        <tr>
                            <td align="center" colspan="2">
                            <h3>Add new Event</h3> 
                            </td>
                        </tr>

                        <tr>
                            <td><label for="title">Title </label>
                                <div class="error"> <?php if(isset($error_title))echo $error_title?></div>
                                <input type="text" name="title" value="<?php if(isset($title))echo $title?>"/>
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                <label for="content_event">Content </label>
                                <div class="error"> <?php if(isset($error_content))echo $error_content?></div>
                                <textarea id="content_event" name="content_event" >
                                    <?php if(isset($content))echo $content?>
                                </textarea> 
                            </td>
                        </tr>

                        <tr>
                            <td><label for="time">Time </label>
                                <div class="error"> <?php if(isset($error_time))echo $error_time?></div>
                                <input type="date" name="time" value="<?php if(isset($time))echo $time?>"/>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="venue">Venue </label>
                                <div class="error"> <?php if(isset($error_venue))echo $error_venue?></div>
                                <input type="text" name="venue" value="<?php if(isset($venue))echo $venue?>"/>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="line_up">Line Up </label>
                                <div class="error"> <?php if(isset($error_line_up))echo $error_line_up?></div>
                                <input type="text" name="line_up" value="<?php if(isset($line_up))echo $line_up?>"/>
                            </td>
                        </tr>
                        <tr><td>
                        <label for="upload_file">Event Flyer</label><br>
                         <div class="error"> <?php if(isset($error_img))echo $error_img?></div>
                        <input type='file' id='upload_file' name='upload_file' />
                        </td></tr>

                        <tr>
                            <td style='text-align:center' id='submit_event'><input type="submit" value ="PUBLISH" /></td>
                        </tr>
                </table>
            </form>
<?php

include_once('footer.php');
?>