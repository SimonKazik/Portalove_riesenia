<?php
use portalove\DB;
include_once "db-connect.php";
$db = $GLOBALS['db'];
if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true){
    $menu = $db->getFoodMenu();
    echo "<ul>";

    foreach ($menu as $item ) {
        echo '<li>'
            .$item['name'].
            '<br><a href="delete_menu.php?id='.$item['id'].'">Delete</a> 
         <br><a href="update.php?id='.$item['id'].'">Update</a> 
        </li><br>';
    }
    echo "</ul>";
    echo '<a href="insert.php">Pridaj jedlo</a><br><br>';
    echo '<a href="index.php">Späť na stránku</a><br><br>';
    echo '<a href="logout.php">Logout</a><br><br>';
}else{

    ?>
<form method="post" action="login.php">
    Username: <br>
    <input name="username" type="text" placeholder="Username"><br>
    Password: <br>
    <input name="password" type="text" placeholder="Password"><br>
    <input type="submit" name="submit" value="Login">
</form>
<?php
}
?>