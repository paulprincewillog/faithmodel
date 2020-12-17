<?php

    require "../../../initialize.php";
    require '../_lib/db.php';
    require 'access.php';

    $x = [];
    $extra_sql = "";
    
    if (isset($_POST['search'])) {
        $query = $db->sanitize($_POST['search']);
        $extra_sql = "WHERE full_name LIKE '%$query%' OR phone_number LIKE '%$query%'";
    }

    $db->sql("SELECT * FROM contacts $extra_sql LIMIT 0, 12");
    if ($db->there_is_data()) {
        $x = $db->getAllData();
    } 
    
    echo json_encode($x);