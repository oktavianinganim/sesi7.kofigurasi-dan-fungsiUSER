<?php
 function  registerUSER($nama, $email, $user, $pass){
 $psn = "Insert Data Gagal";
 $iduser = md5($email);
 $sql = "INSERT INTO tbuser(nama, email, username, passkey,iduser)
    VALUES(
        '$nama',
        '$email',
        '$user',
        '$pass',
        '$iduser'
    );";
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($cnn){
        $hsl = mysql_query($cnn, $sql);
        if($hsl){
            $psn = "Insert Data Sukses";
        } 
    }
    return $hsl;
 }