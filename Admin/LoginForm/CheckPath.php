<?php

//On this page we are going to check Username and Password if they are both correct 
//And we are going seperate the path to the admin view or customer view depending on Username and Password

if (isset($_POST["submit"])) {
    $UserInputname = $_POST["Username"]; //Username  
    $UserInputpassword = $_POST["Password"]; //Password
    //As we have 4 developers in this project so we made ourselves Admins
    if (
        $UserInputname == "Zaw" ||
        $UserInputname == "Zar" ||
        $UserInputname == "Zay" ||
        $UserInputname == "Phu"
    ) {
        //defult password only for Admins
        if ($UserInputpassword == "admin123") {
            //We deliever Admins to the Admin view
            header("Location: ../DashBoard/DashBoard.php");
        } else echo "wrong password";
    }
    //If the name from login form is equal to the name from the DataBase
    if ($UserInputname == $result[0]["name"]) {
        //and if the Passwords are equals too
        if ($UserInputpassword == $result[0]["password"]) {
            //we take our customer to the cspage which is a customer view 
            header("Location: ../../CSpage/cspage.php");
        } else echo "wrong password";
    }
}
