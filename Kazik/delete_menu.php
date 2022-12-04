<?php
include_once "db-connect.php";

use portalove\DB;

$db = $GLOBALS['db'];

if(isset($_GET['id'])) {
    $delete = $db->deleteFoodMenu($_GET['id']);

    if($delete) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}