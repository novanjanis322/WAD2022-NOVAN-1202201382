<?php
    unset($_COOKIE['nama']);
    unset($_COOKIE['email']);
    unset($_COOKIE['password']);
    unset($_COOKIE['nomorhp']);
    setcookie('nama', '', time()-3600,'/');
    setcookie('email', '', time()-3600,'/');
    setcookie('password', '', time()-3600,'/');
    setcookie('nomorhp', '', time()-3600,'/');
    header('location: index.php');

?>
