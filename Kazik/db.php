<?php

namespace portalove;

class db
{
    private $host;
    private $dbName;
    private $username;
    private $password;
    private $port;

    private $connection;



    public function __construct($host, $dbName, $username, $password, $port = 3306)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;

        try {
            $this->connection = new \PDO("mysql:host=$host;dbname=$dbName;port=$port", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function login($username, $password){
        $sql = "SELECT COUNT(id) AS is_admin FROM users WHERE username = '".$username."' AND password ='".$password."'";
        try {
            $query = $this->connection->query($sql);
            $userExists = $query->fetch(\PDO::FETCH_ASSOC);
            if (intval($userExists['is_admin']) === 1){
                return true;
            }else return false;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getMenu()
    {
        $menuItems = [];
        $sql = "SELECT * FROM menu";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $menuItems[] = [
                    'odkaz' => $row['odkaz'],
                    'polozka' => $row['polozka']
                ];
            }
            return  $menuItems;
        } catch (\PDOException $e) {
            return [];
        }
    }
    public function getFoodMenu()
    {
        $menuItems = [];
        $sql = "SELECT * FROM food_menu";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $menuItems[] = [
                    'id' => $row['id'],
                    'image' => $row['image'],
                    'price' => $row['price'],
                    'name' => $row['name'],
                    'text' => $row['text']
                ];
            }
            return  $menuItems;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function updateMenu($id, $image, $price, $name, $text){
        $sql = "UPDATE food_menu SET image='".$image."', price='".$price."', name='".$name."' , text='".$text."' WHERE id = ".$id;
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function insertMenu($id, $image, $price, $name, $text){
        $sql = "INSERT INTO food_menu VALUES (null, '".$image."', '".$price."', '".$name."' , '".$text."')";
        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getOneFood($id)
    {
        $menuItems = [];
        $sql = "SELECT * FROM food_menu WHERE id=".$id;

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $menuItems[] = [
                    'id' => $row['id'],
                    'image' => $row['image'],
                    'price' => $row['price'],
                    'name' => $row['name'],
                    'text' => $row['text']
                ];
            }
            return  $menuItems;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function getChefs()
    {
        $chefs = [];
        $sql = "SELECT * FROM chefs";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $chefs[] = [
                    'image' => $row['image'],
                    'name' => $row['name'],
                    'position' => $row['position']
                ];
            }
            return  $chefs;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function getGallery()
    {
        $gallery = [];
        $sql = "SELECT * FROM gallery";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $gallery[] = [
                    'image' => $row['image'],
                    'name' => $row['name'],
                    'filter' => $row['filter']
                ];
            }
            return  $gallery;
        } catch (\PDOException $e) {
            return [];
        }
    }
    
    public function getFeatures()
    {
        $features = [];
        $sql = "SELECT * FROM features";

        try {
            $query = $this->connection->query($sql);
            while ($row = $query->fetch()) {
                $features[] = [
                    'class' => $row['class'],
                    'header' => $row['header'],
                    'text' => $row['text']
                ];
            }
            return  $features;
        } catch (\PDOException $e) {
            return [];
        }
    }

    public function deleteFoodMenu($id)
    {
        $sql = "DELETE FROM food_menu WHERE id = ".$id;
        var_dump($sql);

        try {
            $this->connection->query($sql);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}