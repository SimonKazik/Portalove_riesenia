<?php
include_once "db-connect.php";

session_destroy();

header('Location: admin.php');