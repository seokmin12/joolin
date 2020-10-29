<?php

session_start(); // 세션

if($_SESSION['id']!=null){
   session_destroy();
}

echo "<script>window.alert('로그아웃 되셨습니다.')</script>";
echo "<script>location.href='../index.html';</script>";

?>