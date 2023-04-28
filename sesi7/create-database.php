<?php
    include("konfigurasi .php");

    $s_db = "CREATE DATABASE " . DBNAME;
    echo "SQL: " . $s_db. "<br>";
    
    //kkoneksi ke DBMS Mysql
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($cnn){
        echo "koneksi ke DBMS Mysql Sukses<br>";
       $hsl = mysqli_query($cnn, $s_db);
       if($hsl){
        echo "membuat database " .DBNAME. " sukses<br>";
       }else{
        echo "membuat database " .DBNAME. " gagal<br>";
       }
       
    }else{
        echo "koneksi ke DBMS Mysql Gagal<br>";
    }