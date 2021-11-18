<?php
$username = $_GET["name"];



require "../../DBconnect.php";

if (isset($_POST["submit"])) {
    $Userphnumber = $_POST["phnumber"]; //phonernumber
    $UserInputemail = $_POST["email"];
}

$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$username' "); //Get Username and Password from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if (
    $Userphnumber == $result[0]["phonenumber"] &&
    $UserInputemail == $result[0]["email"]
) {
    require "AfterChangePassword.php";
} else {
    echo "<script>alert('Phone Number and E-mail are not match.');</script>";
    require "FindPassword.php";
}
$name = $_GET['name'];
