<?php
session_start();
$userName = !empty($_POST['username']) ? trim($_POST['username']) : '没有数据';
$password = !empty($_POST['password']) ? trim($_POST['password']) : '没有数据';

//链接数据库
$connect = mysqli_connect('127.0.0.1','root','123456','team-project');
if(!$connect) {
    echo '链接数据库失败';
    return;
}
mysqli_set_charset($connect , 'utf-8');
$sql = "select userName,password from users where userName = '{$userName}'";
$query = mysqli_query( $connect,$sql);
if(!$query) {
    echo '读取错误';
    return;
}
// while($row = mysqli_fetch_assoc($query)) {

// }
$row = mysqli_fetch_assoc($query);
    if($row['userName'] == $userName && $row['password'] == $password) {
        $_SESSION['username']  = $userName;
        // echo '<script>alert("登陆成功")</script>';
        // header('Location : ../index.php');
        echo 'yes';
    } else {
        echo 'no';
        // echo '<script>alert("密码错误")</script>';
    }
?>