<?php
    include "connector-user.php";
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $nomorhp=$_POST['nomorhp'];
    if($password == $confirm_password){
        $query = mysqli_query($conn_user, "INSERT INTO user_novan(nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$nomorhp')");
    if($query){
        setcookie('nama', $nama, time()+86400*30, '/' );
        setcookie('email', $email, time()+86400*30, '/' );
        setcookie('password', $password, time()+86400*30, '/' );
        setcookie('nomorhp', $nomorhp, time()+86400*30, '/' );
        header('location: ../index.php');
    }else{
        echo 'password salah';
    }
    
    }
?>

