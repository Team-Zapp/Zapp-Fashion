<?php

require "../DBconnect.php";
$db = new DBconnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("SELECT * FROM stock_mgmt ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);