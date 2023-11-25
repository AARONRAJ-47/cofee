<?php
   session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if($username!='' && $username=='Aaron')
    {
        if($password!='' && $password=='Aaronraj')
        {          
            $_SESSION['logid']=$username;
            header('location:app_list.php');
        }
        else
        {
            $_SESSION['login']='Password Error';
            header('location:app_list.php');
        }
    }
    else
    {
        $_SESSION['login']='Username or Password Error';
        header('location:index.php');
    }



?>