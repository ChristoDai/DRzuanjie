<?php


function register() {
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $connect = mysqli_connect('127.0.0.1','root','123456','team-project');
    mysqli_set_charset($connect , 'utf-8');
    $sql = "insert into users (userName,password,phone) values ('{$userName}','{$password}','{$phone}')";
    $query = mysqli_query( $connect,$sql);
    if(!$query) {
        $GLOBALS['message'] = '写入失败';
        return;
    }
    echo 'success';
}
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
		register();
	}
?>