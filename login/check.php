<?php

function query() {
    $con = !empty($_GET['username']) ? trim($_GET['username']) : '没有数据';
    //链接数据库
    $connect = mysqli_connect('127.0.0.1','root','123456','team-project');
    if(!$connect) {
        echo '链接数据库失败';
        return;
    }
    mysqli_set_charset($connect , 'utf-8');
    $sql = "select userName from users where userName = '{$con}'";
    $query = mysqli_query( $connect,$sql);
    // echo $query;
    if(!$query) {
        echo '读取错误';
        return;
    }
    $row = mysqli_fetch_assoc($query);
    if(empty($row)) {
        echo 'kong';
    } else {
        echo 'you';
    }
    mysqli_free_result($query);
    mysqli_close($connect);
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    query();
}
