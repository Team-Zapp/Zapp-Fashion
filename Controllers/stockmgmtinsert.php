<?php

$data = json_decode($_POST['send'], true);
require "../DBconnect.php";
//check for form add product
$pdname = $data['pdname'];
$pdgender = $data['pdgender'];
$category = $data['category'];
$madeof = $data['madeof'];
$orgprice = $data['orgprice'];
$saleprice = $data['saleprice'];
$stock = $data['stock'];
//call DB Class
$db = new Dbconnect();
$dbconnect = $db->connect();
//prepare for insert
$sql = $dbconnect->prepare(
    "INSERT INTO stock_mgmt 
        (
            name,
            create_date,
            gender,
            category,
            madeof,
            orgprice,
            saleprice,
            stock,
            del_flag
        ) 
        VALUES 
        (
            :name,
            :create_date,
            :gender,
            :category,
            :madeof,
            :orgprice,
            :saleprice,
            :stock,
            :del_flag
        )"
);
//bind value
$sql->bindValue(":name", $pdname);
$sql->bindValue(":create_date", date("Y/m/d , g:i a"));
$sql->bindValue(":gender", $pdgender);
$sql->bindValue(":category", $category);
$sql->bindValue(":madeof", $madeof);
$sql->bindValue(":orgprice", $orgprice);
$sql->bindValue(":saleprice", $saleprice);
$sql->bindValue(":stock", $stock);
$sql->bindValue(":del_flag", 0);
//run sql
$sql->execute();
echo "yes";


/*$file = $_FILES['pdimage']['name'];
$location = $_FILES['fileupload']['tmp_name'];
$extension = pathinfo($file)['extension'];
$filename = pathinfo($file)['filename'];
if (move_uploaded_file($location, "../Stockmanagement/pdphotos/" . $file . "." . $extension)) {
    echo 'File is successfully uploaded.';
} else {
    echo 'There was some error moving the file to upload directory.';
}*/
