<?php

require "DBConnection.php";

if (isset($_POST["submit"])) {
    $UserInputName = $_POST["Username"]; //Username
    $UserInputPassword = $_POST["Password"]; //Password
}

$db = new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT name,password FROM customer_info WHERE name='$UserInputName' "); //Get Username and Password from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);


require "CheckPath.php";//deliever fecthed Username and Password to CheckPath.php
