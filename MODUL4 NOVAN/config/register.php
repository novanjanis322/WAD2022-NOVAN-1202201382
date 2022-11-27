<?php
    include "connector-user.php";
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $no_hp=$_POST['no_hp'];
    if($password == $confirm_password){
        $query = mysqli_query($conn_user, "INSERT INTO user_novan(nama, email, password, no_hp) VALUES ('$nama', '$email', '$password', '$no_hp')");
    if($query){
        header('location: ../index.php?page=login');
    }else{
        echo 'password salah';
    }
    
    }
?>

