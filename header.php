<head>	
	
		<title>Undersound</title>
		
		
		<link id="cssStyle" rel="stylesheet"  href="css/style.css"/>

		<link rel="icon" type="image/png" href="../assets/favicon.png"/>
	
        <meta charset="UTF-8">
	
	</head>	
	
	<body>
				<div class='header'>
				<div class="logo">
					<a href="index.php"><img src="assets/logo-01.png" alt="logo"></a>
				</div>



    <form method='post' action='' id='search'>
    <input type='text' name='search' value="<?php if(isset($search)){echo $search;} ?>">
    <input type='submit' value='Search'>
    </form><br><br>
                <div id='nav' ;>
                    <?php 
					include('PHP_Process/search_process.php');

					
					session_start();

                    if(!$_SESSION)
                    {
                        echo "<a href='login.php'> Login | </a> <a href='register.php'> Register</a>  ";
                    }else{
						
					
					include_once('dbCon.php');
					$user_id = $_SESSION['user_id'];
					$sql = "select * from user where user_id = '$user_id'";

    				$result = mysqli_query($conn, $sql);
					if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                    $profile_picture = $row['profilepic']; 
					echo "<a href='profile.php?user_id=$user_id'><img src='$profile_picture' id='profile_pic'></a>";
					if($_SESSION['status']){
							echo "<a href='post.php'> New Event | </a> <a href='admin.php'> Admin | </a>";

						}
					include ("logout.php");
					}}};?>
				
				</div>

				
				
	<div class="clear"></div>
	</div>
				
    