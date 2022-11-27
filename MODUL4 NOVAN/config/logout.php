<?php
    if (isset($_COOKIE['remember'])){
        unset($_COOKIE['nama']);
        unset($_COOKIE['no_hp']);
        unset($_COOKIE['navwarna']);
        unset($_COOKIE['remember']);
        setcookie('nama', '', time()-3600,'/');
        setcookie('no_hp', '', time()-3600,'/');
        setcookie('navwarna', '', time()-3600,'/');
        setcookie('remember', '', time()-3600,'/');
        header('location: index.php');
    }
    else{
        unset($_COOKIE['nama']);
        unset($_COOKIE['email']);
        unset($_COOKIE['password']);
        unset($_COOKIE['no_hp']);
        unset($_COOKIE['navwarna']);
        unset($_COOKIE['remember']);
        setcookie('nama', '', time()-3600,'/');
        setcookie('email', '', time()-3600,'/');
        setcookie('password', '', time()-3600,'/');
        setcookie('no_hp', '', time()-3600,'/');
        setcookie('navwarna', '', time()-3600,'/');
        setcookie('remember', '', time()-3600,'/');
        header('location: index.php');
    }
    
    
