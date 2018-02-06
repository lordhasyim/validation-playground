
<!DOCTYPE html>
<html>
<head>
    <title>form add</title>
    <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>
<body>
    <form id="test_form" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <?php
    $rand = rand();
    $_SESSION['rand'] = $rand;
    echo "sesssion rand : ".$_SESSION['rand'];  
    ?>
        <input type="hidden" value="<?php echo $rand ?>" name="randCheck">
        <p>First Name: <input type="text" size="32" required name="firstname"></p>
        <p>Last Name: <input type="text" size="32" required name="lastname"></p>
        <p><input type="submit" name="submit_button" id="submit_btn">
        <input id="reset_button" type="button" value="Reset Button"></p>
    </form>
    <br>
    <br>
    <br>
    <?php

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $randCheck = $_POST['randCheck'];
    ?>
    <h3>Result</h3>
    <?php
    if ($randCheck == $_SESSION['rand']) {
        echo $_SESSION['rand'];
        echo "rand check sesuai";
        echo "<br />";
        echo "post rand : ".$randCheck;
    } else  {
        echo "rand check tidak sesuai : ";
        echo $_SESSION['rand'];
        echo  " your post rand check : ";
        echo $randCheck;

    }

    
    ?>
<script type="text/javascript">
    
</script>
</body>
</html>