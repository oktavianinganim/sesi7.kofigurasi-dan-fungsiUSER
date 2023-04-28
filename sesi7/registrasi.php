<?php
include("konfigurasi .php");
include("fungsiUSER.php");
    $psn = "";
    if (isset($_POST["txNAMA"])){
     if($_post["txPASS1"] == $_POST["txPASS2"]){
        $nama = $_POST["txNAMA"];
        $email = $_POST["txEMAIL"];
        $user = $_POST["txUSER"];
        $pass = $_POST["txPASS1"];
        $psn = registerUSER($nama, $email, $user, $pass);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    
    <form method="POST" action="registraasi.php">
    <div>
        Nama Lengkap
        <input type="text" name="txNAMA">
   </div>
    <div>
        Email
        <input type="email" name="txEMAIL">
    </div>
    <div>
        User Name
        <input type="text" name="txUSER">
    </div>
    <div>
        password
        <input type="password" name="txPASS1">
    </div>
    <div>
        verifikasi password
        <input type="password" name="txPASS2">
    </div>

    <div>
        <button type="submit"> Registrasi </button>
    </div>

</body>
</html>