<?php

    require "../../../initialize.php";
    require '../_lib/db.php';

    $x = [];

    $full_name = $db->sanitize($_POST['full_name']);
    $phone_number = $db->sanitize($_POST['phone_number']);

    $db->sql("INSERT INTO contacts (full_name, phone_number) VALUES('$full_name','$phone_number')");

    if ($db->isSuccessful) {
        $x['dd_success'] = true;
        $x['dd_feedback'] = "success"; 
    } else {
        $x['dd_success'] = false;
        $x['dd_feedback'] = $db->feedback; 
    }
    
    echo json_encode($x);