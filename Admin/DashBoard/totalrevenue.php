<?php
require "../../DBconnect.php";
$db = new Dbconnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT
(SUM(sm.saleprice)*od.quantity)-(SUM(sm.orgprice) * od.quantity) AS totalrevenue
FROM
m_orderdetail AS od
INNER JOIN stock_mgmt AS sm ON od.itemid = sm.id "); //Get Userinfo from DataBase
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo $result[0]["totalrevenue"];
