<?php

use function PHPSTORM_META\expectedReturnValues;

function connectDB($hostname,$username,$password, $database) {

    $conn = mysqli_connect($hostname, $username, $password) or die ('No connection'. mysqli_error($conn));

    mysqli_select_db($conn ,$database) or die ('db will not open'. mysqli_error($conn)); 

    mysqli_query($conn, "
    CREATE TABLE IF NOT EXISTS users (
        ID int(11) NOT NULL PRIMARY key AUTO_INCREMENT ,
        fullName varchar(50) NOT NULL ,
        userName varchar(50) NOT NULL UNIQUE,
        phone varchar(11) NOT NULL,
        address varchar(60) NOT NULL,
        password varchar(30) NOT NULL,
        userImg varchar(50) NOT NULL,
        email varchar(30) NOT NULL,
        dateSignin timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        birthdate date NOT NULL
    );
    ");
    
    return $conn;
}

function insert($userImgName){
    
    $query = "INSERT INTO `users`( `fullName`, `userName`, `phone`, `address`, `password`, `userImg`, `email`,
    `birthdate`)
    VALUES
    ('".$_POST["fname"]."'".",'".$_POST["user"]."'".",'".$_POST["phone"]."','".$_POST["address"]."'".','."'".$_POST["pwd"]."'".','."'".$userImgName."'".','."'".$_POST["email"]."'".','."'".$_POST["brithday"]."');";    
    try {

        $result = mysqli_query($GLOBALS['conn'], $query);
        if ($result) {
            // Successfully inserted
            return 1;
        } else {
            // Display general database error
            return 0;
        }
    } catch (mysqli_sql_exception $e) {
        // Check if the error is due to duplicate entry
        return $e->getCode();
    }
 
}

$conn = connectDB("localhost","root",'',"web_project");
