<?php
//If POST is set, it includes a link with a query_string, the key is the value input in the form

if(isset($_POST['search']))
{
    $search = $_POST['search'];

    header('Location: search.php?value='.$search);
}

?>