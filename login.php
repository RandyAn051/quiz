
<?php
    
    $usernamelog = 'kelompok';
    $emaillog = 'kelompok@gmail.com';
    $passlog = 'nilaibagus';
    
    session_start();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($username == $usernamelog && $email == $emaillog && $password == $passlog) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
    } 
    else {
       header("Location: register.php");

   }
?>