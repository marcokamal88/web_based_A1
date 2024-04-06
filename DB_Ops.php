<?php 
$conn = mysqli_connect('localhost', 'root', '')
or die ('No connection'. mysqli_error($conn));
mysqli_select_db($conn ,'database1') or die ('db will not open'. mysqli_error($conn)); 
    $query = 'insert into users (fullName,userName,phone,birthdate,address,password,email,userImg) values(?,?,?,?,?,?,?,?);';
    $stmt=mysqli_prepare($conn, $query);
    
    $date = date("Y-m-d"); 
        mysqli_stmt_bind_param($stmt, 'ssisssss', $_POST['fname'], $_POST['user'], $_POST['phone'], $date,$_POST['address'],$_POST['pwd'],$_POST['email'],$_POST['userimg']);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_query($conn, $query) or die (''. mysqli_error($conn));