<?php
//This is registration form for new customers whish keep customer info in DataBase
require "../../DBconnect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phnumber = $_POST['phnumber'];
    $password = $_POST['password'];


    $db = new Dbconnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO customer_info
        (
            name,
            email,
            phonenumber,
            password,
            del_flg,
            create_date
        )
        VALUES
        (
            :name,
            :email,
            :phonenumber,
            :password,
            :del_flg,
            :create_date
        )"
    );
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":phonenumber", $phnumber);
    $sql->bindValue(":password", $password);
    $sql->bindValue(":del_flg", 0);
    $sql->bindValue(":create_date", date("Y/m/d"));

    $sql->execute();
} else {
    echo "no";
}
require "login.php";
