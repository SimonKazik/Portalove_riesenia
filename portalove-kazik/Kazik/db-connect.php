<?php
include_once "db.php";

use portalove\db;

$db = new DB("localhost", "steak", "root", "", 3306);

global $db;
session_start();

?>