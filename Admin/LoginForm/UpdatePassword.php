<?php
$name = $_GET['name'];
require "../../DBconnect.php";

if (isset($_POST['submit'])) {
    $password = $_POST['password'];


    $db = new Dbconnect();
    $dbconnect = $db->connect();
    $sql = $dbconnect->prepare("SELECT * FROM m_user WHERE name='$name' "); //Get Userinfo from DataBase
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);


    $db = new Dbconnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_user
        SET password= :password
        WHERE name=:name;"
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":password", $password);


    $sql->execute();

    echo "<script>alert('Successfully Changed Password.');</script>";
    echo "<script>
    setTimeout(function( )
    {window.location='login.php';  },
    500);
    </script>";
}
