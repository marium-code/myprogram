<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Akane</h>
        <br>
        <h1>Please login</h>
        <form action="form.php" method= "POST">
          
            <lable>Email</lable>
            <input type= "Email" Name ="Email">
            <br>
            <lable>password</lable>
            <input type= "Password" Name ="Password">
            <br>
            <button typt= "submit"> SUBMIT</button>
    </form>
</body>
</html>

<?php

$email = "Akane@gmail.com";
$password = "123";

if(isset ($_POST["Email"])&& isset ($_POST["Password"])){
    $uemail= $_POST["Email"];
    $upassword= $_POST["Password"];

    if( $email == $uemail) {
        echo "HAHAHA";
    }
    else{
        echo "Wrong email";
    }
}

  


    



