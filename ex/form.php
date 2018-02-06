<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Simple Ajax Form</title>
		<link rel="stylesheet" href="style.css">
		<script src="jquery-2.0.3.min.js"></script>
		

	</head>
	<body>
		<form method="post" name="postForm">
			<?php
			session_start();
			    $rand = md5(uniqid(rand(), TRUE));
			    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
			    echo "csrf token : " . $_SESSION['csrf_token'];
			    $_SESSION['submit_id'] = $rand;
        		echo "<br />";
			    echo "submit id : " . $_SESSION['submit_id'];

			 ?>
			<ul>
				<li>
					<input type="hidden" value="<?php echo $_SESSION['csrf_token']  ?>" name="csrf_token">
					<input type="hidden" value="<?php echo $_SESSION['submit_id']  ?>" name="submit_post_id">

					<label for="name">Name</label>
					<input type="text" name="name" id="name" />
					<span class="throw_error"></span>
				</li>
			</ul>
			<input type="submit" value="Send" id="myButton" />
		</form>
		<div id="success"></div>
		<div class="hasil" id="hasil">
     <?php

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $post_csrf_token = $_GET['csrf_token'];
    $submit_id = $_GET['submit_id']
    ?>
    <h3>Result</h3>
    <h4>csrf</h4>
    <?php
    if ($post_csrf_token == $_SESSION['csrf_token']) {
        echo $_SESSION['csrf_token'];
        echo "rand check sesuai";
        echo "<br />";
        echo "post rand : ".$post_csrf_token;
    } else  {
        echo "rand check tidak sesuai : ";
        echo $_SESSION['csrf_token'] ;
        echo "<br />";

        echo  " your post rand check : ";
        var_dump($post_csrf_token) ;

    }
    ?>
    <h4>token posting</h4>
    <?php 
    	if ($submit_id == $_SESSION['submit_id']) {
        echo $_SESSION['submit_id'];
        echo "post submit id  sama";
        echo "<br />";
        echo "post submit id : ".$submit_id;
    } else  {
        echo "post submit id tidak sama : ";
        echo $_SESSION['submit_id'] ;
        echo "<br />";

        echo  " post submit id : ";
        var_dump($submit_id) ;

    }
    ?>
		</div>
	</body>
</html>