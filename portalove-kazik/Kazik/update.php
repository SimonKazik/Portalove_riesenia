<?php

use portalove\DB;
include_once "db-connect.php";
$db = $GLOBALS['db'];

$food = $db->getOneFood($_GET['id'])[0];
?>

<form method="post" action="update_menu.php">
    Image: <br>
    <input type="text" name="image" value="<?php echo $food['image']; ?>"><br>
    Price: <br>
    <input type="text" name="price" value="<?php echo $food['price']; ?>"><br>
    Name: <br>
    <input type="text" name="name" value="<?php echo $food['name']; ?>"><br>
    about: <br>
    <input type="text" name="text" value="<?php echo $food['text']; ?>"><br>

    <input type="hidden" name="id" value="<?php echo $food['id']; ?>">

    <br><br>
    <br><br>
    <input type="submit" name="submit" value="Update">
</form>