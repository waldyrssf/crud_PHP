<?php
    session_start();

    //include 'config.php';



    $username1 = $_POST['user'];
    $passwd = $_POST['passwd'];
    $hashed_pw = md5($passwd);
    
    $users = [];

    $fp = fopen('users.csv', 'r');
    while ($row = fgets($fp)) {
        $users[] = explode(',' , $row);
    }


    foreach($users as $user){
        if ($username1 == $user[0] && $hashed_pw == trim($user[1])) {
            $_SESSION['username'] = $user[1];
            $_SESSION['name'] = $user[0];
            
        }
    }
    

    header('location: home.php');
?>
