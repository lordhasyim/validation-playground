<?php
session_start();
	$errors = array(); //To store errors
    $form_data = array(); //Pass back the data to `form.php`
    $name = $_POST['name']; //get name
    $csrf_token = $_POST['csrf_token']; // get random number for form check

    //check token prevent csrf
    $status_token = true;
    if ($csrf_token != $_SESSION['csrf_token']) {
        $status_token = false;
    }
    
    
    /* Validate the form on server side */
    if (empty($_POST['name'])) { //Name cannot be empty
        $errors['name'] = 'Name cannot be blank';   
    }
    
    if (!empty($errors)) { //If errors in validation
    	$form_data['success'] = false;
    	$form_data['errors']  = $errors;
        $form_data['status_token'] = $status_token;

    } else { //If not, process the form, and return true on success
    	$form_data['success'] = true;
        $form_data['name'] = $name;
        $form_data['token_anda'] = $csrf_token;
        $form_data['session_anda'] = $_SESSION['csrf_token'];
        $form_data['status_token'] = $status_token;
    	$form_data['posted'] = 'Data Was Posted Successfully';
    }

    //Return the data back to form.php
    echo json_encode($form_data);