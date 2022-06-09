<?php 

    $password = $_POST['pwd'];

    if ($password != 'CrackedOven44') {
        header("Location: ../admin/admin-login.php?error=wrongpwd");
        exit();
    } elseif ($password == 'CrackedOven44') {
        session_start();
        $_SESSION['userId'] = 1;
        $_SESSION['userUid'] = 1;
       
        header("Location: ../admin/dashboard");
        exit();
        
    } else {
        header("Location: ../admin/admin-login.php?error=nouser");
        exit();
    }