<?php
    session_start();
    function loginOut(){
        unset($_SESSION['username']);
        // header('Location : /index.php');
    }
    loginOut();
    echo "<script>window.location.href='index.php'</script>";
?>