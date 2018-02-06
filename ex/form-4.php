<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Simple Ajax Form</title>
        <link rel="stylesheet" href="style.css">
        <script src="jquery-2.0.3.min.js"></script>
        <!-- <script src="script.js" type="text/javascript"></script> -->
        
    </head>
    <body>
    <?php

        session_start();
        $rand = md5(uniqid(rand(), TRUE));
        $_SESSION['submit_token'] = bin2hex(random_bytes(32));
        echo "<br />";
        echo "submit token : " . $_SESSION['submit_token'];
        echo "<br />";
    
        
        $name = $_POST['name'];
        $submit_token = $_POST['submit_post_token'];

        echo "submit token post : " . $submit_token;
        echo "<br />";

        if ($_SESSION['submit_token'] != $_POST['submit_post_token']) {
           echo "data siap disimpan";
           //save data
           //unset($_SESSION['submit_token']);

        } else if($_SESSION['submit_token'] === $submit_token) {
            echo "data tidak bisa disimpan, nilai token sama";
        }

        ?>
        <form method="post" name="postForm" action="">

            <ul>
                <li>
                    <input type="hidden" value="<?php echo $_SESSION['submit_token']  ?>" name="submit_post_token">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                    <span class="throw_error"></span>
                </li>
            </ul>
            <input type="submit" value="Send" id="myButton" />
        </form>
        <div id="success"></div>
        <div class="hasil" id="hasil">

    
        </div>
    </body>
</html>