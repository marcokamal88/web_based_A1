<?php 




$conn = mysqli_connect('localhost', 'root', '')
or die ('No connection'. mysqli_error($conn));

mysqli_select_db($conn ,'web_project') or die ('db will not open'. mysqli_error($conn)); 


// migrating users table if not exists
mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS users (
    ID int(11) NOT NULL,
    fullName varchar(50) NOT NULL,
    userName varchar(50) NOT NULL,
    phone int(11) NOT NULL,
    address varchar(60) NOT NULL,
    password varchar(30) NOT NULL,
    userImg varchar(50) NOT NULL,
    email varchar(30) NOT NULL,
    dateSignin date NOT NULL,
    birthdate date NOT NULL
);
");

include './upload.php';
$user_image_name = upload_user_image();

if($user_image_name){ /// successfully uploaded
    echo $user_image_name;
}

/*
    $query = 'insert into users (fullName,userName,phone,birthdate,address,password,email,userImg) values(?,?,?,?,?,?,?,?);';
    $stmt=mysqli_prepare($conn, $query);
    
    $date = date("Y-m-d"); 
        mysqli_stmt_bind_param($stmt, 'ssisssss', $_POST['fname'], $_POST['user'], $_POST['phone'], $date,$_POST['address'],$_POST['pwd'],$_POST['email'],$_POST['userimg']);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_query($conn, $query) or die (''. mysqli_error($conn));*/