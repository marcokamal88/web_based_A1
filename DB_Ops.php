<?php

use function PHPSTORM_META\expectedReturnValues;

include("upload.php");
function connectDB($hostname,$username,$password, $database) {

$conn = mysqli_connect($hostname, $username, $password) or die ('No connection'. mysqli_error($conn));

mysqli_select_db($conn ,$database) or die ('db will not open'. mysqli_error($conn)); 
try{
mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS users (
    ID int(11) NOT NULL PRIMARY key AUTO_INCREMENT ,
    fullName varchar(50) NOT NULL ,
    userName varchar(50) NOT NULL UNIQUE,
    phone int(11) NOT NULL,
    address varchar(60) NOT NULL,
    password varchar(30) NOT NULL,
    userImg varchar(50) NOT NULL,
    email varchar(30) NOT NULL,
    dateSignin date NOT NULL DEFAULT CURRENT_TIMESTAMP,
    birthdate date NOT NULL
);
");
}
catch(Exception $e){
return 0;
}

return $conn;
}
function insert($conn){

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $query = "INSERT INTO `users`( `fullName`, `userName`, `phone`, `address`, `password`, `userimg`, `email`,
    `birthdate`)
    VALUES
    ("."'".$_POST["fname"]."'".','."'".$_POST["user"]."'".','.$_POST["phone"].','."'".$_POST["address"]."'".','."'".$_POST["pwd"]."'".','."'".upload_user_image()."'".','."'".$_POST["email"]."'".','."'".$_POST["brithday"]."');";    
    try {
        $result = mysqli_query($conn, $query);
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
mysqli_close($conn);
}