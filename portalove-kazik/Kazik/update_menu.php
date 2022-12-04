<?php
use portalove\DB;
include_once "db-connect.php";

$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update = $db->updateMenu(
        $_POST['id'],
        $_POST['image'],
        $_POST['price'],
        $_POST['name'],
        $_POST['text']
    );

    if($update) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}