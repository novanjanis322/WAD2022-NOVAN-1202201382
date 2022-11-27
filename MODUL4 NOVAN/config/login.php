<?php
    include "connector-user.php";
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($conn_user, "SELECT * from user_novan where email = '$email' && password = '$password'");
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $ambildata=mysqli_fetch_assoc($query);
        if (isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time()+86400*30, '/');
        }

        setcookie('email', $email, time()+86400*30, '/');
        setcookie('nama', $ambildata['nama'], time()+86400*30, '/');
        setcookie('no_hp', $ambildata['no_hp'], time()+86400*30, '/');
        header('location: ../index.php');

    }else{
        echo 'wrong email/password';
    }
?>

