<?php
require "../DBconnect.php";

$data = json_decode($_POST['send'], true);
$name = $data['name'];
$cartid = $data['cartid'];
$itemprice = $data['itemprice'];
$quantity = $data['quantity'];
$Userid = $data['userid'];


$db = new Dbconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare(
    "INSERT INTO m_order
            (
                userid,
                orderid,
                phonenumber,
                password

            )
            VALUES
            (
                :name,
                :email,
                :phonenumber,
                :password
            )"
);
$sql->bindValue(":name", $name);
$sql->bindValue(":email", $email);
$sql->bindValue(":phonenumber", $phnumber);
$sql->bindValue(":password", $password);
$sql->bindValue(":del_flg", 0);
$sql->bindValue(":create_date", date("Y/m/d"));

$sql->execute();
