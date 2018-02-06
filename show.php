<?php

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $randCheck = $_POST['randCheck'];
    ?>
    <h3>Result</h3>
    <?php
    if (isset($_POST['submit_button']) && $randCheck == $_SESSION['rand']) {
        echo "rand check : " . $randCheck . "   rand check sesuai";
    } else {
        echo "randCheck tidak sama";
    }
