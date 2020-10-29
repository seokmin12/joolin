<?php

$id = $_POST['id'];
$pw = $_POST['pw'];
$pwchk = $_POST['pwchk'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$birthyy= $_POST['birthyy'];
$birthmm = $_POST['birthmm'];
$birthdd = $_POST['birthdd'];
$phoneNum1 = $_POST['phoneNum1'];
$phoneNum2 = $_POST['phoneNum2'];
$phoneNum3 = $_POST['phoneNum3'];
$email = $_POST['email'];

$birth = $birthyy. '-' .$birthmm. '-' .$birthdd;
$phone = $phoneNum1. '-' .$phoneNum2. '-' .$phoneNum3;


//아이디 중복 체크
$conn = mysqli_connect('127.0.0.1', 'root', 'seokmin68', 'joolin');
$sql = "SELECT * FROM user_info WHERE id = '$id'";
$ret = mysqli_query($conn, $sql);
$exist = mysqli_num_rows($ret);

if ($exist>0) {
    echo "<script>window.alert('아이디를 사용할 수 없습니다')</script>";
    echo "<script>location.href='../register.html';</script>";
    exit();
}

//회원정보를 DB에 입력
$sql = "INSERT INTO user_info (id, pw, name, gender, birth, phone, email, created) VALUES ('$id', '$pw', '$name', '$gender', '$birth', '$phone', '$email', NOW())";

$result = mysqli_query($conn,$sql);
if($result === false) {
   echo "<script>window.alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요')</script>";
   echo "<script>location.href='../register.html'</script>";

    error_log($mysqli_error($conn));
} else {
    echo "<script>window.alert('가입 되었습니다.')</script>";
    echo "<script>location.href='../login.html';</script>";
}

//비밀번호가 일치하지 않을 때
if ($pw!=$pwchk) {
    echo "<script>window.alert('비밀번호가 일치하지 않습니다.')</script>";
    echo "<script>location.href='../register.html';</script>";
    exit();
}






?>