<?php

require "../DBconnect.php";

//check for form add product
if(isset($_POST['submit'])){
    $pdname=$_POST['pdname'];
    $pdgender=$_POST['pdgender'];
    $category=$_POST['category'];
    $madeof=$_POST['madeof'];
    $orgprice=$_POST['orgprice'];
    $saleprice=$_POST['saleprice'];
    $stock=$_POST['stock'];
    

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
    $sql->bindValue(":name", $pdname );
    $sql->bindValue(":create_date", date("Y/m/d , g:i a") );
    $sql->bindValue(":gender", $pdgender );
    $sql->bindValue(":category", $category );
    $sql->bindValue(":madeof", $madeof );
    $sql->bindValue(":orgprice", $orgprice );
    $sql->bindValue(":saleprice", $saleprice );
    $sql->bindValue(":stock", $stock );
    $sql->bindValue(":del_flag", 0 );

    //run sql
    $sql->execute();
}else{
    echo "No";
}


$file = $_FILES['pdimage']['name'];
$location = $_FILES['fileupload']['tmp_name'];
$extension = pathinfo($file)['extension'];
$filename = pathinfo($file)['filename'];
if(move_uploaded_file($location,"../Stockmanagement/pdphotos/".$file.".".$extension)){
echo 'File is successfully uploaded.';
}
else{
echo 'There was some error moving the file to upload directory.';
}

 header("Location: http://localhost/Team1/Admin/Stockmanagement/stockmanagement.php?name=Zaw");


 