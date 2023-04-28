<?php
    include("konfigurasi .php");

    $s_db = "CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY ,
        nama varchar(35), 
        email VARCHAR(255), 
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";
    echo "SQL: " . $s_db. "<br>";
    
    //kkoneksi ke DBMS Mysql
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($cnn){
        echo "koneksi ke DBMS Mysql Sukses<br>";
       $hsl = mysqli_query($cnn, $s_db);
       if($hsl){
        echo "membuat Tabel tbUSER sukses<br>";
       }else{
        echo "membuat Tabel tbUSER gagal<br>";
       }
       
    }else{
        echo "koneksi ke DBMS Mysql Gagal<br>";
    }