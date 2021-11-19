<?php

require "../../DBconnect.php";

if (isset($_POST["submit"])) {
    $UserInputName = $_POST["Username"]; //Username

}

$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$UserInputName' "); //Get Username and Password from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0) {

    header("Location: FindPassword.php?name=" . $UserInputName);
} else {
    echo "<script>alert('Username not found.');</script>";
    require "ForgetPassword.php";
}
